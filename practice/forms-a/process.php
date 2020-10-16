<?php

//initialize results as an empty strong
$results = '';

$correct = null;

$haveAnswer = true;

if ($_GET['answer'] == '') {
    $haveAnswer = false;
} elseif ($_GET['answer'] == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

require 'process-view.php';