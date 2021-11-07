<?php

//LOGICA VERIFICAÇÃO DOS DADOS DE LOGIN

// Inicialização da sessão 
session_start();

// teste de requisição
// print_r($_REQUEST);

// teste de inserção de dados
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

  // inclusão config
  include_once('config.php');

  //inserção de dados
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // teste de inserção
  // print_r('Email: ' . $email);
  // print_r('<br>');
  // print_r('Senha: ' . $senha);

  // teste de verificação de dados
  $sql = "SELECT * FROM ususario WHERE email = '$email' and senha = '$senha'";

  // verificação de dados
  $result = $conexao->query($sql);

  //teste de verificação de dados
  // print_r($sql);
  // print_r($result);

  //verificação de linhas
  if (mysqli_num_rows($result) < 1) {

    // print_r('Não existe');

    // deletando com a variavel
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    // CASO NÃO: redirecionamento para login.php
    header('Location: login.php');
  } else {

    // print_r('existe');
    // inicialização com a variavel 
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    // CASO EXISTA: redirecionamento para sistema.php
    header('Location: sistema.php');
  }
} else {
  // Não acessa
  header('Location: login.php');
}
