<?php
include "../../conexiondb.php";
if(isset($_POST['insert'])){
 	$proveedor_id=$_POST["proveedor_id"];
	$factura=$_POST["factura"];
	$fecha_compra=$_POST["fecha_compra"];
 	$q=mysqli_query($con,"INSERT INTO compras (proveedor_id, factura, fecha_compra) VALUES ('$proveedor_id', '$factura', '$fecha_compra');");
 	if($q){
 		echo "success";
 	}else{
 		echo "error";
 	}
}
?>