<?php

declare(strict_types=1);
$playlist = new SplDoublyLinkedList();
$playlist->push(['name' => 'Song1', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'duration' => '2:30']);
$playlist->push(['name' => 'Song2', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'duration' => '2:30']);
$playlist->push(['name' => 'Song3', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'duration' => '2:30']);
$playlist->push(['name' => 'Song4', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'duration' => '2:30']);

$playlist->unshift(['name' => 'Song5', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'duration' => '2:30']);

$top = $playlist->top();
//print_r($top);

$bottom = $playlist->bottom();
//print_r($bottom);
foreach ($playlist as $song) {
    //  echo $song['name'] . PHP_EOL;
}
$pop = $playlist->pop();
//print_r($pop);
foreach ($playlist as $song) {
    //   echo $song['name'] . PHP_EOL;
}
$first = $playlist->shift();
print_r($first);
foreach ($playlist as $song) {
    echo $song['name'] . PHP_EOL;
}
echo $playlist->count();
