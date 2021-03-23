<?php

namespace App\Http\Livewire;

use App\Domains\Location\Models\Location;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class LocationTable.
 */
class LocationTable extends TableComponent
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
        $query = Location::query();

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
            Column::make(__('building'), 'building')
,
            Column::make(__('floor'), 'floor')
,
            Column::make(__('directions'), 'directions')
,
            Column::make(__('longitude'), 'longitude')
,
            Column::make(__('latitude'), 'latitude')
,
            Column::make(__('area_id'), 'area_id')
,
            Column::make(__('personable_id'), 'personable_id')
,
            Column::make(__('personable_type'), 'personable_type')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('is_active'), 'is_active')
,
            Column::make(__('image_id'), 'image_id')
,
            Column::make(__('app_token_id'), 'app_token_id')
,
            Column::make(__('app_ref_id'), 'app_ref_id')
,
            Column::make(__('voice'), 'voice')
,

            Column::make(__('Actions'))
                ->format(function (Location $model) {
                    return view('backend.location.includes.actions',  ['location' => $model]);
                })
        ];
    }
}