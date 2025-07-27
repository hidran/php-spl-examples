<?php

require 'vendor/autoload.php';
$printer = new App\SplCourse\PrintQueue();

$printer->addDocument('Report1.pdf');
$printer->addDocument('Report2.pdf');
$printer->addDocument('invoices.xls');
echo "\n--- Processing documents ---\n";;
$printer->processDocuments();
$printer->processDocuments();
$printer->processDocuments();
$printer->processDocuments();
