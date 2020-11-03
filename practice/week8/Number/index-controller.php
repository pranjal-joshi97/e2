<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

$example1 = new Number(20);
var_dump($example1->getHalf());
var_dump($example1->isValid());

$example2 = new EvenNumber(15);
var_dump($example2->getHalf());
var_dump($example2->isValid());

$exampleData = ['Lorem', 'ipsum', 'dolor', 'sit', 'amet'];

Debug::dump($exampleData);
Debug::log($exampleData);