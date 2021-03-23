<?php

use App\Domains\Collection\Http\Controllers\Backend\Collection\DeletedCollectionController;
use App\Domains\Collection\Http\Controllers\Backend\Collection\CollectionController;
use App\Domains\Collection\Models\Collection;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'collection',
    'as' => 'collection.',
], function () {

    Route::get('/', [CollectionController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Collections'), route('admin.collection.index'));
        });


    Route::get('deleted', [DeletedCollectionController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.collection.index')
                ->push(__('Deleted  Collections'), route('admin.collection.deleted'));
        });


    Route::get('create', [CollectionController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.collection.index')
                ->push(__('Create Collection'), route('admin.collection.create'));
        });

    Route::post('/', [CollectionController::class, 'store'])->name('store');

    Route::group(['prefix' => '{collection}'], function () {
        Route::get('/', [CollectionController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Collection $collection) {
                $trail->parent('admin.collection.index')
                    ->push($collection->id, route('admin.collection.show', $collection));
            });

        Route::get('edit', [CollectionController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Collection $collection) {
                $trail->parent('admin.collection.show', $collection)
                    ->push(__('Edit'), route('admin.collection.edit', $collection));
            });

        Route::patch('/', [CollectionController::class, 'update'])->name('update');
        Route::delete('/', [CollectionController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedCollection}'], function () {
        Route::patch('restore', [DeletedCollectionController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedCollectionController::class, 'destroy'])->name('permanently-delete');
    });
});