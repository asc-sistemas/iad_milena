<?php

// Cria a conexão
$servidor = 'localhost';
$banco = 'iad_milena';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha);
$db = mysqli_select_db($link, $banco);
if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}