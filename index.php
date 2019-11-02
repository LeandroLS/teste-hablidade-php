<?php
require 'public/links_externos/links.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Habilidade PHP</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary">Escolha o Teste</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PHP Teste 1</h5>
                        <p class="card-text">18 questões de nível fácil.</p>
                        <a href="questions.php?teste_num=1" class="btn btn-primary"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PHP Teste 2</h5>
                        <p class="card-text">10 questões de nível fácil</p>
                        <a href="questions.php?teste_num=2" class="btn btn-primary"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>