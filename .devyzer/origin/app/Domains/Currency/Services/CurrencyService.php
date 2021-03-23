<?php

namespace App\Domains\Currency\Services;

use App\Domains\Currency\Models\Currency;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CurrencyService.
 */
class CurrencyService extends BaseService
{
    /**
     * CurrencyService constructor.
     *
     * @param Currency $currency
     */
    public function __construct(Currency $currency)
    {
        $this->model = $currency;
    }

    /**
     * @param array $data
     *
     * @return Currency
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Currency
    {
        DB::beginTransaction();

        try {
            $currency = $this->model::create([
                'title' => $data['title'],
                'symbol_left' => $data['symbol_left'],
                'symbol_right' => $data['symbol_right'],
                'code' => $data['code'],
                'exchange_rate' => $data['exchange_rate'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this currency. Please try again.'));
        }

        DB::commit();

        return $currency;
    }

    /**
     * @param Currency $currency
     * @param array $data
     *
     * @return Currency
     * @throws \Throwable
     */
    public function update(Currency $currency, array $data = []): Currency
    {
        DB::beginTransaction();

        try {
            $currency->update([
                'title' => $data['title'],
                'symbol_left' => $data['symbol_left'],
                'symbol_right' => $data['symbol_right'],
                'code' => $data['code'],
                'exchange_rate' => $data['exchange_rate'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this currency. Please try again.'));
        }

        DB::commit();

        return $currency;
    }

    /**
     * @param Currency $currency
     *
     * @return Currency
     * @throws GeneralException
     */
    public function delete(Currency $currency): Currency
    {
        if ($this->deleteById($currency->id)) {
            return $currency;
        }

        throw new GeneralException('There was a problem deleting this currency. Please try again.');
    }

    /**
     * @param Currency $currency
     *
     * @return Currency
     * @throws GeneralException
     */
    public function restore(Currency $currency): Currency
    {
        if ($currency->restore()) {
            return $currency;
        }

        throw new GeneralException(__('There was a problem restoring this  Currencies. Please try again.'));
    }

    /**
     * @param Currency $currency
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Currency $currency): bool
    {
        if ($currency->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Currencies. Please try again.'));
    }
}