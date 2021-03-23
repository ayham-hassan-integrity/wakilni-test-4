<?php

namespace App\Domains\TelescopeEntry\Services;

use App\Domains\TelescopeEntry\Models\Telescopeentry;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class TelescopeentryService.
 */
class TelescopeentryService extends BaseService
{
    /**
     * TelescopeentryService constructor.
     *
     * @param Telescopeentry $telescopeentry
     */
    public function __construct(Telescopeentry $telescopeentry)
    {
        $this->model = $telescopeentry;
    }

    /**
     * @param array $data
     *
     * @return Telescopeentry
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Telescopeentry
    {
        DB::beginTransaction();

        try {
            $telescopeentry = $this->model::create([
                'sequence' => $data['sequence'],
                'uuid' => $data['uuid'],
                'batch_id' => $data['batch_id'],
                'family_hash' => $data['family_hash'],
                'should_display_on_index' => $data['should_display_on_index'],
                'type' => $data['type'],
                'content' => $data['content'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this telescopeentry. Please try again.'));
        }

        DB::commit();

        return $telescopeentry;
    }

    /**
     * @param Telescopeentry $telescopeentry
     * @param array $data
     *
     * @return Telescopeentry
     * @throws \Throwable
     */
    public function update(Telescopeentry $telescopeentry, array $data = []): Telescopeentry
    {
        DB::beginTransaction();

        try {
            $telescopeentry->update([
                'sequence' => $data['sequence'],
                'uuid' => $data['uuid'],
                'batch_id' => $data['batch_id'],
                'family_hash' => $data['family_hash'],
                'should_display_on_index' => $data['should_display_on_index'],
                'type' => $data['type'],
                'content' => $data['content'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this telescopeentry. Please try again.'));
        }

        DB::commit();

        return $telescopeentry;
    }

    /**
     * @param Telescopeentry $telescopeentry
     *
     * @return Telescopeentry
     * @throws GeneralException
     */
    public function delete(Telescopeentry $telescopeentry): Telescopeentry
    {
        if ($this->deleteById($telescopeentry->id)) {
            return $telescopeentry;
        }

        throw new GeneralException('There was a problem deleting this telescopeentry. Please try again.');
    }

    /**
     * @param Telescopeentry $telescopeentry
     *
     * @return Telescopeentry
     * @throws GeneralException
     */
    public function restore(Telescopeentry $telescopeentry): Telescopeentry
    {
        if ($telescopeentry->restore()) {
            return $telescopeentry;
        }

        throw new GeneralException(__('There was a problem restoring this  Telescopeentries. Please try again.'));
    }

    /**
     * @param Telescopeentry $telescopeentry
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Telescopeentry $telescopeentry): bool
    {
        if ($telescopeentry->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Telescopeentries. Please try again.'));
    }
}