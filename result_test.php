<?php
require_once 'connection.php';
require_once 'querys.php';
 
$numCorrectAnswer = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste de Habilidade PHP</title>
       <?php require 'public/links_externos/links.php'; ?>
    </head>
    <body>
        <div class="container">
        
            <h1 class="text-primary text-center">Resultado do Questionário</h1>
            <div style="height:350px">
                <canvas id="myChart"></canvas>
            </div>
            <div>
                <button class="btn btn-primary d-print-none" title="Imprimir" style="margin-bottom:5px" onclick="window.print()">
                    <i class="fas fa-print "></i>
                </button>
                <a class="btn btn-warning d-print-none" href="index.php" title="Ir para o início" style="margin-bottom:5px">
                    <i class="fas fa-home"></i>
                </a>
            </div>
            <div>
                
            </div>
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
        </div>
    </body>
   
    <?php $chartWrongAnswer = $numQuestions - $numCorrectAnswer ?>

</html>
<script>
    // gráfico pizza
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Corretas", "Erradas"],
            datasets: [{
                data: [<?= $numCorrectAnswer ?>, <?= $chartWrongAnswer ?>],
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