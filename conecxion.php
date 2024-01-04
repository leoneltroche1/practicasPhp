<?php

$servidor="localhost"; //variables que se estan definiendo y agregando un valor 
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"Conexion establecida";

    $sql = "INSERT INTO `. fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la base de datos', 'foto.jpg');";
    $conexion->exec($sql);
}catch(PDOException $error){
    echo"Conexion erronea".$error;
}

?>