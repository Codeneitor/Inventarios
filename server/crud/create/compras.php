<?php
include "../../conexiondb.php";
if(isset($_POST['insertCompra'])){
 	$proveedor_id=$_POST["proveedorCompra"];
	$factura=$_POST["numFacturaCompra"];
	$fecha_compra=$_POST["fechaCompra"];
 	$q=mysqli_query($con,"INSERT INTO compras (proveedor_id, factura, fecha_compra) VALUES ('$proveedor_id', '$factura', '$fecha_compra');");
 	if($q){
 		echo "success";
 	}else{
 		echo "error";
 	}
}
?>