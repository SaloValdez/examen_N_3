<?php

//recepcionando datos atravez de POST
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$ht = $_POST['ht'];
$tarifa= $_POST['tarifa'];


$sueldo =$ht * $tarifa;

if ($sueldo >=2000) {
  $bon = $sueldo * 0.10;
}else if ($sueldo <= 500){
  $bon = $sueldo * 0.07;
}elseif ($sueldo>500 && $sueldo < 2000) {
  $bon = $sueldo * 0.09;
}

$sueldoNeto =$sueldo + $bon;


include("a_conexion2.php");
//insert----ALUMNO
  $insertar1=("INSERT INTO trabajador (nombre,apellido,dni,horasTrabajo,tarifa,sueldo,bono,sueldoNeto) values ('$nombre','$apellido','$dni','$ht','$tarifa','$sueldo','$bon','$sueldoNeto')");
  $ejecutar1 = $mysqli->query($insertar1);
  if ($ejecutar1->errno)die($ejecutar1->error);

   echo '<script> window.location="index.php"; </script>';

?>
