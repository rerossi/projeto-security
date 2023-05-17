<?php

$db_host = 'localhost';
$db_user = 'root'; 
$db_password = ''; 
$db_name = 'projeto-security';

// Conexão com o banco de dados
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

// Verifica se ocorreu algum erro na conexão
if ($mysqli->connect_errno) {
    die('Erro ao conectar ao banco de dados: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}