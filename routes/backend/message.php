<?php

use App\Domains\Message\Http\Controllers\Backend\Message\DeletedMessageController;
use App\Domains\Message\Http\Controllers\Backend\Message\MessageController;
use App\Domains\Message\Models\Message;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'message',
    'as' => 'message.',
], function () {

    Route::get('/', [MessageController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Messages'), route('admin.message.index'));
        });


    Route::get('deleted', [DeletedMessageController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.message.index')
                ->push(__('Deleted  Messages'), route('admin.message.deleted'));
        });


    Route::get('create', [MessageController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.message.index')
                ->push(__('Create Message'), route('admin.message.create'));
        });

    Route::post('/', [MessageController::class, 'store'])->name('store');

    Route::group(['prefix' => '{message}'], function () {
        Route::get('/', [MessageController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Message $message) {
                $trail->parent('admin.message.index')
                    ->push($message->id, route('admin.message.show', $message));
            });

        Route::get('edit', [MessageController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Message $message) {
                $trail->parent('admin.message.show', $message)
                    ->push(__('Edit'), route('admin.message.edit', $message));
            });

        Route::patch('/', [MessageController::class, 'update'])->name('update');
        Route::delete('/', [MessageController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedMessage}'], function () {
        Route::patch('restore', [DeletedMessageController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedMessageController::class, 'destroy'])->name('permanently-delete');
    });
});