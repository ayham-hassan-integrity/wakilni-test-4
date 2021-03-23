<?php

use App\Domains\App\Http\Controllers\Backend\App\DeletedAppController;
use App\Domains\App\Http\Controllers\Backend\App\AppController;
use App\Domains\App\Models\App;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'app',
    'as' => 'app.',
], function () {

    Route::get('/', [AppController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Apps'), route('admin.app.index'));
        });


    Route::get('deleted', [DeletedAppController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.app.index')
                ->push(__('Deleted  Apps'), route('admin.app.deleted'));
        });


    Route::get('create', [AppController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.app.index')
                ->push(__('Create App'), route('admin.app.create'));
        });

    Route::post('/', [AppController::class, 'store'])->name('store');

    Route::group(['prefix' => '{app}'], function () {
        Route::get('/', [AppController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, App $app) {
                $trail->parent('admin.app.index')
                    ->push($app->id, route('admin.app.show', $app));
            });

        Route::get('edit', [AppController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, App $app) {
                $trail->parent('admin.app.show', $app)
                    ->push(__('Edit'), route('admin.app.edit', $app));
            });

        Route::patch('/', [AppController::class, 'update'])->name('update');
        Route::delete('/', [AppController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedApp}'], function () {
        Route::patch('restore', [DeletedAppController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedAppController::class, 'destroy'])->name('permanently-delete');
    });
});