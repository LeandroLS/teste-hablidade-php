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

$numCorrectAnswer = 0;
$numAswners = 20;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste de Habilidade PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-primary text-center">Resultado do Questionário</h1>
            <div style="height:400px">
                <canvas id="myChart"></canvas>
            </div>
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
                                            <b>Resposta Correta:</b> <?= utf8_encode($answer['answer_description']) ?>
                                        </td>
                                    </tr>
                                <?php endif ?>

                                <?php if($answer['question_id'] == $question['question_id']): ?>
                                    <!-- foreach mostrando a resposta escolhida no questionário -->
                                    <?php foreach($_POST as $resposta):?>
                                        <?php if($resposta == $answer['answer_id']): ?>
                                            <tr>
                                                <td>
                                                    <b>Sua Resposta:</b> <?= utf8_encode($answer['answer_description']) ?>
                                                    <?php if($answer['correct_answer'] == 1): $numCorrectAnswer++?>
                                                        <i class='text-success fas fa-check-circle'></i>
                                                    <?php else:?>  
                                                        <i class='text-danger fas fa-times-circle'></i>
                                                    <?php endif ?> 
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
   
    <?php $charWrongAnswer = $numAswners - $numCorrectAnswer ?>

</html>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Corretas", "Erradas"],
            datasets: [{
                data: [<?= $numCorrectAnswer ?>, <?= $charWrongAnswer ?>],
                backgroundColor: [
                    'rgba(0, 168, 11, 0.5)',
                    'rgba(255,0,0, 0.5)'
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
        }
    });
</script>