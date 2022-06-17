<?php 


    $conexion = new mysqli("127.0.0.1","root","","stock");
    $sql = "DELETE FROM compra WHERE id_persona = ".  $_GET['idPe']+ " AND id_producto = " . $_GET['idPr'];
    
    var_dump($_GET['idPr']);
    die();

    if($conexion -> query($sql) === TRUE )
        header("Location: registrarCompra.php?eliminado=true");
    else 
        header("Location: registrarCompra.php?eliminado=false");

?>


