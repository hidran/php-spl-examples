<?php

declare(strict_types=1);

$highScore = new SplMaxHeap();
$highScore->insert(100);
$highScore->insert(50);
$highScore->insert(150);
//echo $highScore->top() . PHP_EOL;
//foreach ($highScore as $score) {
//    echo $score . PHP_EOL;
//}
//for ($i = 0; !$highScore->isEmpty(); $i++) {
//    echo $highScore->extract() . PHP_EOL;
//}
while (!$highScore->isEmpty()) {
    echo $highScore->extract() . PHP_EOL;
}
print_r($highScore->count());
