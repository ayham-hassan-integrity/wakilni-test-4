<?php

namespace App\Domains\CustomerOperator\Services;

use App\Domains\CustomerOperator\Models\Customeroperator;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomeroperatorService.
 */
class CustomeroperatorService extends BaseService
{
    /**
     * CustomeroperatorService constructor.
     *
     * @param Customeroperator $customeroperator
     */
    public function __construct(Customeroperator $customeroperator)
    {
        $this->model = $customeroperator;
    }

    /**
     * @param array $data
     *
     * @return Customeroperator
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Customeroperator
    {
        DB::beginTransaction();

        try {
            $customeroperator = $this->model::create([
                'customer_id' => $data['customer_id'],
                'operator_id' => $data['operator_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this customeroperator. Please try again.'));
        }

        DB::commit();

        return $customeroperator;
    }

    /**
     * @param Customeroperator $customeroperator
     * @param array $data
     *
     * @return Customeroperator
     * @throws \Throwable
     */
    public function update(Customeroperator $customeroperator, array $data = []): Customeroperator
    {
        DB::beginTransaction();

        try {
            $customeroperator->update([
                'customer_id' => $data['customer_id'],
                'operator_id' => $data['operator_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this customeroperator. Please try again.'));
        }

        DB::commit();

        return $customeroperator;
    }

    /**
     * @param Customeroperator $customeroperator
     *
     * @return Customeroperator
     * @throws GeneralException
     */
    public function delete(Customeroperator $customeroperator): Customeroperator
    {
        if ($this->deleteById($customeroperator->id)) {
            return $customeroperator;
        }

        throw new GeneralException('There was a problem deleting this customeroperator. Please try again.');
    }

    /**
     * @param Customeroperator $customeroperator
     *
     * @return Customeroperator
     * @throws GeneralException
     */
    public function restore(Customeroperator $customeroperator): Customeroperator
    {
        if ($customeroperator->restore()) {
            return $customeroperator;
        }

        throw new GeneralException(__('There was a problem restoring this  Customeroperators. Please try again.'));
    }

    /**
     * @param Customeroperator $customeroperator
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Customeroperator $customeroperator): bool
    {
        if ($customeroperator->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Customeroperators. Please try again.'));
    }
}