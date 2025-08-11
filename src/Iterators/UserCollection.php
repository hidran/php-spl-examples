<?php

namespace App\Iterators;

class UserCollection implements \Iterator
{
    /** @var int The current position of the iterator. */
    private int $index = 0;

    /**
     * Constructor for the UserCollection.
     *
     * @param User[] $users An array of User objects to iterate over.
     */
    public function __construct(private readonly array $users = [])
    {
    }

    /**
     * @inheritDoc
     *
     * Returns the current element.
     *
     * @return User The User object at the current position.
     */
    public function current(): User
    {
        // Check if the current index is valid before accessing the array.
        // Although valid() is called before current() in typical iteration,
        // this adds an extra layer of safety.
        if (!$this->valid()) {
            throw new \OutOfBoundsException("No element at index {$this->index}");
        }
        return $this->users[$this->index];
    }

    /**
     * Checks if the current position is valid.
     *
     * @return bool True if the current position is valid, false otherwise.
     */
    public function valid(): bool
    {
        return isset($this->users[$this->index]);
    }

    /**
     * @inheritDoc
     */

    /**
     * @inheritDoc
     */
    public function next(): void
        /**
         * Moves the current position to the next element.
         */
    {
        $this->index++;
    }

    /**
     * @inheritDoc
     */

    /**
     * Returns the key of the current element.
     *
     * @return int The current index.
     */
    public function key(): int
    {
        return $this->index;
    }

    /**
     * @inheritDoc
     */

    /**
     * Rewinds the iterator to the first element.
     */
    public function rewind(): void
    {
        $this->index = 0;
    }
}
