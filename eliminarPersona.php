<?php 

    $conexion = new mysqli("127.0.0.1","root","","stock");
    $sql = "DELETE FROM persona WHERE id = " . $_GET['id'];
    
    if($conexion -> query($sql) === TRUE )
        header("Location: registrarPersona.php?eliminado=true");
    else 
        header("Location: registrarPersona.php?eliminado=false");

?>