<?php
  require_once "claseCalculo.php";
  echo '<link rel="stylesheet" type="text/css" href="css/procesar.css">';
  
  $val1 = $_POST['val1'] ?? '';
  $val2 = $_POST['val2'] ?? '';
  $opcion = $_POST['opcion'] ?? '';

  if ($val1 && $val2 && $opcion) {
    $calcular = new calculadora();
    $resultado = $calcular->calcularDatos($val1, $val2, $opcion);

    echo '<div class="container">';
    echo '<div class="resultado">';
    echo '<h2>El resultado es:</h2>';
    echo '<h2>'.$resultado.'</h2>';
    echo '<center><a href="index.php" class="button"><button type="button">Volver</button></a></center>';
    echo '</div>';
    echo '</div>';
  } else {
    $url = $_SERVER['HTTP_REFERER'];

    echo '<div class="container">';
    echo '<h2>Error: Debe ingresar los dos valores y la operación.</h2>';
    echo '<a href="'.$url.'" class="button"><button type="button">Volver a intentarlo</button></a>';
    echo '</div>';
  }
?>