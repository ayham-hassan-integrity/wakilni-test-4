<?php

use App\Domains\Amount\Http\Controllers\Backend\Amount\DeletedAmountController;
use App\Domains\Amount\Http\Controllers\Backend\Amount\AmountController;
use App\Domains\Amount\Models\Amount;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'amount',
    'as' => 'amount.',
], function () {

    Route::get('/', [AmountController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Amounts'), route('admin.amount.index'));
        });


    Route::get('deleted', [DeletedAmountController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.amount.index')
                ->push(__('Deleted  Amounts'), route('admin.amount.deleted'));
        });


    Route::get('create', [AmountController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.amount.index')
                ->push(__('Create Amount'), route('admin.amount.create'));
        });

    Route::post('/', [AmountController::class, 'store'])->name('store');

    Route::group(['prefix' => '{amount}'], function () {
        Route::get('/', [AmountController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Amount $amount) {
                $trail->parent('admin.amount.index')
                    ->push($amount->id, route('admin.amount.show', $amount));
            });

        Route::get('edit', [AmountController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Amount $amount) {
                $trail->parent('admin.amount.show', $amount)
                    ->push(__('Edit'), route('admin.amount.edit', $amount));
            });

        Route::patch('/', [AmountController::class, 'update'])->name('update');
        Route::delete('/', [AmountController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedAmount}'], function () {
        Route::patch('restore', [DeletedAmountController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedAmountController::class, 'destroy'])->name('permanently-delete');
    });
});