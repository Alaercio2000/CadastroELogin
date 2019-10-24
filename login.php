<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro E Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Bem vindo</h1>
        <div class="row justify-content-center">
            <form method="POST" class="col-md-6">
                <div class="form-group">
                    <label class="p-2" for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="emailLogin" required>
                </div>
                <div class="form-group">
                    <label class="p-2" for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha" name="senhaLogin" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary w-100">Entrar</button>
                    <h5 class="p-4">Não tem cadastro ? <a href="cadastro.php">Cadastrar</a></h5>
                </div>
            </form>
        </div>
    </div>
</body>

</html>