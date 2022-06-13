<?php

include ("conexion.php");

if(isset($_GET['eliminar'])){
    $sql = "delete from compra where id=".$_GET['eliminar']."";
    mysqli_query($conexion,$sql);
    header("location: index.php");
}


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

    <table border="1">
    <h1>Productos</h1>
    <tr>
            
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Nombre producto</th>
            <th>Stock</th>
            
        </tr>
    <?php
        $sql = "select p.nombre, p.apellido, p.telefono, p.email, pr.nombre, pr.stock from persona p, producto pr, compra c where p.id = c.id_persona AND pr.id = c.id_producto;";
        $resultado = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($resultado)){
        
        ?>

        <tr>
            
            <td><?php echo $mostrar[0] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['stock'] ?></td>
            <td><a href="modificar.php" onclick="modificar"?php echo $mostrar['id'] ?>Modificar</a></td>
            <td><a href="#" onclick="eliminar"?php echo $mostrar['id'] ?>Eliminar</a></td>

        </tr>
     
       
        
        <?php
        }
        ?>
    </table>
    <br>    
</body>
<script>
    function eliminar(id){
        if(confirm("Deseas eliminar el registro?")){
            window.location="index.php?eliminar=" +id;
        }
        
    }
</script>
</html>