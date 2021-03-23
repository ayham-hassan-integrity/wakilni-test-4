<?php

namespace App\Domains\StoreCurrency\Services;

use App\Domains\StoreCurrency\Models\Storecurrency;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class StorecurrencyService.
 */
class StorecurrencyService extends BaseService
{
    /**
     * StorecurrencyService constructor.
     *
     * @param Storecurrency $storecurrency
     */
    public function __construct(Storecurrency $storecurrency)
    {
        $this->model = $storecurrency;
    }

    /**
     * @param array $data
     *
     * @return Storecurrency
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Storecurrency
    {
        DB::beginTransaction();

        try {
            $storecurrency = $this->model::create([
                'store_id' => $data['store_id'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this storecurrency. Please try again.'));
        }

        DB::commit();

        return $storecurrency;
    }

    /**
     * @param Storecurrency $storecurrency
     * @param array $data
     *
     * @return Storecurrency
     * @throws \Throwable
     */
    public function update(Storecurrency $storecurrency, array $data = []): Storecurrency
    {
        DB::beginTransaction();

        try {
            $storecurrency->update([
                'store_id' => $data['store_id'],
                'currency_id' => $data['currency_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this storecurrency. Please try again.'));
        }

        DB::commit();

        return $storecurrency;
    }

    /**
     * @param Storecurrency $storecurrency
     *
     * @return Storecurrency
     * @throws GeneralException
     */
    public function delete(Storecurrency $storecurrency): Storecurrency
    {
        if ($this->deleteById($storecurrency->id)) {
            return $storecurrency;
        }

        throw new GeneralException('There was a problem deleting this storecurrency. Please try again.');
    }

    /**
     * @param Storecurrency $storecurrency
     *
     * @return Storecurrency
     * @throws GeneralException
     */
    public function restore(Storecurrency $storecurrency): Storecurrency
    {
        if ($storecurrency->restore()) {
            return $storecurrency;
        }

        throw new GeneralException(__('There was a problem restoring this  Storecurrencies. Please try again.'));
    }

    /**
     * @param Storecurrency $storecurrency
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Storecurrency $storecurrency): bool
    {
        if ($storecurrency->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Storecurrencies. Please try again.'));
    }
}