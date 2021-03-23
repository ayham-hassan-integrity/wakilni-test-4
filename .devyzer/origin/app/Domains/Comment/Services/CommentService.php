<?php

namespace App\Domains\Comment\Services;

use App\Domains\Comment\Models\Comment;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CommentService.
 */
class CommentService extends BaseService
{
    /**
     * CommentService constructor.
     *
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    /**
     * @param array $data
     *
     * @return Comment
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Comment
    {
        DB::beginTransaction();

        try {
            $comment = $this->model::create([
                'comment' => $data['comment'],
                'is_public' => $data['is_public'],
                'order_id' => $data['order_id'],
                'user_id' => $data['user_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this comment. Please try again.'));
        }

        DB::commit();

        return $comment;
    }

    /**
     * @param Comment $comment
     * @param array $data
     *
     * @return Comment
     * @throws \Throwable
     */
    public function update(Comment $comment, array $data = []): Comment
    {
        DB::beginTransaction();

        try {
            $comment->update([
                'comment' => $data['comment'],
                'is_public' => $data['is_public'],
                'order_id' => $data['order_id'],
                'user_id' => $data['user_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this comment. Please try again.'));
        }

        DB::commit();

        return $comment;
    }

    /**
     * @param Comment $comment
     *
     * @return Comment
     * @throws GeneralException
     */
    public function delete(Comment $comment): Comment
    {
        if ($this->deleteById($comment->id)) {
            return $comment;
        }

        throw new GeneralException('There was a problem deleting this comment. Please try again.');
    }

    /**
     * @param Comment $comment
     *
     * @return Comment
     * @throws GeneralException
     */
    public function restore(Comment $comment): Comment
    {
        if ($comment->restore()) {
            return $comment;
        }

        throw new GeneralException(__('There was a problem restoring this  Comments. Please try again.'));
    }

    /**
     * @param Comment $comment
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Comment $comment): bool
    {
        if ($comment->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Comments. Please try again.'));
    }
}