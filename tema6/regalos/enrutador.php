<?php
session_start();
//session_destroy();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./controladores/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/regalos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/enlaces/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}
spl_autoload_register("autocarga");


// subir imagenes
function subirImagen()
{

    $directorioSubida = "img/";
    $extensionesValidas = array("jpg", "png", "gif");
    if (isset($_FILES['cartel'])) {
        $errores = array();
        $nombreArchivo = $_FILES['cartel']['name'];
        $directorioTemp = $_FILES['cartel']['tmp_name'];
        $tipoArchivo = $_FILES['cartel']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensión del archivo
        if (!in_array($extension, $extensionesValidas)) {
            $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
        }

        // Comprobamos y renombramos el nombre del archivo
        $nombreArchivo = $arrayArchivo['filename'];
        $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
        $nombreArchivo = $nombreArchivo . rand(1, 100);
        // Desplazamos el archivo si no hay errores
        if (empty($errores)) {
            $nombreCompleto = $directorioSubida . $nombreArchivo . "." . $extension;
            move_uploaded_file($directorioTemp, $nombreCompleto);
            //print "El archivo se ha subido correctamente";
        }
    }

    return $nombreCompleto;
}


//Función para filtrar los campos del formulario
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if ($_REQUEST) {
    if (isset($_REQUEST['accion'])) {

        if ($_REQUEST['accion'] == "inicio") {
            ControladorLogin::mostrarLogin();
        }

        if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::comprobarLogin($email, $password);
        }

        if ($_REQUEST['accion'] == "error") {
            ControladorLogin::mostrarLoginError();
        }

        if ($_REQUEST['accion'] == "regalos") {
            ControladorRegalo::mostrarRegalos();
        }

        if ($_REQUEST['accion'] == "cerrar") {
            session_destroy();
            ControladorLogin::mostrarLogin();
        }

        if ($_REQUEST['accion'] == "verRegalo") {
            $idRegalo = filtrado($_REQUEST['id']);
            
            //Antes de mostrar todos los enlaces del regalo nos guardamos el id para poder insertar un nuevo enlace, si el regalo está vacío
            $_SESSION['id']=serialize($idRegalo);
            ControladorEnlace::mostrarEnlaces($idRegalo);
        }

        if ($_REQUEST['accion'] == "eliminar") {
            $id = filtrado($_REQUEST['id']);
            ControladorRegalo::eliminarRegalo($id);
            ControladorRegalo::mostrarRegalos();
        }

        if ($_REQUEST['accion'] == "eliminarEnlace") {
            $id = filtrado($_REQUEST['id']);
            ControladorEnlace::eliminarEnlace($id);

            $idRegalo = unserialize($_SESSION['enlace'])->getIdRegalo();
            ControladorEnlace::mostrarEnlaces($idRegalo);
        }

        if ($_REQUEST['accion'] == "ordenarprecio") {
            ControladorEnlace::ordenar();
        }

        if ($_GET['accion'] == "crearPdf") {
            //Load Composer's autoloader
            require './vendor/autoload.php';

            // create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

            // set document information
            $pdf->setCreator(PDF_CREATOR);
            $pdf->setAuthor('Pilar Cara');
            $pdf->setTitle('Regalos Navidad');
            $pdf->setSubject('Regalos');
            $pdf->setKeywords('TCPDF, PDF, example, test, guide');


            $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

            // set header and footer fonts
            $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

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
            if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
                require_once(dirname(__FILE__) . '/lang/eng.php');
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
            $regalos = ControladorRegalo::devolverRegalos();
            $html = '
            <h1 style="color:red;">Regalos de Navidad</h1>';

            foreach( $regalos as $regalo){
                $enlaces = ControladorEnlace::devolverEnlaces($regalo->getId());

                $html.= '<h4 style="color:#458E7A ;">'.$regalo->getNombre().'</h4>';
                $html.='<table>
                <thead>
                  <tr style="text-decoration: underline;">
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>PRIORIDAD</th>
                    <th>ENLACE A TIENDA</th>
                  </tr>
                </thead>
                <tbody>';

                foreach($enlaces as $enlace){
                    $html.='<tr>
                            <td style="color:#895FC6;">' . $enlace->getNombre() . '</td>
                            <td>' . $enlace->getPrecio() . '</td>
                            <td>' . $enlace->getPrioridad() . '</td>
                            <td><a href="' . $enlace->getWeb() . '">Enlace a tienda</a></td>
                        </tr>';
                }
            };
                $html.='</tbody>';
    
            $html .= "</table>";
    
            // Print text using writeHTMLCell()
            $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

            // ---------------------------------------------------------
            // Close and output PDF document
            // This method has several options, check the source code documentation for more information.
            $flujo = $pdf->Output('regalos.pdf', 'S');
            file_put_contents("regalos.pdf", $flujo);

           header("Location:./regalos.pdf");
        }
    }

    if (isset($_REQUEST["modificar"])) {
        $id = filtrado($_REQUEST['id']);
        $nombre = filtrado($_REQUEST['nombre']);
        $destinatario = filtrado($_REQUEST['destinatario']);
        $precio = filtrado($_REQUEST['precio']);
        $estado = filtrado($_REQUEST['estado']);
        $year = filtrado($_REQUEST['year']);
        ControladorRegalo::modificarRegalo($id, $nombre, $destinatario, $precio, $estado, $year);
        ControladorRegalo::mostrarRegalos();
    }

    if (isset($_GET["insertarRegalo"])) {
        $idUsuario = unserialize($_SESSION['usuario'])->getId();
        $nombre = filtrado($_REQUEST['nombre']);
        $destinatario = filtrado($_REQUEST['destinatario']);
        $precio = filtrado($_REQUEST['precio']);
        $estado = filtrado($_REQUEST['estado']);
        $year = filtrado($_REQUEST['year']);
        ControladorRegalo::insertarRegalo($idUsuario, $nombre, $destinatario, $precio, $estado, $year);
        ControladorRegalo::mostrarRegalos();
    }

    if (isset($_GET["buscarYear"])) {
        $yea = filtrado($_REQUEST['yea']);
        ControladorRegalo::buscarYear($yea);
    }

    if (isset($_REQUEST["insertarEnlace"])) {
        $idRegalo = unserialize($_SESSION['id']);
        $nombre = filtrado($_REQUEST['nombre']);
        $web = filtrado($_REQUEST['web']);
        $precio = filtrado($_REQUEST['precio']);
        $imagen = subirImagen();
        $prioridad = filtrado($_REQUEST['prioridad']);

        $enlace = new Enlace($nombre, $web, $precio, $imagen, $prioridad, $idRegalo);
        ControladorEnlace::insertarEnlace($enlace);
    }
}
