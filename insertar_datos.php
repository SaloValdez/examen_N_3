
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <style media="screen">
img {

    height: 80px;
    width: 190px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
img:hover {
height: 100px;
width: 170px;
}
</style>


  </body>

<?php
    if($_POST){
        $nombre = $_POST['nombre'];

        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $sexo = $_POST['sexo'];
        $cargo = $_POST['cargo'];
        $ht = $_POST['horastrabajadas'];
        $ph = $_POST['pagohoras'];
      //  $dias =$_POST['dia'];
        $pension =$_POST['pensiones'];
        $hijos =$_POST['hijos'];
        $numhijos = $_POST['numhijos'];

          //calculando sueldo Bruto

          $sueldoBruto=$ht * $ph;


          $faltas = 0;
          $aumentoXhijo =0;
          $descuentoPension = 0;
          $descunetoTardanza = 0;


          //sumando faltas
          if(isset($_POST["dia"]) =="on")
          {
          $dias =$_POST['dia'];
               foreach ($dias as $numero) {
                      $faltas = $faltas + $numero;
                }
                if ($dias<=0) {
                  $faltas = 0;
                }
          }


//PARA EL GERENTE
        if($cargo =="gerente"){
          $cargo = "GERENTE";
            $aumento = $sueldoBruto * 0.10;
            if ($faltas >=1) {
                 $tardanza = $faltas * 0.04;
                 $descunetoTardanza = $sueldoBruto *$tardanza;
            }
            if ($hijos =="si") {
                $aumentoXhijo = $numhijos * 75;
            }
            if ($pension == "onp") {
                $pension = "ONP";
                  $descuentoPension=$sueldoBruto * 0.03;
            }
            if ($pension == "afp") {
                $pension = "AFP";
                  $descuentoPension = $sueldoBruto * 0.05;
            }

        }
  //PARA EL ADMINISTRADOR
                if($cargo =="administrador"){
                  $cargo = "ADMINISTRADOR";
                    $aumento = $sueldoBruto * 0.08;
                    if ($faltas >=1) {
                         $tardanza = $faltas * 0.05;
                         $descunetoTardanza = $sueldoBruto *$tardanza;
                    }
                    if ($hijos =="si") {
                        $aumentoXhijo = $numhijos * 75;
                    }
                    if ($pension == "onp") {
                        $pension = "ONP";
                          $descuentoPension=$sueldoBruto * 0.03;
                    }
                    if ($pension == "afp") {
                        $pension = "AFP";
                          $descuentoPension = $sueldoBruto * 0.05;
                    }

                }
  //PARA EL ESPECIALISTA
          if($cargo =="especialista"){
            $cargo = "ESPECIALISTA";
              $aumento = $sueldoBruto * 0.05;
              if ($faltas >=1) {
                   $tardanza = $faltas * 0.07;
                   $descunetoTardanza = $sueldoBruto *$tardanza;
              }
              if ($hijos =="si") {
                  $aumentoXhijo = $numhijos * 75;
              }
              if ($pension == "onp") {
                  $pension = "ONP";
                    $descuentoPension=$sueldoBruto * 0.03;
              }
              if ($pension == "afp") {
                  $pension = "AFP";
                    $descuentoPension = $sueldoBruto * 0.05;
                  }
          }
//CALCULANDO SUELDO NETO
        $sueldoNeto = ($sueldoBruto + $aumento + $aumentoXhijo) - $descunetoTardanza -$descuentoPension;

        
  }

include("a_conexion2.php");



  $insertar1=("INSERT INTO planilla (nombre,apellido,cargo,horasTra,pagoHoras,faltas,pensiones,cargaFamiliar,sueldoNeto) values ('$nombre','$apellido','$cargo','$ht','$ph','$descunetoTardanza','$descuentoPension','$aumentoXhijo','$sueldoNeto')");
  $ejecutar1 = $mysqli->query($insertar1);
  // if ($ejecutar1->errno)die($ejecutar1->error);

 // echo '<script> window.location="index.php"; </script>';

 ?>

 <body>
  <center><h4>Planilla de Sueldo</h4></center>
  <center>
  <table  width="60%" cellspacing="0" style="border-collapse:collapse">
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">  Codigo &nbsp; </td>
      <td bgcolor="LIGHTCYAN">&nbsp; <?php echo "00".$dni;?></td>
      <td bgcolor="LIGHTSTEELBLUE">Dni</td>
      <td bgcolor="LIGHTCYAN">&nbsp;<?php echo $dni;?></td>
    </tr>
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">Trabajador &nbsp; </td>
      <td colspan="3" bgcolor="LIGHTCYAN"> &nbsp;<?php echo " ". $nombre . " ".$apellido?></td>
    </tr>
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">Cargo&nbsp;  </td>
      <td colspan="3" bgcolor="LIGHTCYAN"> &nbsp;<?php echo " ".$cargo;?></td>
    </tr>
    <tr>
      <td colspan="4" height="10px"></td>
    </tr>
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">Sueldo Bruto&nbsp;  </td>
      <td colspan="" align="right" bgcolor="LIGHTCYAN"> <?php echo $sueldoBruto ."&nbsp;&nbsp;";?></td>
      <td colspan="2" bgcolor="LIGHTCYAN"><?php echo "  Nuevos Soles"?> </td>
    </tr>
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">Asignacion Familiar&nbsp;  </td>
      <td colspan="" align="right" bgcolor="LIGHTCYAN"> <?php echo $aumentoXhijo ."&nbsp;&nbsp" ;?></td>
      <td colspan="2" bgcolor="LIGHTCYAN"><?php echo "  Nuevos Soles"."<strong><i> (por ". $numhijos ." Hijos) </i></strong>";?></td>
    </tr>
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">Tardanzas&nbsp; </td>
      <td colspan="" align="right" bgcolor="LIGHTCYAN"><?php echo $descunetoTardanza."&nbsp;&nbsp";?></td>
      <td colspan="2" bgcolor="LIGHTCYAN"><?php echo "  Nuevos Soles"." <strong><i> (por ". $faltas ." Dias de falta) </i></strong>";?></td>
    </tr>
    <tr>
      <td bgcolor="LIGHTSTEELBLUE" align="right">Pensiones&nbsp;</td>
      <td colspan=""align="right" bgcolor="LIGHTCYAN"> <?php echo $descuentoPension."&nbsp;&nbsp";?></td>
      <td colspan="2" bgcolor="LIGHTCYAN"><?php echo "  Nuevos Soles" . " <strong><i> (afiliado a ". $pension .") </i></strong>";?></td>
    </tr>
    <tr bgcolor="yellow">
      <th>Sueldo Neto</th>
      <td colspan="" align="right" align="right"> <?php echo "<strong>".$sueldoNeto."</strong>&nbsp;&nbsp";?></td>
      <td colspan="2"><?php echo "  Nuevos Soles";?></td>
    </tr>
  </table>
</center>
<br>

<?php
//invocando ultimo registro de la planilla
$sel = $mysqli->query("SELECT idPlanilla, idPlanilla FROM planilla ORDER BY idPlanilla DESC");
$sel_row = $sel->fetch_object();
$id_MaxPla = $sel_row->idPlanilla;


 ?>



  <center>  <a href="reporte_datos.php?id=<?php echo $id_MaxPla;?>"><img src="img/pdf.png"  height="50px" width="100px" alt=""></a> </center>



</body>
</html>
