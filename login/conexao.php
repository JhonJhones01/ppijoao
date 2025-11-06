<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'login';

$mysqli = new mysqli($host,$usuario,$senha);

if($mysqli->connect_error){
    die("não deu certo fazer a conexão");
}

?>