<?php
include "../../conexiondb.php";
if(isset($_POST['insert'])){
 	$cliente_id=$_POST["cliente_id"];
	$producto_id=$_POST["producto_id"];
	$cantidad=$_POST["cantidad"];
	$numero_factura=$_POST("numero_factura");
 	$q=mysqli_query($con,"INSERT INTO ventas (cliente_id, producto_id, cantidad) VALUES ('$cliente_id', '$producto_id', '$cantidad');");
 	if($q){
 		echo "success";
 	}else{
 		echo "error";
 	}
}
?>