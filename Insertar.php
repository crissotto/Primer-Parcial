<?php
include "conexion.php";
if(isset($_POST['nombre'])){
    $sql="insert into persona(id,nombre,apellido,telefono,email) values('".$_POST['id']."','".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['telefono']."','".$_POST['email']."')";
    mysqli_query($conexion,$sql);
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
</head>
<body>
    <form action="insertar.php" method="post">
        <input type="text" name='nombre' placeholder="Nombre del Usuario" require>
        <input type="text" name='apellido' placeholder="Apellido" require>
        <input type="number" name='telefono' placeholder="Telefono" require>
        <input type="email" name='email' placeholder="Email" require>

        <input type="submit" value="Agregar">
    </form>
</body>
</html>	

<?php
include "conexion.php";
if(isset($_POST['nombre'])){
    $sql="insert into producto(id,nombre,descripcion,stock) values('".$_POST['id']."','".$_POST['nombre']."','".$_POST['descripcion']."','".$_POST['stock']."')";
    mysqli_query($conexion,$sql);
    header('location: index.php');

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
</head>
<body>
    <form action="insertarproducto.php" method="post">
        <input type="text" name='nombre' placeholder="Nombre del producto" require>
        <input type="text" name='descripcion' placeholder="Descripcion" require>
        <input type="number" name='stock' placeholder="Stock" require>

        <input type="submit" value="Agregar">
    </form>
</body>
</html>





