<?php

namespace App\Domains\User\Services;

use App\Domains\User\Models\User;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService.
 */
class UserService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @param array $data
     *
     * @return User
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): User
    {
        DB::beginTransaction();

        try {
            $user = $this->model::create([
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'password' => $data['password'],
                'pattern' => $data['pattern'],
                'start_date' => $data['start_date'],
                'office_id' => $data['office_id'],
                'remember_token' => $data['remember_token'],
                'contact_id' => $data['contact_id'],
                'customer_id' => $data['customer_id'],
                'last_login' => $data['last_login'],
                'is_active' => $data['is_active'],
                'language_type' => $data['language_type'],
                'time_zone' => $data['time_zone'],
                'provider_name' => $data['provider_name'],
                'provider_token' => $data['provider_token'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this user. Please try again.'));
        }

        DB::commit();

        return $user;
    }

    /**
     * @param User $user
     * @param array $data
     *
     * @return User
     * @throws \Throwable
     */
    public function update(User $user, array $data = []): User
    {
        DB::beginTransaction();

        try {
            $user->update([
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'password' => $data['password'],
                'pattern' => $data['pattern'],
                'start_date' => $data['start_date'],
                'office_id' => $data['office_id'],
                'remember_token' => $data['remember_token'],
                'contact_id' => $data['contact_id'],
                'customer_id' => $data['customer_id'],
                'last_login' => $data['last_login'],
                'is_active' => $data['is_active'],
                'language_type' => $data['language_type'],
                'time_zone' => $data['time_zone'],
                'provider_name' => $data['provider_name'],
                'provider_token' => $data['provider_token'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this user. Please try again.'));
        }

        DB::commit();

        return $user;
    }

    /**
     * @param User $user
     *
     * @return User
     * @throws GeneralException
     */
    public function delete(User $user): User
    {
        if ($this->deleteById($user->id)) {
            return $user;
        }

        throw new GeneralException('There was a problem deleting this user. Please try again.');
    }

    /**
     * @param User $user
     *
     * @return User
     * @throws GeneralException
     */
    public function restore(User $user): User
    {
        if ($user->restore()) {
            return $user;
        }

        throw new GeneralException(__('There was a problem restoring this  Users. Please try again.'));
    }

    /**
     * @param User $user
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(User $user): bool
    {
        if ($user->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Users. Please try again.'));
    }
}