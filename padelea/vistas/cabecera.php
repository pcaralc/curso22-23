<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Padelea</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Favicons -->
  <meta name="theme-color" content="#712cf9">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

</head>

<body>
  <main>
    <div class="container py-4">
      <div class="mb-4 bg-light rounded-3">
        <div class="bg-dark rounded p-2 text-end">
          <span class="text-white "><?= unserialize($_SESSION['jugador'])->getEmail() ?></span>
          <a type="button" class="btn btn-outline-white border-white text-white ms-5" href="enrutador.php?accion=cerrar">Cerrar Sesión</a>
        </div>
        <div class="container-fluid py-5 text-center">
          <h1 class="display-5 fw-bold">PADELEA</h1>
          <a href="enrutador.php?accion=partidas" type="button" class="btn btn-outline-dark">Partidas</a>
          <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#nuevaPartida">Nueva Partida</button>
          
        </div>
      </div>

      <!-- AQUÍ VIENE EL CÓDIGO DE CADA VISTA --->