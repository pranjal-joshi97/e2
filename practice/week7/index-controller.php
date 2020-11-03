<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

$catalog->getById(9);