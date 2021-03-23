<?php

namespace App\Domains\CustomerPrice\Services;

use App\Domains\CustomerPrice\Models\Customerprice;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerpriceService.
 */
class CustomerpriceService extends BaseService
{
    /**
     * CustomerpriceService constructor.
     *
     * @param Customerprice $customerprice
     */
    public function __construct(Customerprice $customerprice)
    {
        $this->model = $customerprice;
    }

    /**
     * @param array $data
     *
     * @return Customerprice
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Customerprice
    {
        DB::beginTransaction();

        try {
            $customerprice = $this->model::create([
                'minimum_count' => $data['minimum_count'],
                'maximum_count' => $data['maximum_count'],
                'price' => $data['price'],
                'customer_id' => $data['customer_id'],
                'from_zone_id' => $data['from_zone_id'],
                'to_zone_id' => $data['to_zone_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this customerprice. Please try again.'));
        }

        DB::commit();

        return $customerprice;
    }

    /**
     * @param Customerprice $customerprice
     * @param array $data
     *
     * @return Customerprice
     * @throws \Throwable
     */
    public function update(Customerprice $customerprice, array $data = []): Customerprice
    {
        DB::beginTransaction();

        try {
            $customerprice->update([
                'minimum_count' => $data['minimum_count'],
                'maximum_count' => $data['maximum_count'],
                'price' => $data['price'],
                'customer_id' => $data['customer_id'],
                'from_zone_id' => $data['from_zone_id'],
                'to_zone_id' => $data['to_zone_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this customerprice. Please try again.'));
        }

        DB::commit();

        return $customerprice;
    }

    /**
     * @param Customerprice $customerprice
     *
     * @return Customerprice
     * @throws GeneralException
     */
    public function delete(Customerprice $customerprice): Customerprice
    {
        if ($this->deleteById($customerprice->id)) {
            return $customerprice;
        }

        throw new GeneralException('There was a problem deleting this customerprice. Please try again.');
    }

    /**
     * @param Customerprice $customerprice
     *
     * @return Customerprice
     * @throws GeneralException
     */
    public function restore(Customerprice $customerprice): Customerprice
    {
        if ($customerprice->restore()) {
            return $customerprice;
        }

        throw new GeneralException(__('There was a problem restoring this  Customerprices. Please try again.'));
    }

    /**
     * @param Customerprice $customerprice
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Customerprice $customerprice): bool
    {
        if ($customerprice->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Customerprices. Please try again.'));
    }
}