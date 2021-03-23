<?php

namespace App\Domains\FailedJob\Services;

use App\Domains\FailedJob\Models\Failedjob;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class FailedjobService.
 */
class FailedjobService extends BaseService
{
    /**
     * FailedjobService constructor.
     *
     * @param Failedjob $failedjob
     */
    public function __construct(Failedjob $failedjob)
    {
        $this->model = $failedjob;
    }

    /**
     * @param array $data
     *
     * @return Failedjob
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Failedjob
    {
        DB::beginTransaction();

        try {
            $failedjob = $this->model::create([
                'connection' => $data['connection'],
                'queue' => $data['queue'],
                'payload' => $data['payload'],
                'exception' => $data['exception'],
                'failed_at' => $data['failed_at'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this failedjob. Please try again.'));
        }

        DB::commit();

        return $failedjob;
    }

    /**
     * @param Failedjob $failedjob
     * @param array $data
     *
     * @return Failedjob
     * @throws \Throwable
     */
    public function update(Failedjob $failedjob, array $data = []): Failedjob
    {
        DB::beginTransaction();

        try {
            $failedjob->update([
                'connection' => $data['connection'],
                'queue' => $data['queue'],
                'payload' => $data['payload'],
                'exception' => $data['exception'],
                'failed_at' => $data['failed_at'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this failedjob. Please try again.'));
        }

        DB::commit();

        return $failedjob;
    }

    /**
     * @param Failedjob $failedjob
     *
     * @return Failedjob
     * @throws GeneralException
     */
    public function delete(Failedjob $failedjob): Failedjob
    {
        if ($this->deleteById($failedjob->id)) {
            return $failedjob;
        }

        throw new GeneralException('There was a problem deleting this failedjob. Please try again.');
    }

    /**
     * @param Failedjob $failedjob
     *
     * @return Failedjob
     * @throws GeneralException
     */
    public function restore(Failedjob $failedjob): Failedjob
    {
        if ($failedjob->restore()) {
            return $failedjob;
        }

        throw new GeneralException(__('There was a problem restoring this  Failedjobs. Please try again.'));
    }

    /**
     * @param Failedjob $failedjob
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Failedjob $failedjob): bool
    {
        if ($failedjob->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Failedjobs. Please try again.'));
    }
}