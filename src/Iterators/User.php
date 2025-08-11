<?php

namespace App\Iterators;

/**
 * Represents a user entity.
 *
 * This is a simple, immutable data object for a user.
 */
readonly class User
{
    /**
     * Creates a new User instance.
     *
     * @param int $id The user's unique identifier.
     * @param string $name The user's name.
     */
    public function __construct(public int $id, public string $name)
    {
    }
}
