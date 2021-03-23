<?php

use App\Domains\TimeZone\Http\Controllers\Backend\Timezone\DeletedTimezoneController;
use App\Domains\TimeZone\Http\Controllers\Backend\Timezone\TimezoneController;
use App\Domains\TimeZone\Models\Timezone;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'timezone',
    'as' => 'timezone.',
], function () {

    Route::get('/', [TimezoneController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Timezones'), route('admin.timezone.index'));
        });


    Route::get('deleted', [DeletedTimezoneController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.timezone.index')
                ->push(__('Deleted  Timezones'), route('admin.timezone.deleted'));
        });


    Route::get('create', [TimezoneController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.timezone.index')
                ->push(__('Create Timezone'), route('admin.timezone.create'));
        });

    Route::post('/', [TimezoneController::class, 'store'])->name('store');

    Route::group(['prefix' => '{timezone}'], function () {
        Route::get('/', [TimezoneController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Timezone $timezone) {
                $trail->parent('admin.timezone.index')
                    ->push($timezone->id, route('admin.timezone.show', $timezone));
            });

        Route::get('edit', [TimezoneController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Timezone $timezone) {
                $trail->parent('admin.timezone.show', $timezone)
                    ->push(__('Edit'), route('admin.timezone.edit', $timezone));
            });

        Route::patch('/', [TimezoneController::class, 'update'])->name('update');
        Route::delete('/', [TimezoneController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedTimezone}'], function () {
        Route::patch('restore', [DeletedTimezoneController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedTimezoneController::class, 'destroy'])->name('permanently-delete');
    });
});