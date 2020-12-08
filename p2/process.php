<?php
session_start();

$choice = $_GET['choice'];
$moves = ['Rock', 'Paper', 'Scissors'];
$computerThrow = rand(0, 2);
$finalResult = ['Tie', 'You win :)', 'You lose :('];


# Computer throws
if ($computerThrow == 0) {
    $computerThrow = 'Rock';
} elseif ($computerThrow == 1) {
    $computerThrow = 'Paper';
} elseif ($computerThrow == 2) {
    $computerThrow = 'Scissors';
}

# Compare user and computer moves
if ($computerThrow == $choice) {
    $finalResult = "It's a tie";
} elseif ($computerThrow == 'Rock' && $choice == 'Paper') {
    $finalResult = "You win :)";
} elseif ($computerThrow == 'Scissors' && $choice == 'Paper') {
    $finalResult = "You lose :(";
} elseif ($computerThrow == 'Scissors' && $choice == 'Rock') {
    $finalResult = "You win :)";
} elseif ($computerThrow == 'Paper' && $choice == 'Rock') {
    $finalResult = "You lose :(";
} elseif ($computerThrow == 'Paper' && $choice == 'Scissors') {
    $finalResult = "You win :)";
} elseif ($computerThrow == 'Rock' && $choice == 'Scissors') {
    $finalResult = "You lose :(";
}


$_SESSION['results'] = [
    'choice' => $choice,
    'computerThrow' => $computerThrow,
    'finalResult' => $finalResult,

];

header('Location: index.php');