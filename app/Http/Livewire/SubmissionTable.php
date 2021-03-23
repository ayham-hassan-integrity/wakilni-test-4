<?php

namespace App\Http\Livewire;

use App\Domains\Submission\Models\Submission;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class SubmissionTable.
 */
class SubmissionTable extends TableComponent
{
    /**
     * @var string
     */
    public $sortField = 'id';

    /**
     * @var string
     */
    public $status;

    /**
     * @param string $status
     */
    public function mount($status = null): void
    {
        $this->status = $status;
    }

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        $query = Submission::query();

        if ($this->status === 'deleted') {
            return $query->onlyTrashed();
        }

        return $query;
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('id'), 'id')
,
            Column::make(__('amount'), 'amount')
,
            Column::make(__('corrected_amount'), 'corrected_amount')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('driver_submission_id'), 'driver_submission_id')
,
            Column::make(__('currency_id'), 'currency_id')
,

            Column::make(__('Actions'))
                ->format(function (Submission $model) {
                    return view('backend.submission.includes.actions',  ['submission' => $model]);
                })
        ];
    }
}