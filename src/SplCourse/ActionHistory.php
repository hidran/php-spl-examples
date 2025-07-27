<?php

declare(strict_types=1);

namespace App\SplCourse;

use SplStack;

class ActionHistory
{
    private SplStack $history;

    public function __construct()
    {
        $this->history = new SplStack();
    }

    public function addAction(string $action): void
    {
        $this->history->push($action);
        echo "Action performed: '{$action}'\n";
    }

    public function undoAction(): void
    {
        if ($this->history->isEmpty()) {
            echo "No actions to undo\n";
            return;
        }
        $lastAction = $this->history->pop();
        echo "Undoing action: $lastAction \n";
    }
}
