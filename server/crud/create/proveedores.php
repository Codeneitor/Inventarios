<?php
include "../../conexiondb.php";
if(isset($_POST['insert'])){
 	$proveedor=$_POST["proveedor"];
	$ciudad=$_POST["ciudad"];
	$direccion=$_POST["direccion"];
	$telefono=$_POST["telefono"];
	$nit=$_POST["nit"];
 	$q=mysqli_query($con,"INSERT INTO proveedores (proveedor, ciudad, direccion, telefono, nit) VALUES ('$proveedor', '$ciudad', '$direccion', '$telefono', '$nit');");
 	if($q){
 		echo "success";
 	}else{
 		echo "error";
 	}
}
?>