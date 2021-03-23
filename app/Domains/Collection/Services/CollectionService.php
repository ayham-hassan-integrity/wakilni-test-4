<?php

namespace App\Domains\Collection\Services;

use App\Domains\Collection\Models\Collection;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CollectionService.
 */
class CollectionService extends BaseService
{
    /**
     * CollectionService constructor.
     *
     * @param Collection $collection
     */
    public function __construct(Collection $collection)
    {
        $this->model = $collection;
    }

    /**
     * @param array $data
     *
     * @return Collection
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Collection
    {
        DB::beginTransaction();

        try {
            $collection = $this->model::create([
                'amount' => $data['amount'],
                'task_id' => $data['task_id'],
                'type_id' => $data['type_id'],
                'currency_id' => $data['currency_id'],
                'order_id' => $data['order_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this collection. Please try again.'));
        }

        DB::commit();

        return $collection;
    }

    /**
     * @param Collection $collection
     * @param array $data
     *
     * @return Collection
     * @throws \Throwable
     */
    public function update(Collection $collection, array $data = []): Collection
    {
        DB::beginTransaction();

        try {
            $collection->update([
                'amount' => $data['amount'],
                'task_id' => $data['task_id'],
                'type_id' => $data['type_id'],
                'currency_id' => $data['currency_id'],
                'order_id' => $data['order_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this collection. Please try again.'));
        }

        DB::commit();

        return $collection;
    }

    /**
     * @param Collection $collection
     *
     * @return Collection
     * @throws GeneralException
     */
    public function delete(Collection $collection): Collection
    {
        if ($this->deleteById($collection->id)) {
            return $collection;
        }

        throw new GeneralException('There was a problem deleting this collection. Please try again.');
    }

    /**
     * @param Collection $collection
     *
     * @return Collection
     * @throws GeneralException
     */
    public function restore(Collection $collection): Collection
    {
        if ($collection->restore()) {
            return $collection;
        }

        throw new GeneralException(__('There was a problem restoring this  Collections. Please try again.'));
    }

    /**
     * @param Collection $collection
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Collection $collection): bool
    {
        if ($collection->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Collections. Please try again.'));
    }
}