<?php

$conexion = new mysqli("127.0.0.1","root","","stock");
$sql = "SELECT * FROM producto";
$resultado = $conexion -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial I</title>
</head>
<body>
    <h1>Registro de Productos</h1>

    <form action="ingresarProducto.php" method="post">
    Nombre: <input type="text" name="nombre" > <br />
    Descripcion: <input type="text" name="descripcion" > <br />
    Stock: <input type="number" name="stock" > <br />


    <input type="submit" value="Enviar">
    </form>

    <h1>Productos ingresados actualmente en el sistema</h1>

    <?php foreach($resultado -> fetch_all(MYSQLI_ASSOC) as $fila) :?>


        <table border="1">
            <tr>
                <td><b>ID:</b> <?=$fila['id']?> </td>
                <td><b>Nombre:</b>  <?=$fila['nombre']?> </td>
                <td><b>Descripcion:</b> <?=$fila['descripcion']?> </td>
                <td><b>Stock:</b> <?=$fila['stock']?></td>
                <td><a href="modificarProducto.php">Modificar</a></td>
                <td><a href="eliminarProducto.php?id=<?=$fila['id']?>">Eliminar</a></td>
            </tr>
        </table>
            
            <br />
    
        <?php endforeach; ?>

    </form>
</body>
</html>