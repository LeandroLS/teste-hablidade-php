<?php
require 'connection.php';

$correctAnswersQuery = "SELECT * FROM answers";
$answers = $connection->query($correctAnswersQuery);
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-primary text-center">Resultado do Questionário</h1>
            <form action="result_test.php" method="post">
            <?php foreach($questions as $key => $question): ?>
                <fieldset class="border" style="margin-bottom:10px">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Questão <?= $question['question_id']?></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= utf8_encode($question['question_description']) ?></td> 
                            </tr>
                            <!-- foreach das respostas -->
                            <?php foreach($answers as $answer): ?>
                                <?php if($answer['question_id'] == $question['question_id']): ?>
                                    <tr>
                                        <td>
                                            <?= utf8_encode($answer['answer_description']) ?>
                                        </td>
                                    </tr>
                                <?php endif ?>                     
                            <?php endforeach ?>

                            <!-- foreach mostrando as respostas corretas -->
                            <?php foreach($answers as $answer): ?>
                                <?php if($answer['question_id'] == $question['question_id'] && $answer['correct_answer'] == 1): ?>
                                    <tr>
                                        <td>
                                            Resposta Correta: <?= utf8_encode($answer['answer_description']) ?>
                                        </td>
                                    </tr>
                                <?php endif ?>

                                <?php if($answer['question_id'] == $question['question_id']): ?>
                                    <!-- foreach mostrando a resposta escolhida no questionário -->
                                    <?php foreach($_POST as $resposta):?>
                                        <?php if($resposta == $answer['answer_id']): ?>
                                            <tr>
                                                <td>
                                                    Sua Resposta: <?= utf8_encode($answer['answer_description']) ?>
                                                    <?= $answer['correct_answer'] == 1 ? "<i class='text-success fas fa-check-circle'></i>" : "<i class='text-danger fas fa-times-circle'></i>" ?> 
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>  
                                <?php endif?> 

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