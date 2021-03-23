<?php

use App\Domains\Currency\Http\Controllers\Backend\Currency\DeletedCurrencyController;
use App\Domains\Currency\Http\Controllers\Backend\Currency\CurrencyController;
use App\Domains\Currency\Models\Currency;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'currency',
    'as' => 'currency.',
], function () {

    Route::get('/', [CurrencyController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Currencies'), route('admin.currency.index'));
        });


    Route::get('deleted', [DeletedCurrencyController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.currency.index')
                ->push(__('Deleted  Currencies'), route('admin.currency.deleted'));
        });


    Route::get('create', [CurrencyController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.currency.index')
                ->push(__('Create Currency'), route('admin.currency.create'));
        });

    Route::post('/', [CurrencyController::class, 'store'])->name('store');

    Route::group(['prefix' => '{currency}'], function () {
        Route::get('/', [CurrencyController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Currency $currency) {
                $trail->parent('admin.currency.index')
                    ->push($currency->id, route('admin.currency.show', $currency));
            });

        Route::get('edit', [CurrencyController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Currency $currency) {
                $trail->parent('admin.currency.show', $currency)
                    ->push(__('Edit'), route('admin.currency.edit', $currency));
            });

        Route::patch('/', [CurrencyController::class, 'update'])->name('update');
        Route::delete('/', [CurrencyController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedCurrency}'], function () {
        Route::patch('restore', [DeletedCurrencyController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedCurrencyController::class, 'destroy'])->name('permanently-delete');
    });
});