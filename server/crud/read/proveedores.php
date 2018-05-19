<?php
include "../conexiondb.php";
$data=array();
$q=mysqli_query($con,"select * from `proveedores`");
while ($row=mysqli_fetch_object($q)){
	$data[]=$row;
}
echo json_encode($data);
?>