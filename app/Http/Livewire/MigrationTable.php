<?php

namespace App\Http\Livewire;

use App\Domains\Migration\Models\Migration;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class MigrationTable.
 */
class MigrationTable extends TableComponent
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
        $query = Migration::query();

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
            Column::make(__('migration'), 'migration')
,
            Column::make(__('batch'), 'batch')
,

            Column::make(__('Actions'))
                ->format(function (Migration $model) {
                    return view('backend.migration.includes.actions',  ['migration' => $model]);
                })
        ];
    }
}