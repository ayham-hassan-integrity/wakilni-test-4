<?php

namespace App\Http\Livewire;

use App\Domains\Contact\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ContactTable.
 */
class ContactTable extends TableComponent
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
        $query = Contact::query();

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
            Column::make(__('is_active'), 'is_active')
,

            Column::make(__('Actions'))
                ->format(function (Contact $model) {
                    return view('backend.contact.includes.actions',  ['contact' => $model]);
                })
        ];
    }
}