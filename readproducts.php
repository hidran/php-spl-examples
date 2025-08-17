<?php

declare(strict_types=1);
//$handle = fopen('data/products.csv', 'r');
//if ($handle !== false) {
//    while (($line = fgetcsv($handle, 1000, ',', ' ', '\\')) !== false) {
//        print_r($line);
//    }
//}
try {
    $fileInfo = new SplFileInfo('data/products.csv');
//    echo "--- Fileinfo: " . $fileInfo->getFilename() . " ---\n";
//    echo 'Name: ' . $fileInfo->getFilename() . "\n";
//    echo 'Extension: ' . $fileInfo->getExtension() . "\n";
//    echo 'Size: ' . $fileInfo->getSize() . " bytes\n";
//    echo 'Path: ' . $fileInfo->getRealPath() . "\n";
//    echo 'writeable? ' . ($fileInfo->isWritable() ? 'Sì' : 'No') . "\n";
//    echo 'las modified: ' . date('Y-m-d H:i:s', $fileInfo->getMTime()) . "\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
$fileData = new SplFileObject('data/products.csv', 'a+');
$fileData->fwrite('FP7007,"LAPTOP","High-speed portable storage, USB-C compatible.",105,89.90,300,1' . "\n");
$newProduct = [
    'FP7007',
    'Gaming Laptop',
    'High-speed portable storage, USB-C compatible.',
    105,
    1599.90,
    30,
    1
];
$fileData->fputcsv($newProduct, ',', '"', '\\');
//$fileData->rewind();
$fileData->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);

$cont = 0;
foreach ($fileData as $rowNumber => $row) {
    $cont++;
    if ($rowNumber === 0 || !$row) {
        continue;
    }
    [$sku, $name, $description, $category] = $row;
    echo "SKU: $sku, Name: $name, Description: $description, Category: $category\n";
}
echo "Total rows: $cont";
