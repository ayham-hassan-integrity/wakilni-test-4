<?php

use App\Domains\AppToken\Http\Controllers\Backend\Apptoken\DeletedApptokenController;
use App\Domains\AppToken\Http\Controllers\Backend\Apptoken\ApptokenController;
use App\Domains\AppToken\Models\Apptoken;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'apptoken',
    'as' => 'apptoken.',
], function () {

    Route::get('/', [ApptokenController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Apptokens'), route('admin.apptoken.index'));
        });


    Route::get('deleted', [DeletedApptokenController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.apptoken.index')
                ->push(__('Deleted  Apptokens'), route('admin.apptoken.deleted'));
        });


    Route::get('create', [ApptokenController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.apptoken.index')
                ->push(__('Create Apptoken'), route('admin.apptoken.create'));
        });

    Route::post('/', [ApptokenController::class, 'store'])->name('store');

    Route::group(['prefix' => '{apptoken}'], function () {
        Route::get('/', [ApptokenController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Apptoken $apptoken) {
                $trail->parent('admin.apptoken.index')
                    ->push($apptoken->id, route('admin.apptoken.show', $apptoken));
            });

        Route::get('edit', [ApptokenController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Apptoken $apptoken) {
                $trail->parent('admin.apptoken.show', $apptoken)
                    ->push(__('Edit'), route('admin.apptoken.edit', $apptoken));
            });

        Route::patch('/', [ApptokenController::class, 'update'])->name('update');
        Route::delete('/', [ApptokenController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedApptoken}'], function () {
        Route::patch('restore', [DeletedApptokenController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedApptokenController::class, 'destroy'])->name('permanently-delete');
    });
});