<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class='container'>

        <h2>BIENVENIDO AL BINGO PHP</h2>
        <div class="row">

            <div class="col-3">
                <form action="controlador.php" method="post">


                <?php
                    for ($i = 0; $i < $_SESSION['numeroJugadores'] - 1; $i++) {


                        echo '

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nick</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nick' . $i . '">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Saldo</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="saldo'.$i.'">
                        </div>';
                    }
                ?>
                 <button type="submit" name="empezar" class="btn btn-primary">Empezar</button>

                </form>
            </div>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>