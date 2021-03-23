<?php

use App\Domains\Store\Http\Controllers\Backend\Store\DeletedStoreController;
use App\Domains\Store\Http\Controllers\Backend\Store\StoreController;
use App\Domains\Store\Models\Store;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'store',
    'as' => 'store.',
], function () {

    Route::get('/', [StoreController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Stores'), route('admin.store.index'));
        });


    Route::get('deleted', [DeletedStoreController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.store.index')
                ->push(__('Deleted  Stores'), route('admin.store.deleted'));
        });


    Route::get('create', [StoreController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.store.index')
                ->push(__('Create Store'), route('admin.store.create'));
        });

    Route::post('/', [StoreController::class, 'store'])->name('store');

    Route::group(['prefix' => '{store}'], function () {
        Route::get('/', [StoreController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Store $store) {
                $trail->parent('admin.store.index')
                    ->push($store->id, route('admin.store.show', $store));
            });

        Route::get('edit', [StoreController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Store $store) {
                $trail->parent('admin.store.show', $store)
                    ->push(__('Edit'), route('admin.store.edit', $store));
            });

        Route::patch('/', [StoreController::class, 'update'])->name('update');
        Route::delete('/', [StoreController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedStore}'], function () {
        Route::patch('restore', [DeletedStoreController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedStoreController::class, 'destroy'])->name('permanently-delete');
    });
});