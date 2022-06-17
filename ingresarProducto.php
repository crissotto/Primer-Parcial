<?php 

    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        header('Location: 404.php');
        echo "404 Not found";    
    }
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    


    $conexion = new mysqli("127.0.0.1","root","","stock");

    $sql = "INSERT INTO producto (nombre,descripcion,stock)
            VALUES ('$nombre','$descripcion',$stock)";

    if($conexion -> query($sql) === TRUE )
        header("Location: registrarProducto.php?exito=true");
        
    else 
        header("Location: registrarProducto.php?exito=false");

?>