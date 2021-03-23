<?php

namespace App\Domains\Task\Observers;

use App\Domains\Task\Models\Task;

/**
 * Class TaskObserver.
 */
class TaskObserver
{
    /**
     * @param  Task  $task
     */
    public function created(Task $task): void
    {

    }

    /**
     * @param  Task  $task
     */
    public function updated(Task $task): void
    {

    }

}
