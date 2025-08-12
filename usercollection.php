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

//echo 'There are ' . $userCollection->count() . ' users in the collection.' . PHP_EOL;
//try {
//    echo $userCollection[111];
//} catch (Exception $e) {
//    echo $e->getMessage();
//}

foreach ($userCollection as $user) {
    $userCollection->seek(2);
    echo $user->name . PHP_EOL;
}
$userCollection->seek(2);
echo $userCollection->current()->name . PHP_EOL;
