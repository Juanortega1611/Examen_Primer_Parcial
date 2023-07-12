<?php
include('connection.php');
$con =connection();

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['cantidad'];
$peso = $POST['peso'];

$sql = "INSERT INTO POLVOS VALUES('$codigo', '$descripcion', '$cantidad', '$peso')";
$query = mysqli_query($con, $sql);

if($query){
        Header("Location: index.php");    
};

?>