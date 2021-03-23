<?php

namespace App\Http\Livewire;

use App\Domains\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class CustomerTable.
 */
class CustomerTable extends TableComponent
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
        $query = Customer::query();

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
            Column::make(__('golden_rule'), 'golden_rule')
,
            Column::make(__('mof'), 'mof')
,
            Column::make(__('vat'), 'vat')
,
            Column::make(__('accounting_ref'), 'accounting_ref')
,
            Column::make(__('discount'), 'discount')
,
            Column::make(__('quality_check'), 'quality_check')
,
            Column::make(__('note'), 'note')
,
            Column::make(__('inhouse_note'), 'inhouse_note')
,
            Column::make(__('submit_account_date'), 'submit_account_date')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('payment_method'), 'payment_method')
,
            Column::make(__('subscription_type'), 'subscription_type')
,
            Column::make(__('is_active'), 'is_active')
,
            Column::make(__('deactivate_reason'), 'deactivate_reason')
,
            Column::make(__('shop_name'), 'shop_name')
,
            Column::make(__('name'), 'name')
,
            Column::make(__('default_address_id'), 'default_address_id')
,
            Column::make(__('waybill'), 'waybill')
,
            Column::make(__('phone_number'), 'phone_number')
,
            Column::make(__('email_notifications'), 'email_notifications')
,
            Column::make(__('sms_notifications'), 'sms_notifications')
,
            Column::make(__('account_manager_id'), 'account_manager_id')
,
            Column::make(__('industry_id'), 'industry_id')
,
            Column::make(__('logo'), 'logo')
,
            Column::make(__('online_platform'), 'online_platform')
,
            Column::make(__('established_year'), 'established_year')
,
            Column::make(__('is_product_delicate'), 'is_product_delicate')
,
            Column::make(__('require_bigger_car'), 'require_bigger_car')
,
            Column::make(__('pickup_preference'), 'pickup_preference')
,
            Column::make(__('orders_per_month'), 'orders_per_month')
,
            Column::make(__('order_average_value'), 'order_average_value')
,
            Column::make(__('return_products'), 'return_products')
,
            Column::make(__('beneficiary_name'), 'beneficiary_name')
,
            Column::make(__('official_invoice_needed'), 'official_invoice_needed')
,

            Column::make(__('Actions'))
                ->format(function (Customer $model) {
                    return view('backend.customer.includes.actions',  ['customer' => $model]);
                })
        ];
    }
}