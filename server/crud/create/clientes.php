<?php
include "../../conexiondb.php";
if(isset($_POST['insert'])){
 	$nombres=$_POST["nombres"];
	$apellidos=$_POST["apellidos"];
	$documento=$_POST["documento"];
	$telefono=$_POST["telefono"];
	$correo=$_POST["correo"];
 	$q=mysqli_query($con,"INSERT INTO clientes (nombres, apellidos, documento, telefono, correo) VALUES ('$nombres', '$apellidos', '$documento', '$telefono', '$correo');");
 	if($q){
 		echo "success";
 	}else{
 		echo "error";
 	}
}
?>