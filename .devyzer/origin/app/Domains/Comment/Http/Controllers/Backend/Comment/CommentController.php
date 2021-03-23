<?php

namespace App\Domains\Comment\Http\Controllers\Backend\Comment;

use App\Http\Controllers\Controller;
use App\Domains\Comment\Models\Comment;
use App\Domains\Comment\Services\CommentService;
use App\Domains\Comment\Http\Requests\Backend\Comment\DeleteCommentRequest;
use App\Domains\Comment\Http\Requests\Backend\Comment\EditCommentRequest;
use App\Domains\Comment\Http\Requests\Backend\Comment\StoreCommentRequest;
use App\Domains\Comment\Http\Requests\Backend\Comment\UpdateCommentRequest;

/**
 * Class CommentController.
 */
class CommentController extends Controller
{
    /**
     * @var CommentService
     */
    protected $commentService;

    /**
     * CommentController constructor.
     *
     * @param CommentService $commentService
     */
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.comment.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.comment.create');
    }

    /**
     * @param StoreCommentRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreCommentRequest $request)
    {
        $comment = $this->commentService->store($request->validated());

        return redirect()->route('admin.comment.show', $comment)->withFlashSuccess(__('The  Comments was successfully created.'));
    }

    /**
     * @param Comment $comment
     *
     * @return mixed
     */
    public function show(Comment $comment)
    {
        return view('backend.comment.show')
            ->withComment($comment);
    }

    /**
     * @param EditCommentRequest $request
     * @param Comment $comment
     *
     * @return mixed
     */
    public function edit(EditCommentRequest $request, Comment $comment)
    {
        return view('backend.comment.edit')
            ->withComment($comment);
    }

    /**
     * @param UpdateCommentRequest $request
     * @param Comment $comment
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $this->commentService->update($comment, $request->validated());

        return redirect()->route('admin.comment.show', $comment)->withFlashSuccess(__('The  Comments was successfully updated.'));
    }

    /**
     * @param DeleteCommentRequest $request
     * @param Comment $comment
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteCommentRequest $request, Comment $comment)
    {
        $this->commentService->delete($comment);

        return redirect()->route('admin.$comment.deleted')->withFlashSuccess(__('The  Comments was successfully deleted.'));
    }
}