<?php

namespace App\Http\Livewire;

use App\Domains\User\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class UserTable.
 */
class UserTable extends TableComponent
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
        $query = User::query();

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
            Column::make(__('email'), 'email')
,
            Column::make(__('phone_number'), 'phone_number')
,
            Column::make(__('password'), 'password')
,
            Column::make(__('pattern'), 'pattern')
,
            Column::make(__('start_date'), 'start_date')
,
            Column::make(__('office_id'), 'office_id')
,
            Column::make(__('remember_token'), 'remember_token')
,
            Column::make(__('contact_id'), 'contact_id')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('last_login'), 'last_login')
,
            Column::make(__('is_active'), 'is_active')
,
            Column::make(__('language_type'), 'language_type')
,
            Column::make(__('time_zone'), 'time_zone')
,
            Column::make(__('provider_name'), 'provider_name')
,
            Column::make(__('provider_token'), 'provider_token')
,

            Column::make(__('Actions'))
                ->format(function (User $model) {
                    return view('backend.user.includes.actions',  ['user' => $model]);
                })
        ];
    }
}