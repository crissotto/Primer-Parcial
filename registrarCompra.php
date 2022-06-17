<?php 

$conexion = new mysqli("127.0.0.1","root","","stock");
$sql = "select p.nombre as nombreP, pr.nombre, fecha_hora, p.id as idPe, pr.id as idPr 
FROM persona p, producto pr, compra c where p.id = c.id_persona AND pr.id = c.id_producto";
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
    
    <h1>Registro de Compra</h1>

    <form action="ingresarCompra.php" method="post">

        Ingrese el ID de la Persona: <input type="number" name="id_persona"><br />
        Ingrese el ID del Producto: <input type="number" name="id_producto"><br />
        Ingrese la fecha y hora estimada: <input type="datetime-local" name="fecha_hora" value="<?php echo date("Y-m-d\TH:i:s")?>"><br>
        <br>
        <input type="submit" value="Ingresar"></button>
        
    </form>
    
    <h1>Personas y productos ingresados en el sistema.</h1>

    <?php foreach($resultado -> fetch_all(MYSQLI_ASSOC) as $fila) :?>

            <table border="1">
                <tr>
                    <td><b>Persona:</b> <?=$fila['nombreP']?> </td>
                    <td><b>Producto:</b>  <?=$fila['nombre']?> </td>
                    <td><b>Hora:</b> <?=$fila['fecha_hora']?> </td>
                    <td><a href="eliminarCompra.php?idPe=<?=$fila['idPe']?>&idPr=<?=$fila['idPr']?>">Eliminar</a></td>
                    
                </tr>
            </table>
    
            <br />
    
        <?php endforeach; ?>
    

</body>
</html>