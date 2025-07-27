<?php

namespace App\SplCourse;

use SplQueue;

class PrintQueue
{
    public function __construct(private SplQueue $documents = new SplQueue())
    {
    }

    public function addDocument(string $documentName): void
    {
        $this->documents->enqueue($documentName);
        echo "Document queued: '{$documentName}'\n";
    }

    public function processDocuments(): void
    {
        if ($this->documents->isEmpty()) {
            echo "Print queue is empty.\n";
            return;
        }
        $documentToPrint = $this->documents->dequeue();
        echo "Printing document: '{$documentToPrint}'\n";
    }
}
