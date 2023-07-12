<?php
include('connection.php');
$con = connection();

$id_producto=$_GET['id_producto'];

$sql = "SELECT * FROM POLVOS WHERE id_producto='$id_producto'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Polvos</title>
</head>
<body>
    <div class="polvos-form">
        <form action="edit_Polvos.php" method="POST">
            <h1>Editar polvos</h1>
            <input type="text" name="id_producto" value="<?= $row['id_producto'] ?>">
            <input type="text" name="descripcion" placeholder="descripcion" value="<?= $row['descripcion'] ?>">
            <input type="text" name="cantidad" placeholder="cantidad" value="<?= $row['cantidad'] ?>">
            <input type="text" name="peso" placeholder="Peso" value="<?= $row['peso'] ?>">
            
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
