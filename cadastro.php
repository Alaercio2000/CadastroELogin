<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro E Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Bem vindo</h1><br><br>
        <div class="row justify-content-center">
            <form method="POST" class="col-md-6">
                <div class="form-group row">
                    <div class="col">
                        <input type="text" required name="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <input type="text" required name="sobrenome" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-group"><br>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                </div>
                <div class="form-group"><br>
                    <input type="password" class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha" name="senha" required>
                </div>
                <div class="form-group"><br>
                    <?php

                    if (isset($_POST["nome"]) && empty($_POST["nome"]) == false) {

                        $nome = $_POST["nome"] . " " . $_POST["sobrenome"];
                        $email = $_POST["email"];
                        $senha = md5($_POST["senha"]);

                        $sql = "SELECT email FROM usuarios WHERE email = :email";
                        $sql = $pdo->prepare($sql);
                        $sql->bindValue(':email', $email);
                        $sql->execute();

                        if ($sql->rowCount() > 0) { ?>
                            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Já existe esse email
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } else {

                                $sql = "INSERT INTO usuarios SET nome = :nomeesobrenome , email = :email , senha = :senha";
                                $sql = $pdo->prepare($sql);
                                $sql->bindValue(':nomeesobrenome', $nome);
                                $sql->bindValue(':email', $email);
                                $sql->bindValue(':senha', $senha);
                                $sql->execute();
                                ?>
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                Usuário Cadastrado com Sucesso
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    <?php }
                    } ?>

                    <button class="btn btn-primary w-100">Enviar</button>
                    <h5 class="p-4">Já tem cadastro ? <a href="login.php">Login</a></h5>
                </div>
            </form>
        </div>
    </div>

</body>

</html>