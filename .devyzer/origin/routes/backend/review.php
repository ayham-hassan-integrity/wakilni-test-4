<?php

use App\Domains\Review\Http\Controllers\Backend\Review\DeletedReviewController;
use App\Domains\Review\Http\Controllers\Backend\Review\ReviewController;
use App\Domains\Review\Models\Review;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'review',
    'as' => 'review.',
], function () {

    Route::get('/', [ReviewController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Reviews'), route('admin.review.index'));
        });


    Route::get('deleted', [DeletedReviewController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.review.index')
                ->push(__('Deleted  Reviews'), route('admin.review.deleted'));
        });


    Route::get('create', [ReviewController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.review.index')
                ->push(__('Create Review'), route('admin.review.create'));
        });

    Route::post('/', [ReviewController::class, 'store'])->name('store');

    Route::group(['prefix' => '{review}'], function () {
        Route::get('/', [ReviewController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Review $review) {
                $trail->parent('admin.review.index')
                    ->push($review->id, route('admin.review.show', $review));
            });

        Route::get('edit', [ReviewController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Review $review) {
                $trail->parent('admin.review.show', $review)
                    ->push(__('Edit'), route('admin.review.edit', $review));
            });

        Route::patch('/', [ReviewController::class, 'update'])->name('update');
        Route::delete('/', [ReviewController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedReview}'], function () {
        Route::patch('restore', [DeletedReviewController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedReviewController::class, 'destroy'])->name('permanently-delete');
    });
});