<?php 

    $conexion = new mysqli("127.0.0.1","root","","stock");
    $sql = "SELECT * FROM producto WHERE id =" . $_GET['id'];
    $resultado = $conexion -> query($sql)  -> fetch_all(MYSQLI_ASSOC)[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
</head>
<body>
    
<h1>Modificar Producto</h1>

<form action="modificarProductoBD.php" method="post">
        ID: <input type="number" name="id" value="<?= $resultado['id'] ?>" readonly> <br />
        Nombre: <input type="text" name="nombre" value="<?= $resultado['nombre'] ?>" > <br />
        Descripcion: <input type="text" name="descripcion" value="<?= $resultado['descripcion'] ?>" > <br />
        Stock: <input type="number" name="stock" value="<?= $resultado['stock'] ?>" > <br />

        <input type="submit" value="Enviar">
    </form>
</body>
</html>