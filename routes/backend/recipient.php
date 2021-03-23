<?php

use App\Domains\Recipient\Http\Controllers\Backend\Recipient\DeletedRecipientController;
use App\Domains\Recipient\Http\Controllers\Backend\Recipient\RecipientController;
use App\Domains\Recipient\Models\Recipient;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'recipient',
    'as' => 'recipient.',
], function () {

    Route::get('/', [RecipientController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Recipients'), route('admin.recipient.index'));
        });


    Route::get('deleted', [DeletedRecipientController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.recipient.index')
                ->push(__('Deleted  Recipients'), route('admin.recipient.deleted'));
        });


    Route::get('create', [RecipientController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.recipient.index')
                ->push(__('Create Recipient'), route('admin.recipient.create'));
        });

    Route::post('/', [RecipientController::class, 'store'])->name('store');

    Route::group(['prefix' => '{recipient}'], function () {
        Route::get('/', [RecipientController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Recipient $recipient) {
                $trail->parent('admin.recipient.index')
                    ->push($recipient->id, route('admin.recipient.show', $recipient));
            });

        Route::get('edit', [RecipientController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Recipient $recipient) {
                $trail->parent('admin.recipient.show', $recipient)
                    ->push(__('Edit'), route('admin.recipient.edit', $recipient));
            });

        Route::patch('/', [RecipientController::class, 'update'])->name('update');
        Route::delete('/', [RecipientController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedRecipient}'], function () {
        Route::patch('restore', [DeletedRecipientController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedRecipientController::class, 'destroy'])->name('permanently-delete');
    });
});