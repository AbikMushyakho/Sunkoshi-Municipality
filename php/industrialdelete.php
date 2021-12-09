<?php
$id=$_GET['id'];
$con =mysqli_connect('localhost','root','','sunkoshimunicipality');
$sql = "DELETE FROM industrial_details WHERE Industry_id=$id";
mysqli_query($con,$sql);
header('location:industrialdata.php');
 ?>







