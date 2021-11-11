<?php
//variavel de conexão
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-php';

// conexão dos dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// verificação de conexão
if ($conexao->connect_errno) {
  echo "Erro";
} else {
  echo "Conexão efetuada com sucesso";
}
