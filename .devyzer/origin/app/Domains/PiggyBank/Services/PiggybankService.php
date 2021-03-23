<?php

namespace App\Domains\PiggyBank\Services;

use App\Domains\PiggyBank\Models\Piggybank;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class PiggybankService.
 */
class PiggybankService extends BaseService
{
    /**
     * PiggybankService constructor.
     *
     * @param Piggybank $piggybank
     */
    public function __construct(Piggybank $piggybank)
    {
        $this->model = $piggybank;
    }

    /**
     * @param array $data
     *
     * @return Piggybank
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Piggybank
    {
        DB::beginTransaction();

        try {
            $piggybank = $this->model::create([
                'note' => $data['note'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'status' => $data['status'],
                'customer_id' => $data['customer_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this piggybank. Please try again.'));
        }

        DB::commit();

        return $piggybank;
    }

    /**
     * @param Piggybank $piggybank
     * @param array $data
     *
     * @return Piggybank
     * @throws \Throwable
     */
    public function update(Piggybank $piggybank, array $data = []): Piggybank
    {
        DB::beginTransaction();

        try {
            $piggybank->update([
                'note' => $data['note'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'status' => $data['status'],
                'customer_id' => $data['customer_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this piggybank. Please try again.'));
        }

        DB::commit();

        return $piggybank;
    }

    /**
     * @param Piggybank $piggybank
     *
     * @return Piggybank
     * @throws GeneralException
     */
    public function delete(Piggybank $piggybank): Piggybank
    {
        if ($this->deleteById($piggybank->id)) {
            return $piggybank;
        }

        throw new GeneralException('There was a problem deleting this piggybank. Please try again.');
    }

    /**
     * @param Piggybank $piggybank
     *
     * @return Piggybank
     * @throws GeneralException
     */
    public function restore(Piggybank $piggybank): Piggybank
    {
        if ($piggybank->restore()) {
            return $piggybank;
        }

        throw new GeneralException(__('There was a problem restoring this  Piggybanks. Please try again.'));
    }

    /**
     * @param Piggybank $piggybank
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Piggybank $piggybank): bool
    {
        if ($piggybank->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Piggybanks. Please try again.'));
    }
}