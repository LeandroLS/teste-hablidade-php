<?php
require 'connection.php';

$tableAnswers = '';
$tableQuestions = '';

if($_GET['teste_num'] == 1) {
    $tableAnswers = "answers_1";
    $tableQuestions = "questions_1";
} elseif($_GET['teste_num'] == 2){
    $tableAnswers = "answers_2";
    $tableQuestions = "questions_2";
}

$answersQuery = "SELECT * FROM {$tableAnswers}";    
$answers = $connection->query($answersQuery);
$answers->execute();
$answers = $answers->fetchAll();

$questionsQuery = "SELECT * FROM {$tableQuestions}";
$questions = $connection->query($questionsQuery);
$questions->execute();
$questions = $questions->fetchAll(); 

header("Location: questions.php");