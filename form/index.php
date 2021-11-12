<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Contatos</title>
</head>

<body>

  <div class="container">

    <form method="POST" action="enviar.php">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nomeID" placeholder="Digite o nome completo" name="nome">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="emailID" placeholder="Digite o name@example.com" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagemID" rows="3" name="mensagem"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Acessar</button>
    </form>

  </div>
</body>

</html>