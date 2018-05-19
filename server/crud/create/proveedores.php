<?php
include "conexiondb.php";
if(isset($_POST['insert'])){
 	$curso=$_POST['curso'];
 	$docente=$_POST['docente'];
 	$estudiante=$_POST['estudiante'];
 	$nota1=$_POST['nota1'];
 	$nota2=$_POST['nota2'];
 	$nota3=$_POST['nota3'];
 	$promedio=$_POST['promedio'];
 	$observaciones=$_POST['observaciones'];
 	$q=mysqli_query($con,"INSERT INTO `Uniminuto` (`curso`,`docente`,`estudiante`,`nota1`,`nota2`,`nota3`,`promedio`,`observaciones`) VALUES ('$curso','$docente','$estudiante','$nota1','$nota2','$nota3','$promedio','$observaciones');");
 	if($q){
 		echo "success";
 	}else{
 		echo "error";
 	}
}
?>