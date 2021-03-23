<?php

namespace App\Http\Livewire;

use App\Domains\Recipient\Models\Recipient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RecipientTable.
 */
class RecipientTable extends TableComponent
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
        $query = Recipient::query();

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
            Column::make(__('first_name'), 'first_name')
,
            Column::make(__('last_name'), 'last_name')
,
            Column::make(__('phone_number'), 'phone_number')
,
            Column::make(__('date_of_birth'), 'date_of_birth')
,
            Column::make(__('gender'), 'gender')
,
            Column::make(__('email'), 'email')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('allow_driver_contact'), 'allow_driver_contact')
,
            Column::make(__('viewer_id'), 'viewer_id')
,
            Column::make(__('contact_id'), 'contact_id')
,
            Column::make(__('default_address_id'), 'default_address_id')
,
            Column::make(__('secondary_phone_number'), 'secondary_phone_number')
,
            Column::make(__('app_token_id'), 'app_token_id')
,
            Column::make(__('app_ref_id'), 'app_ref_id')
,

            Column::make(__('Actions'))
                ->format(function (Recipient $model) {
                    return view('backend.recipient.includes.actions',  ['recipient' => $model]);
                })
        ];
    }
}