<?php

$conexion = new mysqli("127.0.0.1","root","","stock");
$sql = "SELECT * FROM persona";
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
    <h1>Registro de Personas</h1>

        <form action="ingresarPersona.php" method="post">
        Nombre: <input type="text" name="nombre" > <br />
        Apellido: <input type="text" name="apellido" > <br />
        Telefono: <input type="number" name="telefono" > <br />
        Email: <input type="email" name="email" > <br />

        <input type="submit" value="Enviar">
        </form>

        <h1>Personas ingresadas actualmente en el sistema</h1>

        <?php foreach($resultado -> fetch_all(MYSQLI_ASSOC) as $fila) :?>


            <table border="1">
                <tr>
                    <td><b>ID:</b> <?=$fila['id']?> </td>
                    <td><b>Nombre:</b>  <?=$fila['nombre']?> </td>
                    <td><b>Apellido:</b> <?=$fila['apellido']?> </td>
                    <td><b>Telefono:</b> <?=$fila['telefono']?> </td>
                    <td><b>Email:</b>  <?=$fila['email']?> </td>
                    <td><a href="modificarPersona.php?id=<?=$fila['id']?>">Modificar</a></td>
                    <td><a href="eliminarPersona.php?id=<?=$fila['id']?>">Eliminar</a></td>
                </tr>


            </table>
  
            <br />
    
        <?php endforeach; ?>
</body>

</html>

