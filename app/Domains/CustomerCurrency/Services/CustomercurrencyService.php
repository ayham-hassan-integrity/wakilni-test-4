<?php

namespace App\Domains\CustomerCurrency\Services;

use App\Domains\CustomerCurrency\Models\Customercurrency;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomercurrencyService.
 */
class CustomercurrencyService extends BaseService
{
    /**
     * CustomercurrencyService constructor.
     *
     * @param Customercurrency $customercurrency
     */
    public function __construct(Customercurrency $customercurrency)
    {
        $this->model = $customercurrency;
    }

    /**
     * @param array $data
     *
     * @return Customercurrency
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Customercurrency
    {
        DB::beginTransaction();

        try {
            $customercurrency = $this->model::create([
                'customer_id' => $data['customer_id'],
                'currency_id' => $data['currency_id'],
                'exchange_rate' => $data['exchange_rate'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this customercurrency. Please try again.'));
        }

        DB::commit();

        return $customercurrency;
    }

    /**
     * @param Customercurrency $customercurrency
     * @param array $data
     *
     * @return Customercurrency
     * @throws \Throwable
     */
    public function update(Customercurrency $customercurrency, array $data = []): Customercurrency
    {
        DB::beginTransaction();

        try {
            $customercurrency->update([
                'customer_id' => $data['customer_id'],
                'currency_id' => $data['currency_id'],
                'exchange_rate' => $data['exchange_rate'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this customercurrency. Please try again.'));
        }

        DB::commit();

        return $customercurrency;
    }

    /**
     * @param Customercurrency $customercurrency
     *
     * @return Customercurrency
     * @throws GeneralException
     */
    public function delete(Customercurrency $customercurrency): Customercurrency
    {
        if ($this->deleteById($customercurrency->id)) {
            return $customercurrency;
        }

        throw new GeneralException('There was a problem deleting this customercurrency. Please try again.');
    }

    /**
     * @param Customercurrency $customercurrency
     *
     * @return Customercurrency
     * @throws GeneralException
     */
    public function restore(Customercurrency $customercurrency): Customercurrency
    {
        if ($customercurrency->restore()) {
            return $customercurrency;
        }

        throw new GeneralException(__('There was a problem restoring this  Customercurrencies. Please try again.'));
    }

    /**
     * @param Customercurrency $customercurrency
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Customercurrency $customercurrency): bool
    {
        if ($customercurrency->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Customercurrencies. Please try again.'));
    }
}