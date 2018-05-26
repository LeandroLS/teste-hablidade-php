<?php 
require 'connection.php';

$answersQuery = "SELECT * FROM answers";    
$answers = $connection->query($answersQuery);
$answers->execute();
$answers = $answers->fetchAll();

$questionsQuery = "SELECT * FROM questions";
$questions = $connection->query($questionsQuery);
$questions->execute();
$questions = $questions->fetchAll(); 
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
            <h1 class="text-center text-primary">Questionário</h1>
            <form action="result_test.php" method="post">
            <?php foreach($questions as $question): ?>
                <fieldset class="border" style="margin-bottom:10px">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Questão <?= $question['question_id']?></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= utf8_encode($question['question_description']) ?></td> 
                            </tr>
                            <?php foreach($answers as $k => $answer): ?>
                                <tr>
                                    <?php if($answer['question_id'] == $question['question_id']): ?>
                                        <td>
                                            <input type="radio" name="<?= $question['question_id'] ?>" value="<?= $answer['answer_id'] ?>">
                                            <?= utf8_encode($answer['answer_description']) ?>
                                        </td> 
                                    <?php endif ?>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </fieldset>
            <?php endforeach; ?>
            <button class="btn btn-primary">Enviar Respostas</button>
            </form>
        </div>
    </body>
</html>