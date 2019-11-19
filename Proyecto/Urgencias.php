<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Formulario de Registro</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body background="../imagenes/sena.jpg">
    <br/>
    <br/>
<center><h2>Urgencias</h2></center>
    <br/>
    <br/>
<div class="col-md-8">
    <table class="table table-bordered" style="margin-left: 240px;">
 	<thead>
 	 <tr>
 	 	<th>Clasificación</th>
 	 	<th>Tipo de atención</th>
 	 	<th>Descripción</th>
 	 	<th>Lugar de atención</th>
 	 	<th>Acciones</th>
 	 	<th></th>
 	 </tr>
 	</thead>
 	<tbody>
           <tr>
               <td style="background-color: red;">Triage I</td>
               <td style="background-color:#AEEDFF ;">Emergencia<br/>Atención Inmediata.</td>
               <td style="background-color:#AEEDFF ;">Condición de salud extrema que amenaza la vida y debe ser atendida de marena inmediata.</td> 
               <td style="background-color:#AEEDFF ;">UNIDAD DE URGENCIAS<BR/>SALA DE REANIMACION</td>
               <td>

           	<form>
  <input class="btn btn-success" name="button2" type="button" 
    accept="" onclick='alert("Su consulta ha sido programada exitosamente Sede: Suba Doctor(a): Ian Malcom Fecha: 15/01/2020 Consultorio: #11")' value="Programar"/>
  </form>

           	</td>
           	</tr>
                <tr>
                    <td style="background-color: orange;">Triage II</td>
                    <td style="background-color:#AEEDFF ;">Urgencia<br/>Atención hasta 1 hora.</td>
               <td style="background-color:#AEEDFF ;">Condición de salud que amenaza la vida del paciente, su atención debe ser priorizada, no inmediata.</td> 
               <td style="background-color:#AEEDFF ;">CONSULTORIO<BR/>UNIDAD DE URGENCIAS</td>
               <td>

           	<form>
  <input class="btn btn-success" name="button2" type="button" 
    accept="" onclick='alert("Su consulta ha sido programada exitosamente Sede: Suba Doctor(a): Dennys Nedry Fecha: 15/01/2020 Consultorio: #11")' value="Programar"/>
  </form>

           	</td>
                 </tr>
                 <tr>
                    <td style="background-color: yellow;">Triage III</td>
                    <td style="background-color:#AEEDFF ;">Urgencia no vital<br/>Atención hasta 3 horas.</td>
               <td style="background-color:#AEEDFF ;">Condición aguda no amenazante de la vida que requiere valoración no inmediata.</td> 
               <td style="background-color:#AEEDFF ;">CONSULTORIO<BR/>UNIDAD DE URGENCIAS</td>
               <td>

           	<form>
  <input class="btn btn-success" name="button2" type="button" 
    accept="" onclick='alert("Su consulta ha sido programada exitosamente Sede: Suba Doctor(a): Elih Guzman Fecha: 15/01/2020 Consultorio: #11")' value="Programar"/>
  </form>

           	</td>
                 </tr>
                 <tr>
                    <td style="background-color: green;">Triage III B</td>
                    <td style="background-color:#AEEDFF ;">Atención prioritaria<br/>Atención hasta 6 horas.</td>
               <td style="background-color:#AEEDFF ;">Condición aguda no amenazante de la vida que requiere valoración diferida.</td> 
               <td style="background-color:#AEEDFF ;">CONSULTORIO<BR/>UNIDAD DE URGENCIAS</td>
               <td>

           	<form>
  <input class="btn btn-success" name="button2" type="button" 
    accept="" onclick='alert("Su consulta ha sido programada exitosamente Sede: Suba Doctor(a): Claire Dearing Fecha: 15/01/2020 Consultorio: #11")' value="Programar"/>
  </form>

           	</td>
                 </tr>
                 <tr>
                    <td style="background-color: #5ABDFF;">Triage IV</td>
                    <td style="background-color:#AEEDFF ;">Consulta externa<br/>Atención hasta 72 horas.</td>
               <td style="background-color:#AEEDFF ;">Condición sintomática mayor de 24 horas de evolución no amenaza para la vida.</td> 
               <td style="background-color:#AEEDFF ;">CONSULTA EXTERNA<BR/>UNIDAD DE ATENCIÓN BÁSICA ASIGNADA</td>
               <td>

           	<form>
  <input class="btn btn-success" name="button2" type="button" 
    accept="" onclick='alert("Programe una cita prioritaria")' value="Programar"/>
  </form>

           	</td>
                 </tr>

         </tbody>
        </table>
    <a href="index.php"><button class="btn" style="width: 100px;height:100px;margin-left: 1200px;margin-bottom: 10px; background-color: aqua;">
   Realizar otro registro
  </button></a>
    
    <a href="Citas.php"><button class="btn" style="width: 100px;height:50px;margin-left: 1200px;margin-bottom: 10px; background-color: gray;">
    <- Atras 
  </button></a>
    
     <a href="index.php"><button class="btn btn-danger" style="width: 100px;height:50px;margin-left: 1200px;margin-bottom: 50px">
    X Salir 
  </button></a>


</div>
      
</body>
</html>
