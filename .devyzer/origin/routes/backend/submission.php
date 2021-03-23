<?php

use App\Domains\Submission\Http\Controllers\Backend\Submission\DeletedSubmissionController;
use App\Domains\Submission\Http\Controllers\Backend\Submission\SubmissionController;
use App\Domains\Submission\Models\Submission;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'submission',
    'as' => 'submission.',
], function () {

    Route::get('/', [SubmissionController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Submissions'), route('admin.submission.index'));
        });


    Route::get('deleted', [DeletedSubmissionController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.submission.index')
                ->push(__('Deleted  Submissions'), route('admin.submission.deleted'));
        });


    Route::get('create', [SubmissionController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.submission.index')
                ->push(__('Create Submission'), route('admin.submission.create'));
        });

    Route::post('/', [SubmissionController::class, 'store'])->name('store');

    Route::group(['prefix' => '{submission}'], function () {
        Route::get('/', [SubmissionController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Submission $submission) {
                $trail->parent('admin.submission.index')
                    ->push($submission->id, route('admin.submission.show', $submission));
            });

        Route::get('edit', [SubmissionController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Submission $submission) {
                $trail->parent('admin.submission.show', $submission)
                    ->push(__('Edit'), route('admin.submission.edit', $submission));
            });

        Route::patch('/', [SubmissionController::class, 'update'])->name('update');
        Route::delete('/', [SubmissionController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedSubmission}'], function () {
        Route::patch('restore', [DeletedSubmissionController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedSubmissionController::class, 'destroy'])->name('permanently-delete');
    });
});