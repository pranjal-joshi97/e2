<?php

session_start();

$results = $_SESSION['results'];

// $haveAnswer = $results['haveAnswer'];
// $correct = $results['correct'];

extract($results);
// takes all the keys in results and translate them into variables

require 'done-view.php';