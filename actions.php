<?php

require 'vendor/autoload.php';

$actionHistory = new App\SplCourse\ActionHistory();
$actionHistory->addAction('/homepage');
$actionHistory->addAction('/products');
$actionHistory->addAction('/products/1');

$actionHistory->undoAction();
$actionHistory->undoAction();
$actionHistory->undoAction();
$actionHistory->undoAction();
