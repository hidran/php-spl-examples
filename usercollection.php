<?php

// Include the Composer autoloader to automatically load class files.
require 'vendor/autoload.php';

// Import the User and UserCollection classes from the App\Iterators namespace
// to make them available for use without the full namespace path.
use App\Iterators\User;
use App\Iterators\UserCollection;

// Create an array of User objects.
// This will be the data source for our collection.
$users = [
    new User(201, 'Laura'),
    new User(202, 'Giovanni'),
    new User(203, 'Mario'),
    new User(204, 'Marco'),
    new User(205, 'Michele'),
];

// Instantiate a UserCollection, passing the array of users to its constructor.
// The UserCollection class implements PHP's `Iterator` interface, which allows
// an object to be iterated over with a `foreach` loop as if it were an array.
$userCollection = new UserCollection($users);

// --- Demonstrating `foreach` iteration ---
// Because UserCollection is an iterator, PHP knows how to loop through its elements.
// The `foreach` loop implicitly calls the iterator's methods:
// 1. `rewind()`: Called once at the beginning of the loop.
// 2. `valid()`: Called at the beginning of each iteration. If it returns false, the loop terminates.
// 3. `current()`: Called to get the element for the current iteration.
// 4. `key()`: Called to get the key for the current iteration.
// 5. `next()`: Called at the end of each iteration to move to the next element.
echo "--- Iterating with foreach ---" . PHP_EOL;
foreach ($userCollection as $user) {
    // On each iteration, $user is the current User object from the collection.
    // We can access its public properties like `id` and `name`.
    echo $user->id . ' ' . $user->name . PHP_EOL;
}

echo PHP_EOL . "--- Manual Iterator Control ---" . PHP_EOL;

// --- Demonstrating manual iteration by calling the Iterator methods directly ---

// `rewind()`: Resets the internal pointer of the iterator to the first element.
$userCollection->rewind();
// `current()`: Returns the element at the current position of the iterator.
// After rewinding, this will be the first user ('Laura').
print_r($userCollection->current());

// `next()`: Moves the iterator's internal pointer to the next element.
$userCollection->next();
// `current()`: Now returns the second user ('Giovanni').
print_r($userCollection->current());

// `key()`: Returns the key (in this case, the array index) of the current element.
// After moving to the second element, the key will be 1.
echo $userCollection->key();
