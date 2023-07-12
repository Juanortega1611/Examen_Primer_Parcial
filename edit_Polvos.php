<?php

include('connection.php');
$con = connection();

$id_producto =$_POST['id_producto'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$peso = $_POST['peso'];

$sql = "UPDATE POLVOS SET descripcion='$descripcion', cantidad='$cantidad', peso='$peso' WHERE id_producto='$id_producto'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");    
};

?>