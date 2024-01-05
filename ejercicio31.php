<?php
$txtNombre = "";
if ($_POST) {
    $txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){?>
    <strong>Hola</strong>: <?php echo $txtNombre;?>
    <?php } ?>

    <form action="ejercicio31.php" method="post">

    <input type="text" name="txtNombre" id="">

    <input type="submit" value="Enviar informacion">


    </form>
    
</body>
</html>