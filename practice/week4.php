<?php

$moves = ['rock', 'paper', 'scissors']; #Array of strings

$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

// echo $moves[0]; #rock

// var_dump($moves);

$randomNumber = rand(0, 2);
$move = $moves[$randomNumber];

// var_dump($move);

// $coin_values = [
// 'penny' => .01,
// 'nickel' => .05,
// 'dime' => .10,
// 'quarter' => .25
// ];

// $coin_counts = [
//     'penny' => 100,
//     'nickel' => 25,
//     'dime' => 100,
//     'quarter' => 34,
// ];

//var_dump($coin_values['quarter']); # .25

//asort($coin_counts); # sorts an array by its values - smallest to biggest coin value

//arsort($coin_counts); # reverse sort of values

//ksort($coin_counts); # sorts the array by its keys - names of coin alphabetically


// krsort($coin_counts); # reverse sort of keys
// var_dump($coin_counts);

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// shuffle($cards);

// var_dump($cards);
$total = 0;

#multi dimentsional array which combines two arrays
$coins = [
    'penny' => [
        'count' => 100,
        'value' => .01
    ],
    'nickel' => [
        'count' =>25,
        'value' => .05
    ],
    'dime' => [
        'count' =>100,
        'value' => .10
    ],
    'quarter' => [
        'count' =>34,
        'value' => .25
    ],
    'halfDollar' => [
        'count' =>10,
        'value' => .50
    ],
];


// foreach ($coin_counts as $coin => $count) {
//     $total = $total + ($count * $coin_values[$coin]);
// }

foreach ($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['value']);
}
 
var_dump($total);


$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,14];
shuffle($cards);

// built-in function with 3 properties: array you want to be splicing from, where do you want to start the splice,
// and how many elements of the array do you want to splice off

$playerCards = array_splice($cards, 0, count($cards) / 2); //dynamically tells program to split the deck in half
$computerCards = $cards;
var_dump($playerCards);

//var_dump($playerCards); //5 cards assigned to the player
//var_dump($cards); //the remaining 5 cards

//$playerDraw = $playerCards[count($playerCards) - 1];
$playerDraw = array_pop($playerCards); //pop the last element of the array for us

var_dump($playerCards);
var_dump($playerDraw);
