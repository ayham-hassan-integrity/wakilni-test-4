<?php

namespace App\Http\Livewire;

use App\Domains\TelescopeEntry\Models\Telescopeentry;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class TelescopeentryTable.
 */
class TelescopeentryTable extends TableComponent
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
        $query = Telescopeentry::query();

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
            Column::make(__('sequence'), 'sequence')
,
            Column::make(__('uuid'), 'uuid')
,
            Column::make(__('batch_id'), 'batch_id')
,
            Column::make(__('family_hash'), 'family_hash')
,
            Column::make(__('should_display_on_index'), 'should_display_on_index')
,
            Column::make(__('type'), 'type')
,
            Column::make(__('content'), 'content')
,

            Column::make(__('Actions'))
                ->format(function (Telescopeentry $model) {
                    return view('backend.telescope-entry.includes.actions',  ['telescopeentry' => $model]);
                })
        ];
    }
}