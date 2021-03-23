<?php

namespace App\Domains\Amount\Services;

use App\Domains\Amount\Models\Amount;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class AmountService.
 */
class AmountService extends BaseService
{
    /**
     * AmountService constructor.
     *
     * @param Amount $amount
     */
    public function __construct(Amount $amount)
    {
        $this->model = $amount;
    }

    /**
     * @param array $data
     *
     * @return Amount
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Amount
    {
        DB::beginTransaction();

        try {
            $amount = $this->model::create([
                'amount' => $data['amount'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'type_id' => $data['type_id'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this amount. Please try again.'));
        }

        DB::commit();

        return $amount;
    }

    /**
     * @param Amount $amount
     * @param array $data
     *
     * @return Amount
     * @throws \Throwable
     */
    public function update(Amount $amount, array $data = []): Amount
    {
        DB::beginTransaction();

        try {
            $amount->update([
                'amount' => $data['amount'],
                'piggy_bank_id' => $data['piggy_bank_id'],
                'type_id' => $data['type_id'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this amount. Please try again.'));
        }

        DB::commit();

        return $amount;
    }

    /**
     * @param Amount $amount
     *
     * @return Amount
     * @throws GeneralException
     */
    public function delete(Amount $amount): Amount
    {
        if ($this->deleteById($amount->id)) {
            return $amount;
        }

        throw new GeneralException('There was a problem deleting this amount. Please try again.');
    }

    /**
     * @param Amount $amount
     *
     * @return Amount
     * @throws GeneralException
     */
    public function restore(Amount $amount): Amount
    {
        if ($amount->restore()) {
            return $amount;
        }

        throw new GeneralException(__('There was a problem restoring this  Amounts. Please try again.'));
    }

    /**
     * @param Amount $amount
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Amount $amount): bool
    {
        if ($amount->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Amounts. Please try again.'));
    }
}