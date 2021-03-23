<?php

namespace App\Domains\Comment\Http\Controllers\Backend\Comment;

use App\Http\Controllers\Controller;
use App\Domains\Comment\Models\Comment;
use App\Domains\Comment\Services\CommentService;

/**
 * Class DeletedCommentController.
 */
class DeletedCommentController extends Controller
{
    /**
     * @var CommentService
     */
    protected $commentService;

    /**
     * DeletedCommentController constructor.
     *
     * @param  CommentService  $commentService
     */
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.comment.deleted');
    }

    /**
     * @param  Comment  $deletedComment
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Comment $deletedComment)
    {
        $this->commentService->restore($deletedComment);

        return redirect()->route('admin.comment.index')->withFlashSuccess(__('The  Comments was successfully restored.'));
    }

    /**
     * @param  Comment  $deletedComment
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Comment $deletedComment)
    {
        $this->commentService->destroy($deletedComment);

        return redirect()->route('admin.comment.deleted')->withFlashSuccess(__('The  Comments was permanently deleted.'));
    }
}