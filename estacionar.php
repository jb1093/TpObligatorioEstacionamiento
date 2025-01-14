<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
  <!--  <title>ApparCar</title>
    <link  rel="icon"   href="Printer1.ico" type="image/png" />-->
    <?php 
    include_once("titulo.php");

    ?> 
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">

    

<!-- Bootstrap core CSS -->
<!--link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/pricing.css" rel="stylesheet">
    <link href="css/estacionar-css.css" rel="stylesheet">
  </head>
  <body>
<main >    
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" >
  <h5 class="my-0 mr-md-auto font-weight-normal">INICIO</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2" href="WebCam-master/webcam.php">Tomar Foto</a>
    <a class="p-2" href="#">Enterprise</a>
    <a class="p-2" href="#">Support</a>
    <a class="p-2" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="login.php">Cerrar</a>
</div>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <p class="logo-centrado"><a href="index.php"><img class="logo" src="./img/logo-png.png"></a></p>
  <p class="lead">Precio por minuto $2,5</p>
  <!--<input type="text" name="txtPatente" id="txtPatente" placeholder="Ingrese Patente">-->
  <a href="entrada.php"><input type="button" name="btnEntrada" value="ENTRADA" > </a>
  <a href="salida.php"><input type="button" name="btnSalida" value="SALIDA" > </a>
  
</div>
</main>

<form action="hacerEstacionar.php" method="post" enctype="multipart/form-data">
   <div class="divForm">
    <h4>Añadir imagen</h4>
    <input type="file" name="archivo" id="archivo">
    <input type="submit" name="subir" value="Subir"> 
  

  <h4> Descargar archivo </h4>
  <a href="patentesCSV.php"> <input type="button" name="btnDescarga" value="Descargar"> </a>
  <br><br>
  <h4>Punto 9</h4>
  <?php
    include "estacionamiento.php";
    $listaUsuarios=leerArchivo("usuariosLogin.txt");
  ?>
    <select name="punto9" id="cars">
      <option value="todo">Todos</option>
      <?php
        foreach ($listaUsuarios as $dato ) 
        {?>
            <option value="<?php echo $dato[0];?>"><?php echo $dato[0]; ?></option>    

        <?php 
        }
        ?>
    </select>
    <br><br>
   <input type="submit" value="Cargar">
   </div>
</form>
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="https://uxwing.com/wp-content/themes/uxwing/download/07-design-and-development/bootstrap-4.png" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  </body>
</html>
