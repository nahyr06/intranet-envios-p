<?php

$host = "localhost";
$usuario = "root";
$clave = "hpo7g5doXwLeI1uk";
$bd = "users";


$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
    echo "conectado";
}else{
    echo "no se pudo conectar";
}




?>