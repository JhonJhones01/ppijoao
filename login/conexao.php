<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'login';

$conn = new mysqli($host,$usuario,$senha);

if($conn->connect_error){
    die("não deu certo fazer a conexão");
}

?>