<?php

use App\Domains\Stock\Http\Controllers\Backend\Stock\DeletedStockController;
use App\Domains\Stock\Http\Controllers\Backend\Stock\StockController;
use App\Domains\Stock\Models\Stock;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'stock',
    'as' => 'stock.',
], function () {

    Route::get('/', [StockController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Stocks'), route('admin.stock.index'));
        });


    Route::get('deleted', [DeletedStockController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.stock.index')
                ->push(__('Deleted  Stocks'), route('admin.stock.deleted'));
        });


    Route::get('create', [StockController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.stock.index')
                ->push(__('Create Stock'), route('admin.stock.create'));
        });

    Route::post('/', [StockController::class, 'store'])->name('store');

    Route::group(['prefix' => '{stock}'], function () {
        Route::get('/', [StockController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Stock $stock) {
                $trail->parent('admin.stock.index')
                    ->push($stock->id, route('admin.stock.show', $stock));
            });

        Route::get('edit', [StockController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Stock $stock) {
                $trail->parent('admin.stock.show', $stock)
                    ->push(__('Edit'), route('admin.stock.edit', $stock));
            });

        Route::patch('/', [StockController::class, 'update'])->name('update');
        Route::delete('/', [StockController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedStock}'], function () {
        Route::patch('restore', [DeletedStockController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedStockController::class, 'destroy'])->name('permanently-delete');
    });
});