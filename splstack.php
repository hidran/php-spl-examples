<?php
$historyStack = [];
array_push($historyStack, '/homepage');
$historyStack[] = '/products';
$historyStack[] = '/products/1';
$historyStack[] = '/products/2';

//echo array_pop($historyStack);
//print_r($historyStack);
$historyStack = new SplStack();
$historyStack->push('/homepage');
$historyStack->push('/products');
$historyStack->push('/products/1');
$historyStack->push('/products/2');
foreach ($historyStack as $item){
    echo $item. PHP_EOL;
}
echo $historyStack->pop();
