<?php

use App\Domains\Setting\Http\Controllers\Backend\Setting\DeletedSettingController;
use App\Domains\Setting\Http\Controllers\Backend\Setting\SettingController;
use App\Domains\Setting\Models\Setting;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'setting',
    'as' => 'setting.',
], function () {

    Route::get('/', [SettingController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Settings'), route('admin.setting.index'));
        });


    Route::get('deleted', [DeletedSettingController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.setting.index')
                ->push(__('Deleted  Settings'), route('admin.setting.deleted'));
        });


    Route::get('create', [SettingController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.setting.index')
                ->push(__('Create Setting'), route('admin.setting.create'));
        });

    Route::post('/', [SettingController::class, 'store'])->name('store');

    Route::group(['prefix' => '{setting}'], function () {
        Route::get('/', [SettingController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Setting $setting) {
                $trail->parent('admin.setting.index')
                    ->push($setting->id, route('admin.setting.show', $setting));
            });

        Route::get('edit', [SettingController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Setting $setting) {
                $trail->parent('admin.setting.show', $setting)
                    ->push(__('Edit'), route('admin.setting.edit', $setting));
            });

        Route::patch('/', [SettingController::class, 'update'])->name('update');
        Route::delete('/', [SettingController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedSetting}'], function () {
        Route::patch('restore', [DeletedSettingController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedSettingController::class, 'destroy'])->name('permanently-delete');
    });
});