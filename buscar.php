<?php
$buscar = "";
if(isset($_POST['buscar'])){
    $buscar = $_POST['buscar'];
}
$sql = "SELECT * from persona where nombre like '%".$buscar."%'";

$resultados = mysqli_query($conexion, $sql);

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
<form action="index.php" method="post">
            <input type="text" name="buscar" placeholder="Buscar">
        </form>
</body>
</html>