<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
  <center>
    <h4>PLANILLA DE SUELDO</h4>
   <table border>
       <form action="insertar_datos.php" method="POST">
           <tr>
               <td>Nombre :</td>
               <td><input type="text" name="nombre" onblur="aMayusculas(this.value,this.id)" required></td>
           </tr>
           <tr>
               <td>Apellido :</td>
               <td><input type="text" name="apellido" required></td>
           </tr>
           <tr>
               <td>Dni :</td>
               <td><input type="text" name="dni" required></td>
           </tr>
           <tr>
               <td>Sexo:</td>
               <td>
               <input type="radio" name="sexo" value="masculino" required> Masculino<br>
               <input type="radio" name="sexo" value="feminino" required>Femenino <br>
               </td>
           </tr>
             <tr>
               <td>Cargo:</td>
               <td>
                  <select name="cargo" id="">
                      <option value="gerente">Gerente</option>
                      <option value="administrador">Administrador</option>
                      <option value="especialista">Especialista</option>
                  </select>
               </td>
           </tr>
             <tr>
               <td>Horas Trabajadas :</td>
               <td><input type="text" name="horastrabajadas" required></td>
           </tr>
           <tr>
               <td>Pago por horas :</td>
               <td><input type="text" name="pagohoras" required></td>
           </tr>
           <tr>
               <td>Faltas :</td>
               <td>
                   <input type="checkbox" name="dia[]" value="1">Lunes
                   <input type="checkbox" name="dia[]" value="1">Martes
                    <input type="checkbox" name="dia[]" value="1">Miercoles
                    <input type="checkbox" name="dia[]" value="1">Jueves
                    <input type="checkbox" name="dia[]" value="1">Viernes
                </td>
           </tr>
           <tr>
              <td>Pensiones :</td>
               <td>
                <select name="pensiones" id="">
                    <option value="onp">ONP</option>
                    <option value="afp">AFP</option>
                </select>
               </td>
           </tr>

           <tr>
               <td>Hijos :</td>
               <td>

                   <input type="radio" name="hijos" value="no" required>No<br>
                   <input type="radio" name="hijos" value="si" required>Si<br>
Numero de Hijos :<input type="text" name="numhijos" value="0">

               </td>

           </tr>
           <tr align="center">
               <td colspan="2">
                   <input type="submit" value="Procesar">
               </td>
           </tr>

       </form>
       <script type="text/javascript">
       function aMayusculas(obj,id){
              obj = obj.toUpperCase();
              document.getElementById(id).value = obj;
        }
       </script>
   </table>
   </center>
</body>
</html>
