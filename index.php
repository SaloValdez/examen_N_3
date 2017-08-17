<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  body{
      padding-left : 15%;
      padding-right : 15%;
  }
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

thead{
  background-color: #DBDBDB;
}
  </style>
  <body>
    <br>
      <center>  <a href="reporte_datos.php"><img src="img/pdf.png"  height="50px" width="100px" alt=""></a>  </center>
    <br>

    <br>

    <center><h3>REGISTRO DE NOTAS</h3></center>
    <form name="modifica" method="POST" action="insertar_datos.php" >
		<table align="center" >

			<tr>
				<td height="60"><b>NOMBRE</b></div></td>
		 <td><input type="txt" name="nombre"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
			</tr>
		<tr>
			 <td height="52"><b>APELLIDO</b></td>
			 <td><input type="txt"name="apellido"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
		 </tr>
     <tr>
 			 <td height="52"><b>DNI</b></td>
 			 <td><input type="txt"name="dni"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
 			 <td height="52"><b>HORAS TRABAJADAS</b></td>
 			 <td><input type="txt"name="ht" size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
        <td height="52"><b>TARIFA</b></td>
        <td><input type="txt"name="tarifa"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>


	 <tr>
		 <tr>
		 <td height="48" colspan="2"><center><input class="boton" type="submit" name="guardar" value="Guardar"/></center></td>
		 </tr>
		</table>
		</form>
    <br>


    <?php
	require('a_conexion2.php');
	$query="SELECT idTrabajador,nombre,apellido,dni,horasTrabajo,tarifa,sueldo,bono,sueldoNeto  FROM trabajador";
	$resultado=$mysqli->query($query);
	?>
	<center> <h3>Lista de Empleados y sueldo</h3></center>
	<p></p>
	<div class="col-md-15" style="overflow-x: auto">
	  <table width="100%" align="center"  border=1 cellspacing=0 cellpadding=2 bordercolor="#9A9A9A"   class="table table-hover  ">
        <thead>
		 <tr>
       		 <td class="cabecera">ID</td>
				   <td class="cabecera">NOMBRE</td>
           <td class="cabecera">APELLIDOS</td>
           <td class="cabecera">DNI</td>
           <td class="cabecera">HORAS DE TRABAJO</td>
           <td class="cabecera">TARIFA</td>
					 <td class="cabecera">SUELDO</td>
					 <td class="cabecera">BONO</td>
					 <td class="cabecera">SUELDO NETO</td>
          </tr>
        </thead>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){?>
          <tr> </tr>
          <td><?php echo $row['idTrabajador'];?></td>
					<td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['apellido'];?></td>
            <td><?php echo $row['dni'];?></td>
            <td><?php echo $row['horasTrabajo'];?></td>
            <td><?php echo $row['tarifa'];?></td>
						<td><?php echo $row['sueldo'];?></td>
						<td><?php echo $row['bono'];?></td>
						<td><?php echo $row['sueldoNeto'];?></td>

          </tr>
        </tbody>

        <?php } ?>
    </table>
	</div>








  </body>
</html>
