<?php

# Sets the 'winner' limit to 5
$answer = 6;

$player1Rolls = null;
$player1Results = [];

$player2Rolls = null;
$player2Results = [];

# Keep throwing the dice until a 6 is rolled by each player
while ($player1Rolls != $answer) {
    $player1Rolls = rand(1, 6);
    $player1Results[] = $player1Rolls;
}

while ($player2Rolls != $answer) {
    $player2Rolls = rand(1, 6);
    $player2Results[] = $player2Rolls;
}

# Count how many times each player rolls a dice to find the winner
if (count($player1Results) < count($player2Results)) {
    $finalResult = 'Player 1';
} elseif (count($player1Results) > count($player2Results)) {
    $finalResult = 'Player 2';
} else {
    $finalResult = "It's a tie!";
}


require 'index-view.php';
