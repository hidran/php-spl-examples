<?php

$users = ['First', 'Second', 'Third'];
foreach ($users as $user) {
    echo $user . PHP_EOL;
}
echo current($users) . PHP_EOL;
echo PHP_EOL;
next($users);
echo current($users) . PHP_EOL;
reset($users);
echo PHP_EOL;
echo current($users) . PHP_EOL;
