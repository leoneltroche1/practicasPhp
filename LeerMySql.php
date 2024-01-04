<?php

$servidor="localhost"; //variables que se estan definiendo y agregando un valor 
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO `. fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la base de datos', 'foto.jpg');";
    $conexion->exec($sql);


    $sql="SELECT * FROM `. fotos`"; //consulto los datos mediante la seleccion

    $sentencia = $conexion->prepare($sql);//preparo la seleccion 
    $sentencia->execute();//la ejecuto
    $resultado=$sentencia->fetchAll();//obtengo los resultados
    print_r($resultado);

    echo"Conexion establecida";

}catch(PDOException $error){
    echo"Conexion erronea".$error;
}

?>