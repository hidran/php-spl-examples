<?php

namespace App\Iterators;

use ArrayIterator;

class UserCollection extends ArrayIterator
{
    /** @var int The current position of the iterator. */


    /**
     * Constructor for the UserCollection.
     *
     * @param User[] $users An array of User objects to iterate over.
     */
    public function __construct(private array $users = [])
    {
        parent::__construct($users);
    }

   
}
