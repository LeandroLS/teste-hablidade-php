<?php
require 'connection.php';
session_start();

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
$_SESSION['answers'] = $answers;

$questionsQuery = "SELECT * FROM {$tableQuestions}";
$questions = $connection->query($questionsQuery);
$questions->execute();
$_SESSION['numQuestions'] = $questions->rowCount(); 
$questions = $questions->fetchAll();
$_SESSION['questions'] = $questions;

header("Location: questions.php");