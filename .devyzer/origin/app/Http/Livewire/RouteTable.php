<?php

namespace App\Http\Livewire;

use App\Domains\Route\Models\Route;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RouteTable.
 */
class RouteTable extends TableComponent
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
        $query = Route::query();

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
            Column::make(__('route'), 'route')
,
            Column::make(__('km/day'), 'km/day')
,
            Column::make(__('today'), 'today')
,
            Column::make(__('driver_id'), 'driver_id')
,

            Column::make(__('Actions'))
                ->format(function (Route $model) {
                    return view('backend.route.includes.actions',  ['route' => $model]);
                })
        ];
    }
}