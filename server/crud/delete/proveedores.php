<?php
include "../../conexiondb.php";
if(isset($_GET['proveedor_id'])){
	$proveedor_id=$_GET['proveedor_id'];
	$q=mysqli_query($con,"DELETE FROM proveedores WHERE proveedor_id = $proveedor_id;");
	if($q)
		echo "success";
	else
		echo "error";
	
}
?>