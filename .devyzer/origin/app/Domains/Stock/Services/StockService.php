<?php

namespace App\Domains\Stock\Services;

use App\Domains\Stock\Models\Stock;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class StockService.
 */
class StockService extends BaseService
{
    /**
     * StockService constructor.
     *
     * @param Stock $stock
     */
    public function __construct(Stock $stock)
    {
        $this->model = $stock;
    }

    /**
     * @param array $data
     *
     * @return Stock
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Stock
    {
        DB::beginTransaction();

        try {
            $stock = $this->model::create([
                'label' => $data['label'],
                'amount' => $data['amount'],
                'type_id' => $data['type_id'],
                'size_id' => $data['size_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this stock. Please try again.'));
        }

        DB::commit();

        return $stock;
    }

    /**
     * @param Stock $stock
     * @param array $data
     *
     * @return Stock
     * @throws \Throwable
     */
    public function update(Stock $stock, array $data = []): Stock
    {
        DB::beginTransaction();

        try {
            $stock->update([
                'label' => $data['label'],
                'amount' => $data['amount'],
                'type_id' => $data['type_id'],
                'size_id' => $data['size_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this stock. Please try again.'));
        }

        DB::commit();

        return $stock;
    }

    /**
     * @param Stock $stock
     *
     * @return Stock
     * @throws GeneralException
     */
    public function delete(Stock $stock): Stock
    {
        if ($this->deleteById($stock->id)) {
            return $stock;
        }

        throw new GeneralException('There was a problem deleting this stock. Please try again.');
    }

    /**
     * @param Stock $stock
     *
     * @return Stock
     * @throws GeneralException
     */
    public function restore(Stock $stock): Stock
    {
        if ($stock->restore()) {
            return $stock;
        }

        throw new GeneralException(__('There was a problem restoring this  Stocks. Please try again.'));
    }

    /**
     * @param Stock $stock
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Stock $stock): bool
    {
        if ($stock->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Stocks. Please try again.'));
    }
}