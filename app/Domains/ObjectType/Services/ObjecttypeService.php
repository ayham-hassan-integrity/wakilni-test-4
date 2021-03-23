<?php

namespace App\Domains\ObjectType\Services;

use App\Domains\ObjectType\Models\Objecttype;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ObjecttypeService.
 */
class ObjecttypeService extends BaseService
{
    /**
     * ObjecttypeService constructor.
     *
     * @param Objecttype $objecttype
     */
    public function __construct(Objecttype $objecttype)
    {
        $this->model = $objecttype;
    }

    /**
     * @param array $data
     *
     * @return Objecttype
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Objecttype
    {
        DB::beginTransaction();

        try {
            $objecttype = $this->model::create([
                'type' => $data['type'],
                'label' => $data['label'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this objecttype. Please try again.'));
        }

        DB::commit();

        return $objecttype;
    }

    /**
     * @param Objecttype $objecttype
     * @param array $data
     *
     * @return Objecttype
     * @throws \Throwable
     */
    public function update(Objecttype $objecttype, array $data = []): Objecttype
    {
        DB::beginTransaction();

        try {
            $objecttype->update([
                'type' => $data['type'],
                'label' => $data['label'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this objecttype. Please try again.'));
        }

        DB::commit();

        return $objecttype;
    }

    /**
     * @param Objecttype $objecttype
     *
     * @return Objecttype
     * @throws GeneralException
     */
    public function delete(Objecttype $objecttype): Objecttype
    {
        if ($this->deleteById($objecttype->id)) {
            return $objecttype;
        }

        throw new GeneralException('There was a problem deleting this objecttype. Please try again.');
    }

    /**
     * @param Objecttype $objecttype
     *
     * @return Objecttype
     * @throws GeneralException
     */
    public function restore(Objecttype $objecttype): Objecttype
    {
        if ($objecttype->restore()) {
            return $objecttype;
        }

        throw new GeneralException(__('There was a problem restoring this  Objecttypes. Please try again.'));
    }

    /**
     * @param Objecttype $objecttype
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Objecttype $objecttype): bool
    {
        if ($objecttype->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Objecttypes. Please try again.'));
    }
}