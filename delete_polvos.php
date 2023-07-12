<?php
include('connection.php');
$con = connection();

$descripcion=$_GET['descripcion'];

$sql = "DELETE FROM POLVOS WHERE descripcion='$descripcion'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");    
};
    
?>