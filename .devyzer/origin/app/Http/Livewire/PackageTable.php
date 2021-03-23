<?php

namespace App\Http\Livewire;

use App\Domains\Package\Models\Package;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class PackageTable.
 */
class PackageTable extends TableComponent
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
        $query = Package::query();

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
            Column::make(__('quantity'), 'quantity')
,
            Column::make(__('trip_number'), 'trip_number')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('order_details_id'), 'order_details_id')
,

            Column::make(__('Actions'))
                ->format(function (Package $model) {
                    return view('backend.package.includes.actions',  ['package' => $model]);
                })
        ];
    }
}