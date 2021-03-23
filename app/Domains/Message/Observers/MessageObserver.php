<?php

namespace App\Domains\Message\Observers;

use App\Domains\Message\Models\Message;

/**
 * Class MessageObserver.
 */
class MessageObserver
{
    /**
     * @param  Message  $message
     */
    public function created(Message $message): void
    {

    }

    /**
     * @param  Message  $message
     */
    public function updated(Message $message): void
    {

    }

}
