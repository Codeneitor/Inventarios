<?php
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: *");

 $con = mysqli_connect("localhost","Programador","programador","Inventarios") or die ("could not connect database");
?>