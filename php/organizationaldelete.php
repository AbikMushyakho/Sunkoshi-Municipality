<?php
$id=$_GET['id'];
$con =mysqli_connect('localhost','root','','sunkoshimunicipality');
$sql = "DELETE FROM organizational_details WHERE Organization_id=$id";
$result = mysqli_query($con,$sql);
if($result){
    echo"<script>alert('Data deleted successfully!'); window.location='organizationaldata.php'</script>";
}
?>


