<?php

namespace App\Domains\PasswordReset\Services;

use App\Domains\PasswordReset\Models\Passwordreset;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class PasswordresetService.
 */
class PasswordresetService extends BaseService
{
    /**
     * PasswordresetService constructor.
     *
     * @param Passwordreset $passwordreset
     */
    public function __construct(Passwordreset $passwordreset)
    {
        $this->model = $passwordreset;
    }

    /**
     * @param array $data
     *
     * @return Passwordreset
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Passwordreset
    {
        DB::beginTransaction();

        try {
            $passwordreset = $this->model::create([
                'email' => $data['email'],
                'token' => $data['token'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this passwordreset. Please try again.'));
        }

        DB::commit();

        return $passwordreset;
    }

    /**
     * @param Passwordreset $passwordreset
     * @param array $data
     *
     * @return Passwordreset
     * @throws \Throwable
     */
    public function update(Passwordreset $passwordreset, array $data = []): Passwordreset
    {
        DB::beginTransaction();

        try {
            $passwordreset->update([
                'email' => $data['email'],
                'token' => $data['token'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this passwordreset. Please try again.'));
        }

        DB::commit();

        return $passwordreset;
    }

    /**
     * @param Passwordreset $passwordreset
     *
     * @return Passwordreset
     * @throws GeneralException
     */
    public function delete(Passwordreset $passwordreset): Passwordreset
    {
        if ($this->deleteById($passwordreset->id)) {
            return $passwordreset;
        }

        throw new GeneralException('There was a problem deleting this passwordreset. Please try again.');
    }

    /**
     * @param Passwordreset $passwordreset
     *
     * @return Passwordreset
     * @throws GeneralException
     */
    public function restore(Passwordreset $passwordreset): Passwordreset
    {
        if ($passwordreset->restore()) {
            return $passwordreset;
        }

        throw new GeneralException(__('There was a problem restoring this  Passwordresets. Please try again.'));
    }

    /**
     * @param Passwordreset $passwordreset
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Passwordreset $passwordreset): bool
    {
        if ($passwordreset->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Passwordresets. Please try again.'));
    }
}