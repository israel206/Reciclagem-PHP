<?php
// if de verificação de variavel submit
if (isset($_POST['submit'])) {

  // verificação de inserção de dados
  // print_r('Nome: ' . $_POST['nome']);
  // print_r('<br>');
  // print_r('Email: ' . $_POST['email']);
  // print_r('<br>');
  // print_r('Telefone: ' . $_POST['telefone']);
  // print_r('<br>');
  // print_r('Sexo: ' . $_POST['genero']);
  // print_r('<br>');
  // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
  // print_r('<br>');
  // print_r('Cidade: ' . $_POST['cidade']);
  // print_r('<br>');
  // print_r('Estado: ' . $_POST['estado']);
  // print_r('<br>');
  // print_r('Endereço: ' . $_POST['endereco']);

  // incluindo a conexão no banco
  include_once('config.php');

  // variavel de guarda dados para inserção no banco
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['genero'];
  $data_nascimento = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

  // inserção de dados no banco
  $result = mysqli_query($conexao, "INSERT INTO ususario(nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");

  // header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Formulário</title>

  <link rel="stylesheet" href="css/formulario.css">

</head>

<body>


  <div class="box">
    <a href="home.php">Voltar</a>

    <form action="formulario.php" method="POST">

      <fieldset>
        <legend><b>Formulário de Clientes</b></legend>
        <br>

        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelInput">Nome completo</label>
        </div>
        <br>

        <div class="inputBox">
          <input type="password" name="senha" id="senha" class="inputUser" required>
          <label for="senha" class="labelInput">Senha</label>
        </div>
        <br>

        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" required>
          <label for="email" class="labelInput">Email</label>
        </div>
        <br>

        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" required>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br>

        <p>Sexo:</p>
        <input type="radio" id="feminino" name="genero" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>

        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>

        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">Outro</label>
        <br>

        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
        <br><br>
        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          <label for="cidade" class="labelInput">Cidade</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputUser" required>
          <label for="estado" class="labelInput">Estado</label>
        </div>
        <br>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereco" class="inputUser" required>
          <label for="endereco" class="labelInput">Endereço</label>
        </div>
        <br>

        <input type="submit" name="submit" id="submit">

      </fieldset>

    </form>

  </div>

</body>

</html>