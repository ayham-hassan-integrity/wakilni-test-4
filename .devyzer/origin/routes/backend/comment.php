<?php

use App\Domains\Comment\Http\Controllers\Backend\Comment\DeletedCommentController;
use App\Domains\Comment\Http\Controllers\Backend\Comment\CommentController;
use App\Domains\Comment\Models\Comment;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'comment',
    'as' => 'comment.',
], function () {

    Route::get('/', [CommentController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Comments'), route('admin.comment.index'));
        });


    Route::get('deleted', [DeletedCommentController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.comment.index')
                ->push(__('Deleted  Comments'), route('admin.comment.deleted'));
        });


    Route::get('create', [CommentController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.comment.index')
                ->push(__('Create Comment'), route('admin.comment.create'));
        });

    Route::post('/', [CommentController::class, 'store'])->name('store');

    Route::group(['prefix' => '{comment}'], function () {
        Route::get('/', [CommentController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Comment $comment) {
                $trail->parent('admin.comment.index')
                    ->push($comment->id, route('admin.comment.show', $comment));
            });

        Route::get('edit', [CommentController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Comment $comment) {
                $trail->parent('admin.comment.show', $comment)
                    ->push(__('Edit'), route('admin.comment.edit', $comment));
            });

        Route::patch('/', [CommentController::class, 'update'])->name('update');
        Route::delete('/', [CommentController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedComment}'], function () {
        Route::patch('restore', [DeletedCommentController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedCommentController::class, 'destroy'])->name('permanently-delete');
    });
});