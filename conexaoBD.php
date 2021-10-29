<?php

$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$database = "mocx";

$conectar = mysqli_connect($servidor, $usuario, $senha, $database);
if(!$conectar){
    die("conexão falhou:" .mysqli_connect_errno());
}