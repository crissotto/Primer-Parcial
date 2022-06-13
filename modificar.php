<?php
include "conexion.php";
$sql="select * from persona where id=".$_GET['id']."";
$resultados = $conexion -> query($sql)  -> fetch_all($resultados)[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Modificar personita</h1>

<form action="/modificar.php" method="post">
        ID: <input type="text" name="id" value="<?= $resultados['id'] ?>" readonly> <br />
        Nombre: <input type="text" name="nombre" value="<?= $resultados['nombre'] ?>" > <br />
        Apellido: <input type="text" name="apellido" value="<?= $resultados['apellido'] ?>" > <br />
        Telefono: <input type="number" name="telefono" value="<?= $resultados['telefono'] ?>" > <br />
        Email: <input type="email" name="email" value="<?= $resultados['email'] ?>" > <br />

        <input type="submit" value="Enviar">
    </form>
</body>
</html>