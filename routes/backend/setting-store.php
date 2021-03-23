<?php

use App\Domains\SettingStore\Http\Controllers\Backend\Settingstore\DeletedSettingstoreController;
use App\Domains\SettingStore\Http\Controllers\Backend\Settingstore\SettingstoreController;
use App\Domains\SettingStore\Models\Settingstore;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'settingstore',
    'as' => 'settingstore.',
], function () {

    Route::get('/', [SettingstoreController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Settingstores'), route('admin.settingstore.index'));
        });


    Route::get('deleted', [DeletedSettingstoreController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.settingstore.index')
                ->push(__('Deleted  Settingstores'), route('admin.settingstore.deleted'));
        });


    Route::get('create', [SettingstoreController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.settingstore.index')
                ->push(__('Create Settingstore'), route('admin.settingstore.create'));
        });

    Route::post('/', [SettingstoreController::class, 'store'])->name('store');

    Route::group(['prefix' => '{settingstore}'], function () {
        Route::get('/', [SettingstoreController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Settingstore $settingstore) {
                $trail->parent('admin.settingstore.index')
                    ->push($settingstore->id, route('admin.settingstore.show', $settingstore));
            });

        Route::get('edit', [SettingstoreController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Settingstore $settingstore) {
                $trail->parent('admin.settingstore.show', $settingstore)
                    ->push(__('Edit'), route('admin.settingstore.edit', $settingstore));
            });

        Route::patch('/', [SettingstoreController::class, 'update'])->name('update');
        Route::delete('/', [SettingstoreController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedSettingstore}'], function () {
        Route::patch('restore', [DeletedSettingstoreController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedSettingstoreController::class, 'destroy'])->name('permanently-delete');
    });
});