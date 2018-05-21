<?php 
require 'connection.php';
$query = "  SELECT 
            q.*, 
            a.*,
            GROUP_CONCAT(a.answer_description) AS answers
            FROM
            questions AS q
                INNER JOIN
            answers AS a ON a.question_id = q.question_id
            GROUP BY q.question_description
            ORDER BY q.question_id";
       
$answers = "SELECT * FROM answers";       

$answers = $connection->query($answers);

$questions = $connection->query($query);
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
                        <?php echo $k ?>
                            <?php if($answer['question_id'] == $question['question_id']): ?>
                            <td><?= utf8_encode($answer['answer_description']) ?></td> 
                            <?php else: ?>
                            <?php echo 'não é igual' ?>
                            <?php endif ?>
                        <?php endforeach ?>
                        <?php // $answers = explode(',', $question['answers']); ?>
                        <?php //foreach($answers as $answer): ?>
                            <!-- <tr>
                                <td><input type="radio" name="question_id=<?= $question['question_id'] ?>" value="<?= $answer['answer_id'] ?>"><?= $answer ?></td>
                            </tr> -->
                        <?php //endforeach ?>
                    </tbody>
                </table>
            </fieldset>
        <?php endforeach; ?>
        <button class="btn btn-primary">Enviar Respostas</button>
    </div>
</body>
</html>