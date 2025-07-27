<?php

use App\SplCourse\Enums\Priority;

require 'vendor/autoload.php';
$taskProcessor = new App\SplCourse\PriorityTaskProcessor();
$taskProcessor->addTask('Task1', Priority::ADMIN);
$taskProcessor->addTask('Task2', Priority::MEMBER);
$taskProcessor->addTask('Task3', Priority::GUEST);
$taskProcessor->addTask('Admin task', Priority::ADMIN);
$totalTasks = $taskProcessor->getQueueCount();
for ($i = 0; $i < $totalTasks; $i++) {
    $taskProcessor->processNextTask();
}


