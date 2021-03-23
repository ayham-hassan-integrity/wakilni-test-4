<?php

namespace App\Domains\Payment\Services;

use App\Domains\Payment\Models\Payment;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class PaymentService.
 */
class PaymentService extends BaseService
{
    /**
     * PaymentService constructor.
     *
     * @param Payment $payment
     */
    public function __construct(Payment $payment)
    {
        $this->model = $payment;
    }

    /**
     * @param array $data
     *
     * @return Payment
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Payment
    {
        DB::beginTransaction();

        try {
            $payment = $this->model::create([
                'order_id' => $data['order_id'],
                'customer_id' => $data['customer_id'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'type_id' => $data['type_id'],
                'amount' => $data['amount'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this payment. Please try again.'));
        }

        DB::commit();

        return $payment;
    }

    /**
     * @param Payment $payment
     * @param array $data
     *
     * @return Payment
     * @throws \Throwable
     */
    public function update(Payment $payment, array $data = []): Payment
    {
        DB::beginTransaction();

        try {
            $payment->update([
                'order_id' => $data['order_id'],
                'customer_id' => $data['customer_id'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'type_id' => $data['type_id'],
                'amount' => $data['amount'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this payment. Please try again.'));
        }

        DB::commit();

        return $payment;
    }

    /**
     * @param Payment $payment
     *
     * @return Payment
     * @throws GeneralException
     */
    public function delete(Payment $payment): Payment
    {
        if ($this->deleteById($payment->id)) {
            return $payment;
        }

        throw new GeneralException('There was a problem deleting this payment. Please try again.');
    }

    /**
     * @param Payment $payment
     *
     * @return Payment
     * @throws GeneralException
     */
    public function restore(Payment $payment): Payment
    {
        if ($payment->restore()) {
            return $payment;
        }

        throw new GeneralException(__('There was a problem restoring this  Payments. Please try again.'));
    }

    /**
     * @param Payment $payment
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Payment $payment): bool
    {
        if ($payment->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Payments. Please try again.'));
    }
}