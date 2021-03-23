<?php

namespace App\Http\Livewire;

use App\Domains\FailedJob\Models\Failedjob;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class FailedjobTable.
 */
class FailedjobTable extends TableComponent
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
        $query = Failedjob::query();

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
            Column::make(__('connection'), 'connection')
,
            Column::make(__('queue'), 'queue')
,
            Column::make(__('payload'), 'payload')
,
            Column::make(__('exception'), 'exception')
,
            Column::make(__('failed_at'), 'failed_at')
,

            Column::make(__('Actions'))
                ->format(function (Failedjob $model) {
                    return view('backend.failed-job.includes.actions',  ['failedjob' => $model]);
                })
        ];
    }
}