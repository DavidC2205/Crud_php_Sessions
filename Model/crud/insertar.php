<?php

include('crudconex.php');

if (isset($_POST['insertar'])) {
  
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$horas=$_POST['horas'];
$nivel=$_POST['nivel'];
$profesor=$_POST['profesor'];
$institucion=$_POST['institucion'];
$fecha_inscripcion=$_POST['fecha_inscripcion'];
$fecha_inscripcionF=$_POST['fecha_inscripcionF'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_cierre=$_POST['fecha_cierre'];
$num_Alumnos=$_POST['num_Alumnos'];
$modalidad=$_POST['modalidad'];
$descripcion=$_POST['descripcion'];

  $query = "INSERT INTO clients VALUES(NULL,'$nombre','$precio','$horas','$nivel','$profesor','$institucion','$fecha_inscripcion','$fecha_inscripcionF','$fecha_inicio','$fecha_cierre','$num_Alumnos','$modalidad','$descripcion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Informacion Agregada correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: ../../index.php');

}

?>
