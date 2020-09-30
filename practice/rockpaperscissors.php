<?php

$moves = ['rock', 'paper', 'scissors'];

$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

var_dump($player1Move);
var_dump($player2Move);

if ($player1Move == $player2Move) {
    var_dump('Tie');
}

if ($player1Move == 'rock' and $player2Move == 'paper') {
    var_dump('Player 2 wins');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    var_dump('Player 1 wins ');
}
