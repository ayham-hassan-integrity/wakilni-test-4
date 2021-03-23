<?php

use App\Domains\ObjectType\Http\Controllers\Backend\Objecttype\DeletedObjecttypeController;
use App\Domains\ObjectType\Http\Controllers\Backend\Objecttype\ObjecttypeController;
use App\Domains\ObjectType\Models\Objecttype;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'objecttype',
    'as' => 'objecttype.',
], function () {

    Route::get('/', [ObjecttypeController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Objecttypes'), route('admin.objecttype.index'));
        });


    Route::get('deleted', [DeletedObjecttypeController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.objecttype.index')
                ->push(__('Deleted  Objecttypes'), route('admin.objecttype.deleted'));
        });


    Route::get('create', [ObjecttypeController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.objecttype.index')
                ->push(__('Create Objecttype'), route('admin.objecttype.create'));
        });

    Route::post('/', [ObjecttypeController::class, 'store'])->name('store');

    Route::group(['prefix' => '{objecttype}'], function () {
        Route::get('/', [ObjecttypeController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Objecttype $objecttype) {
                $trail->parent('admin.objecttype.index')
                    ->push($objecttype->id, route('admin.objecttype.show', $objecttype));
            });

        Route::get('edit', [ObjecttypeController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Objecttype $objecttype) {
                $trail->parent('admin.objecttype.show', $objecttype)
                    ->push(__('Edit'), route('admin.objecttype.edit', $objecttype));
            });

        Route::patch('/', [ObjecttypeController::class, 'update'])->name('update');
        Route::delete('/', [ObjecttypeController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedObjecttype}'], function () {
        Route::patch('restore', [DeletedObjecttypeController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedObjecttypeController::class, 'destroy'])->name('permanently-delete');
    });
});