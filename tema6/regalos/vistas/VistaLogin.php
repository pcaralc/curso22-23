<?php

class VistaLogin
{

    public static function mostrarFormulario($mensaje)
    {

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <title>Document</title>
        </head>

        <body>
            <div class="container mt-5">
                <div class="text-center">
                    <h1 class="text-primary">
                        Regalos de Navidad
                    </h1>

                </div>

                <div class="mt-5 m-auto col-3 ">

                <h3 class="text-dark text-center"> LOGIN</h3>
                <span class="text-danger"> <?=$mensaje;?> </span>

                    <form action='enrutador.php' method='post'>
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email address"/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password"/>
                        </div>

                        <!-- Submit button -->
                        <input type='hidden' name='accion' value='checkLogin'>
                        <button type="submit" class="btn btn-outline-dark mb-4" >Entrar</button>
                    </form>
                </div>
            </div>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        </body>

        </html>


<?php
    }
}
?>