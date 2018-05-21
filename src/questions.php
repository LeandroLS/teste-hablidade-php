<?php 
require 'connection.php';
$query = "  SELECT 
            q.*, GROUP_CONCAT(a.answer_description) AS answers
            FROM
            questions AS q
                INNER JOIN
            answers AS a ON a.question_id = q.question_id
            GROUP BY q.question_description
            ORDER BY q.question_id";

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
                        <?php $answers = explode(',', $question['answers']); ?>
                        <?php foreach($answers as $answer): ?>
                            <tr>
                                <td><input type="radio" name="question_id" id=""><?= $answer ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </fieldset>
        <?php endforeach; ?>
    </div>
</body>
</html>