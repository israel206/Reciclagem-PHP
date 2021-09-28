<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revisando Contextos do PHP</title>
</head>

<body>

  <?php
  echo "Revisando contextos do php, para fica atualizados na linguagem";
  $nome = "Israel Silva";
  $idade = 33;
  $altura = 1.71;
  echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura <br>";
  echo "<hr>";

  // Alterando meus dados

  echo "Revisando contextos do php, para fica atualizados na linguagem <br>";
  $nome = "Israel Pereira";
  $idade = 32;
  $altura = 1.70;
  echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura ";
  echo "<hr>";

  $carro = "Jeep";
  $Carro = "Hilux";
  echo $carro;
  echo "<hr>";
  echo $Carro;

  $meunome = "Israel";
  $meuNome = "Charlles";
  echo $meunome;
  echo "<hr>";
  echo $meuNome;

  // Nomes válidos
  // $nome
  // $_meunome
  // $carro01
  // $meu_nome
  // $meuNome

  //Nomes Inválidos
  // $123nome
  // $carro!#@%
  // $meu carro

  ?>

</body>

</html>