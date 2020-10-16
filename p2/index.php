<?php

session_start();

// Should create variable $choice, $computerThrow, $finalResult
extract($_SESSION['results']);  

require 'index-view.php';