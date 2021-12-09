<?php
$id=$_GET['id'];
$con =mysqli_connect('localhost','root','','sunkoshimunicipality');
$sql = "DELETE FROM personal_details WHERE Personal_id=$id";
mysqli_query($con,$sql);
header('location:personaldata.php');
 ?>







