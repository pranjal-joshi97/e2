<?php

$coin = ['heads', 'tails'];
# player's choice
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];

# Coin flip
$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

if ($player1Choice == $flip) {
    var_dump("Player 1 wins!");
} else {
    var_dump("Player 1 lost");
}
