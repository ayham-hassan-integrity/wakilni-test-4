<?php

namespace App\Http\Livewire;

use App\Domains\TelescopeEntryTag\Models\Telescopeentrytag;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class TelescopeentrytagTable.
 */
class TelescopeentrytagTable extends TableComponent
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
        $query = Telescopeentrytag::query();

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
            Column::make(__('entry_uuid'), 'entry_uuid')
,
            Column::make(__('tag'), 'tag')
,

            Column::make(__('Actions'))
                ->format(function (Telescopeentrytag $model) {
                    return view('backend.telescope-entry-tag.includes.actions',  ['telescopeentrytag' => $model]);
                })
        ];
    }
}