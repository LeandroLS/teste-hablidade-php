<?php 
require 'connection.php';
$dbresult = $connection->query('select * from questions');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Habilidade PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-hover table-striped">
            <thead>
                <th>Questões</th>
            </thead>
            <tbody>
                <?php foreach($dbresult as $result): ?>
                <tr>
                    <td><?= utf8_encode($result['questions_description']) ?></td> 
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>