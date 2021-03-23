<?php

namespace App\Http\Livewire;

use App\Domains\ObjectType\Models\Objecttype;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ObjecttypeTable.
 */
class ObjecttypeTable extends TableComponent
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
        $query = Objecttype::query();

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
            Column::make(__('type'), 'type')
,
            Column::make(__('label'), 'label')
,

            Column::make(__('Actions'))
                ->format(function (Objecttype $model) {
                    return view('backend.object-type.includes.actions',  ['objecttype' => $model]);
                })
        ];
    }
}