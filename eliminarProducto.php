<?php 

    $conexion = new mysqli("127.0.0.1","root","","stock");
    $sql = "DELETE FROM producto WHERE id = " . $_GET['id'];
    
    if($conexion -> query($sql) === TRUE )
        header("Location: registrarProducto.php?eliminado=true");
    else 
        header("Location: registrarProducto.php?eliminado=false");

?>