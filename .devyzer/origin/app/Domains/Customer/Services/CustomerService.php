<?php

namespace App\Domains\Customer\Services;

use App\Domains\Customer\Models\Customer;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerService.
 */
class CustomerService extends BaseService
{
    /**
     * CustomerService constructor.
     *
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    /**
     * @param array $data
     *
     * @return Customer
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Customer
    {
        DB::beginTransaction();

        try {
            $customer = $this->model::create([
                'golden_rule' => $data['golden_rule'],
                'mof' => $data['mof'],
                'vat' => $data['vat'],
                'accounting_ref' => $data['accounting_ref'],
                'discount' => $data['discount'],
                'quality_check' => $data['quality_check'],
                'note' => $data['note'],
                'inhouse_note' => $data['inhouse_note'],
                'submit_account_date' => $data['submit_account_date'],
                'type_id' => $data['type_id'],
                'payment_method' => $data['payment_method'],
                'subscription_type' => $data['subscription_type'],
                'is_active' => $data['is_active'],
                'deactivate_reason' => $data['deactivate_reason'],
                'shop_name' => $data['shop_name'],
                'name' => $data['name'],
                'default_address_id' => $data['default_address_id'],
                'waybill' => $data['waybill'],
                'phone_number' => $data['phone_number'],
                'email_notifications' => $data['email_notifications'],
                'sms_notifications' => $data['sms_notifications'],
                'account_manager_id' => $data['account_manager_id'],
                'industry_id' => $data['industry_id'],
                'logo' => $data['logo'],
                'online_platform' => $data['online_platform'],
                'established_year' => $data['established_year'],
                'is_product_delicate' => $data['is_product_delicate'],
                'require_bigger_car' => $data['require_bigger_car'],
                'pickup_preference' => $data['pickup_preference'],
                'orders_per_month' => $data['orders_per_month'],
                'order_average_value' => $data['order_average_value'],
                'return_products' => $data['return_products'],
                'beneficiary_name' => $data['beneficiary_name'],
                'official_invoice_needed' => $data['official_invoice_needed'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this customer. Please try again.'));
        }

        DB::commit();

        return $customer;
    }

    /**
     * @param Customer $customer
     * @param array $data
     *
     * @return Customer
     * @throws \Throwable
     */
    public function update(Customer $customer, array $data = []): Customer
    {
        DB::beginTransaction();

        try {
            $customer->update([
                'golden_rule' => $data['golden_rule'],
                'mof' => $data['mof'],
                'vat' => $data['vat'],
                'accounting_ref' => $data['accounting_ref'],
                'discount' => $data['discount'],
                'quality_check' => $data['quality_check'],
                'note' => $data['note'],
                'inhouse_note' => $data['inhouse_note'],
                'submit_account_date' => $data['submit_account_date'],
                'type_id' => $data['type_id'],
                'payment_method' => $data['payment_method'],
                'subscription_type' => $data['subscription_type'],
                'is_active' => $data['is_active'],
                'deactivate_reason' => $data['deactivate_reason'],
                'shop_name' => $data['shop_name'],
                'name' => $data['name'],
                'default_address_id' => $data['default_address_id'],
                'waybill' => $data['waybill'],
                'phone_number' => $data['phone_number'],
                'email_notifications' => $data['email_notifications'],
                'sms_notifications' => $data['sms_notifications'],
                'account_manager_id' => $data['account_manager_id'],
                'industry_id' => $data['industry_id'],
                'logo' => $data['logo'],
                'online_platform' => $data['online_platform'],
                'established_year' => $data['established_year'],
                'is_product_delicate' => $data['is_product_delicate'],
                'require_bigger_car' => $data['require_bigger_car'],
                'pickup_preference' => $data['pickup_preference'],
                'orders_per_month' => $data['orders_per_month'],
                'order_average_value' => $data['order_average_value'],
                'return_products' => $data['return_products'],
                'beneficiary_name' => $data['beneficiary_name'],
                'official_invoice_needed' => $data['official_invoice_needed'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this customer. Please try again.'));
        }

        DB::commit();

        return $customer;
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     * @throws GeneralException
     */
    public function delete(Customer $customer): Customer
    {
        if ($this->deleteById($customer->id)) {
            return $customer;
        }

        throw new GeneralException('There was a problem deleting this customer. Please try again.');
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     * @throws GeneralException
     */
    public function restore(Customer $customer): Customer
    {
        if ($customer->restore()) {
            return $customer;
        }

        throw new GeneralException(__('There was a problem restoring this  Customers. Please try again.'));
    }

    /**
     * @param Customer $customer
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Customer $customer): bool
    {
        if ($customer->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Customers. Please try again.'));
    }
}