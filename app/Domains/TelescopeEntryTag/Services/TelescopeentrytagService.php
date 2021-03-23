<?php

namespace App\Domains\TelescopeEntryTag\Services;

use App\Domains\TelescopeEntryTag\Models\Telescopeentrytag;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class TelescopeentrytagService.
 */
class TelescopeentrytagService extends BaseService
{
    /**
     * TelescopeentrytagService constructor.
     *
     * @param Telescopeentrytag $telescopeentrytag
     */
    public function __construct(Telescopeentrytag $telescopeentrytag)
    {
        $this->model = $telescopeentrytag;
    }

    /**
     * @param array $data
     *
     * @return Telescopeentrytag
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Telescopeentrytag
    {
        DB::beginTransaction();

        try {
            $telescopeentrytag = $this->model::create([
                'entry_uuid' => $data['entry_uuid'],
                'tag' => $data['tag'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this telescopeentrytag. Please try again.'));
        }

        DB::commit();

        return $telescopeentrytag;
    }

    /**
     * @param Telescopeentrytag $telescopeentrytag
     * @param array $data
     *
     * @return Telescopeentrytag
     * @throws \Throwable
     */
    public function update(Telescopeentrytag $telescopeentrytag, array $data = []): Telescopeentrytag
    {
        DB::beginTransaction();

        try {
            $telescopeentrytag->update([
                'entry_uuid' => $data['entry_uuid'],
                'tag' => $data['tag'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this telescopeentrytag. Please try again.'));
        }

        DB::commit();

        return $telescopeentrytag;
    }

    /**
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return Telescopeentrytag
     * @throws GeneralException
     */
    public function delete(Telescopeentrytag $telescopeentrytag): Telescopeentrytag
    {
        if ($this->deleteById($telescopeentrytag->id)) {
            return $telescopeentrytag;
        }

        throw new GeneralException('There was a problem deleting this telescopeentrytag. Please try again.');
    }

    /**
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return Telescopeentrytag
     * @throws GeneralException
     */
    public function restore(Telescopeentrytag $telescopeentrytag): Telescopeentrytag
    {
        if ($telescopeentrytag->restore()) {
            return $telescopeentrytag;
        }

        throw new GeneralException(__('There was a problem restoring this  Telescopeentrytags. Please try again.'));
    }

    /**
     * @param Telescopeentrytag $telescopeentrytag
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Telescopeentrytag $telescopeentrytag): bool
    {
        if ($telescopeentrytag->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Telescopeentrytags. Please try again.'));
    }
}