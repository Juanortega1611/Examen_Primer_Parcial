<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM POLVOS";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>FERRETERIA crud</title>
</head>

<body>
    <div class="polvos-form">
        <form action= "inser_Polvos.php" method="POST">    
          <h1>FERRETERIA AGSO</h1>

            <input type="text" name="codigo" placeholder="codigo">
            <input type="text" name="descripcion" placeholder="descripcion">
            <input type="text" name="precio" placeholder="cantidad">
            <input type="text" name="peso" placeholder="Peso">

            <input type="submit" value="Agregar producto">
</form>
    </div>

    <div class="polvos-table">
        <h2>POLVOS</h2>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Peso</th>
                    <th></th>
                    <th></th>
</tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>

            <th> <?= $row['id_producto'] ?> </th>
            <th> <?= $row['descripcion'] ?> </th>
            <th><?= $row['cantidad'] ?></th>
            <th><?= $row['peso'] ?></th>
            
            <th><a href="update.php?id_producto=<?= $row['id_producto'] ?>" class= "polvos-table--edit">Editar</a></th>
            <th><a href="delete_polvos.php?descripcion=<?= $row['descripcion'] ?>" class= "polvos-table--delete">Eliminar</a></th>
            
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>

</body>

</html>