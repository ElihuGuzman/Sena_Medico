<?php
 require_once "Conexion.php";
 $Documento=$_POST['documento'];
 $Nombre=$_POST['nombre1'];
 $Nombre2=$_POST['nombre2'];
 $Apellido1=$_POST['apellido1'];
 $Apellido2=$_POST['apellido2'];
 $Direccion=$_POST['direccion'];
 $Telefono=$_POST['celular'];

 $sql1= "select * from usuario where documento=\"$_POST[documento]\"";

 $query = $mysqli->query($sql1);

 while ($r=$query->fetch_array()){
 $found=true;	
if($found)
{
	print "<script>alert(\"Este documento ya se encuentra registrado con un usuario.\");window.location='index.php';</script>";
}}
$query="INSERT INTO usuario(documento,nombre,nombre2,apellido1,apellido2,direccion,telefono) VALUES('$Documento','$Nombre','$Nombre2','$Apellido1','$Apellido2','$Direccion','$Telefono')";

if($mysqli->query($query)){

print "<script>alert(\"Registro exitoso.\");window.location='Citas.php';</script>";
	}else{
		echo "Ocurrio un error";

}




?>