<?php 

  session_start();

  include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
  include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
  include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
  include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

  $filas = HabitacionDAO::getHabitacion($_GET["hab"]);
  $fila = HabitacionDAO::fetchHabitacion($filas);

  $_SESSION["id"] = $_GET["hab"];

  $dir = @scandir($_SERVER["DOCUMENT_ROOT"] . "/img/galeria/" . $fila["id"]);
  $img = "/img/galeria/" . $fila["id"] . "/" . $dir[2];

  $cuantos = count($dir);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/head.php");?>
</head>
<body>
  <!-- Zona de header -->
  <div class="container-fluid">

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/header.php");?>

    <!-- Zona de nav-->

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/navigation.php");?>

    <!-- Zona de main -->

    <main id="main">
      <div id="paypal-button"></div>
    </main>

    <!-- Zona del pie -->

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
  </div>
</body>
</html>
