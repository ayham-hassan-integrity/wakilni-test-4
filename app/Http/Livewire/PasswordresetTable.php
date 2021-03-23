<?php

namespace App\Http\Livewire;

use App\Domains\PasswordReset\Models\Passwordreset;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class PasswordresetTable.
 */
class PasswordresetTable extends TableComponent
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
        $query = Passwordreset::query();

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
            Column::make(__('email'), 'email')
,
            Column::make(__('token'), 'token')
,

            Column::make(__('Actions'))
                ->format(function (Passwordreset $model) {
                    return view('backend.password-reset.includes.actions',  ['passwordreset' => $model]);
                })
        ];
    }
}