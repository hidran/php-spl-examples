<?php

// Define a simple array of users.
$users = ['First', 'Second', 'Third'];

// The `foreach` loop is the most common way to iterate over an array.
// It's important to note that `foreach` works on a copy of the array,
// so it does not affect the original array's internal pointer.
foreach ($users as $user) {
    echo $user . PHP_EOL;
}

// `current()` returns the element at the current position of the internal array pointer.
// Since the pointer has not been explicitly moved yet, it still points to the first element.
// The `foreach` loop above did not change it.
echo current($users) . PHP_EOL;
echo PHP_EOL;

// `next()` advances the internal array pointer by one position.
next($users);

// Now, `current()` will return the second element in the array ('Second').
echo current($users) . PHP_EOL;

// `reset()` rewinds the internal array pointer back to the very first element.
reset($users);
echo PHP_EOL;

// After resetting, `current()` will once again return the first element.
echo current($users) . PHP_EOL;
