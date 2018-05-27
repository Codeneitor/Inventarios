<?php
include "../../conexiondb.php";
if(isset($_POST['update'])){
	$proveedor_id=$_POST['proveedor_id'];
	$proveedor=$_POST['proveedor'];
 	$ciudad=$_POST['ciudad'];
 	$direccion=$_POST['direccion'];
 	$telefono=$_POST['telefono'];
 	$nit=$_POST['nit'];
	$q=mysqli_query($con,"UPDATE `proveedores` SET `proveedor`='$proveedor',`ciudad`='$ciudad',`direccion`='$direccion',`telefono`='$telefono',`nit`='$nit' where `proveedor_id`='$proveedor_id';");
	if($q)
		echo "success";
	else
		echo "error";
}
?>