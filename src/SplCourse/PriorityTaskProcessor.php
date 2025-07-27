<?php

namespace App\SplCourse;

use App\SplCourse\Enums\Priority;
use SplPriorityQueue;

readonly class PriorityTaskProcessor
{
    public function __construct(private SplPriorityQueue $taskQueue = new SplPriorityQueue)
    {
    }

    public function addTask(string $task, Priority $priority): void
    {
        $this->taskQueue->insert($task, $priority->value);
        echo "Task added: '$task' (Priority: $priority->name)\n";
    }

    public function processNextTask(): void
    {
        if ($this->taskQueue->isEmpty()) {
            echo "No tasks to process.\n";
            return;
        }
        $task = $this->taskQueue->extract();
        echo "Processing: '$task'\n";
    }

    public function getQueueCount(): int
    {
        return $this->taskQueue->count();
    }
}
