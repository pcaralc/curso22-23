<?php session_start(); ?>
<?php
include("lib.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';
$mail = new PHPMailer(true);

//ACCIONES CON GET
if ($_GET) {

    //Eliminar un proyecto
    if ($_GET['accion'] == "eliminar") {
       unset($_SESSION['proyectos'][$_GET['id']]);
       
        header("Location: proyectos.php");
    }


    //Eliminar todo
    if ($_GET['accion'] == "eliminarTodo") {
        $_SESSION['proyectos'] = array();
        header("Location: proyectos.php");
    }

     //Salir
     if ($_GET['accion'] == "salir") {
        session_destroy();
        header("Location: login.php");
    }

    if ($_GET['accion'] == "enviarEmail") {
        require './vendor/autoload.php';

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->setCreator(PDF_CREATOR);
        $pdf->setAuthor('Pilar');
        $pdf->setTitle('Proyectos de mi empresa');
        $pdf->setSubject('Proyectos');
        $pdf->setKeywords('PHP, PDF, proyectos');

        // set default header data
        //$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
        $pdf->setFooterData(array(0,64,0), array(0,64,128));

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->setHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->setFont('dejavusans', '', 14, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();

        // set text shadow effect
        $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

        // Set some content to print
        $html = "
        <h1>PROYECTOS</h1>
        <i>Todos los proyectos de mi empresa</i><br><br>";
        $html .= "<table border='1' center>";
        $html .= "<tr><td>Nombre</td><td>FechaI</td><td>FechaF</td><td>Dias</td><td>%</td><td>Important</td></tr>";

        foreach($_SESSION['proyectos'] as $proyecto) {
            $html .= "<tr>";
            $html .= "<td>".$proyecto['nombre']."</td>";
            $html .= "<td>".$proyecto['fechaInicio']."</td>";
            $html .= "<td>".$proyecto['fechaFinPrevista']."</td>";
            $html .= "<td>".$proyecto['diasTranscurridos']."</td>";
            $html .= "<td>".$proyecto['porcentajeCompletado']."</td>";
            $html .= "<td>".$proyecto['importancia']."</td>";

            $html .= "</tr>";
        }

        $html .= "</table>";

        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        // ---------------------------------------------------------


        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $flujo = $pdf->Output('ejemplo.pdf', 'S');
        file_put_contents("ejemplo.pdf", $flujo);

        try {
            $valor = 'tfsygxjvtwmkmmfb';
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'emailpruebaejercicio@gmail.com';                     //SMTP username
            $mail->Password   = $valor;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('emailpruebaejercicio@gmail.com', 'Pilar');
            $mail->addAddress($_SESSION['email']);     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('./ejemplo.pdf', 'ejemplo.pdf');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Correo de prueba con Gmail';
            $mail->Body    = 'Este el cuerpo del mensaje <b>ojo, viene con adjunto!</b>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        header("Location: proyectos.php");

    }

}





//ACCIONES CON POST


if ($_POST) {

    if (isset($_POST['nuevo'])) {
        $nombre = filtrado($_POST['nombre']);
        $fechainicio = filtrado($_POST['fechainicio']);
        $fechafin = filtrado($_POST['fechafin']);
        $dias = filtrado($_POST['dias']);
        $porcentaje = filtrado($_POST['porcentaje']);
        $importancia = filtrado($_POST['importancia']);

        //Calculamos el id del proyecto
        
        $ids = array_column($_SESSION['proyectos'], 'id');
        $id = max($ids) + 1;
        
        //si no hay ningún proyecto metido
        // if(empty($_SESSION['proyectos'])){
        //     $id = 0;
        // }else{
        //     $ids = array_column($_SESSION['proyectos'], 'id');
        //     $id = max($ids) + 1;
        // }
        
        
        $proyecto = ['id' => $id, 'nombre' => $nombre, 'fechaInicio' => $fechainicio, 'fechaFinPrevista' => $fechafin, 'diasTranscurridos' => $dias, 'porcentajeCompletado' => $porcentaje, 'importancia' => $importancia];
        $_SESSION['proyectos'][] = $proyecto;

        header("Location: proyectos.php");
    }

    if(isset($_POST['email'])){
        $_SESSION['email'] =    ($_POST['email']);
        $contrasena = filtrado($_POST['contrasena']);

        header("Location: proyectos.php");
    }

    if(isset($_POST['contrasena'])){
        $contrasena = filtrado($_POST['contrasena']);

        $separado = str_split($contrasena);
        $encontrado = false;
        for ($i = 0; $i <count($separado); $i++) {
            if($separado[$i] == strtoupper($separado[$i])){
                $encontrado = true;
                break;
            } 
        }

        if((strlen($contrasena)>=8) && ($encontrado == true) ){
            header("Location: proyectos.php");
        }else{
            header("Location:login.php?error");
        }
    }

}

?>