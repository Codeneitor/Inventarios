<?php
include "conexiondb.php";
if(isset($_POST['update'])){
	$id=$_POST['id'];
	$curso=$_POST['curso'];
 	$docente=$_POST['docente'];
 	$estudiante=$_POST['estudiante'];
 	$nota1=$_POST['nota1'];
 	$nota2=$_POST['nota2'];
 	$nota3=$_POST['nota3'];
 	$promedio=$_POST['promedio'];
 	$observaciones=$_POST['observaciones'];
	$q=mysqli_query($con,"UPDATE `Uniminuto` SET `curso`='$curso',`estudiante`='$estudiante',`nota1`='$nota1',`nota2`='$nota2',`nota3`='$nota3', `promedio`='$promedio', `observaciones`='$observaciones' where `id`='$id';");
	if($q)
		echo "success";
	else
		echo "error";
}
?>