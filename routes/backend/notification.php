<?php

use App\Domains\Notification\Http\Controllers\Backend\Notification\DeletedNotificationController;
use App\Domains\Notification\Http\Controllers\Backend\Notification\NotificationController;
use App\Domains\Notification\Models\Notification;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'notification',
    'as' => 'notification.',
], function () {

    Route::get('/', [NotificationController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Notifications'), route('admin.notification.index'));
        });


    Route::get('deleted', [DeletedNotificationController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.notification.index')
                ->push(__('Deleted  Notifications'), route('admin.notification.deleted'));
        });


    Route::get('create', [NotificationController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.notification.index')
                ->push(__('Create Notification'), route('admin.notification.create'));
        });

    Route::post('/', [NotificationController::class, 'store'])->name('store');

    Route::group(['prefix' => '{notification}'], function () {
        Route::get('/', [NotificationController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Notification $notification) {
                $trail->parent('admin.notification.index')
                    ->push($notification->id, route('admin.notification.show', $notification));
            });

        Route::get('edit', [NotificationController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Notification $notification) {
                $trail->parent('admin.notification.show', $notification)
                    ->push(__('Edit'), route('admin.notification.edit', $notification));
            });

        Route::patch('/', [NotificationController::class, 'update'])->name('update');
        Route::delete('/', [NotificationController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedNotification}'], function () {
        Route::patch('restore', [DeletedNotificationController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedNotificationController::class, 'destroy'])->name('permanently-delete');
    });
});