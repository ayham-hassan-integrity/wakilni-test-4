<?php

namespace App\Domains\Barcode\Services;

use App\Domains\Barcode\Models\Barcode;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class BarcodeService.
 */
class BarcodeService extends BaseService
{
    /**
     * BarcodeService constructor.
     *
     * @param Barcode $barcode
     */
    public function __construct(Barcode $barcode)
    {
        $this->model = $barcode;
    }

    /**
     * @param array $data
     *
     * @return Barcode
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Barcode
    {
        DB::beginTransaction();

        try {
            $barcode = $this->model::create([
                'status' => $data['status'],
                'barcode_order_number' => $data['barcode_order_number'],
                'pickup_order_id' => $data['pickup_order_id'],
                'pickup_task_id' => $data['pickup_task_id'],
                'pickup_driver_id' => $data['pickup_driver_id'],
                'delivery_order_id' => $data['delivery_order_id'],
                'customer_id' => $data['customer_id'],
                'scanned_at' => $data['scanned_at'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this barcode. Please try again.'));
        }

        DB::commit();

        return $barcode;
    }

    /**
     * @param Barcode $barcode
     * @param array $data
     *
     * @return Barcode
     * @throws \Throwable
     */
    public function update(Barcode $barcode, array $data = []): Barcode
    {
        DB::beginTransaction();

        try {
            $barcode->update([
                'status' => $data['status'],
                'barcode_order_number' => $data['barcode_order_number'],
                'pickup_order_id' => $data['pickup_order_id'],
                'pickup_task_id' => $data['pickup_task_id'],
                'pickup_driver_id' => $data['pickup_driver_id'],
                'delivery_order_id' => $data['delivery_order_id'],
                'customer_id' => $data['customer_id'],
                'scanned_at' => $data['scanned_at'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this barcode. Please try again.'));
        }

        DB::commit();

        return $barcode;
    }

    /**
     * @param Barcode $barcode
     *
     * @return Barcode
     * @throws GeneralException
     */
    public function delete(Barcode $barcode): Barcode
    {
        if ($this->deleteById($barcode->id)) {
            return $barcode;
        }

        throw new GeneralException('There was a problem deleting this barcode. Please try again.');
    }

    /**
     * @param Barcode $barcode
     *
     * @return Barcode
     * @throws GeneralException
     */
    public function restore(Barcode $barcode): Barcode
    {
        if ($barcode->restore()) {
            return $barcode;
        }

        throw new GeneralException(__('There was a problem restoring this  Barcodes. Please try again.'));
    }

    /**
     * @param Barcode $barcode
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Barcode $barcode): bool
    {
        if ($barcode->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Barcodes. Please try again.'));
    }
}