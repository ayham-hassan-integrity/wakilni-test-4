<?php

namespace App\Domains\Comment\Observers;

use App\Domains\Comment\Models\Comment;

/**
 * Class CommentObserver.
 */
class CommentObserver
{
    /**
     * @param  Comment  $comment
     */
    public function created(Comment $comment): void
    {

    }

    /**
     * @param  Comment  $comment
     */
    public function updated(Comment $comment): void
    {

    }

}
