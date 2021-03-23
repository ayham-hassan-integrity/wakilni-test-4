<?php

namespace App\Domains\Recipient\Services;

use App\Domains\Recipient\Models\Recipient;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class RecipientService.
 */
class RecipientService extends BaseService
{
    /**
     * RecipientService constructor.
     *
     * @param Recipient $recipient
     */
    public function __construct(Recipient $recipient)
    {
        $this->model = $recipient;
    }

    /**
     * @param array $data
     *
     * @return Recipient
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Recipient
    {
        DB::beginTransaction();

        try {
            $recipient = $this->model::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone_number' => $data['phone_number'],
                'date_of_birth' => $data['date_of_birth'],
                'gender' => $data['gender'],
                'email' => $data['email'],
                'note' => $data['note'],
                'allow_driver_contact' => $data['allow_driver_contact'],
                'viewer_id' => $data['viewer_id'],
                'contact_id' => $data['contact_id'],
                'default_address_id' => $data['default_address_id'],
                'secondary_phone_number' => $data['secondary_phone_number'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this recipient. Please try again.'));
        }

        DB::commit();

        return $recipient;
    }

    /**
     * @param Recipient $recipient
     * @param array $data
     *
     * @return Recipient
     * @throws \Throwable
     */
    public function update(Recipient $recipient, array $data = []): Recipient
    {
        DB::beginTransaction();

        try {
            $recipient->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone_number' => $data['phone_number'],
                'date_of_birth' => $data['date_of_birth'],
                'gender' => $data['gender'],
                'email' => $data['email'],
                'note' => $data['note'],
                'allow_driver_contact' => $data['allow_driver_contact'],
                'viewer_id' => $data['viewer_id'],
                'contact_id' => $data['contact_id'],
                'default_address_id' => $data['default_address_id'],
                'secondary_phone_number' => $data['secondary_phone_number'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this recipient. Please try again.'));
        }

        DB::commit();

        return $recipient;
    }

    /**
     * @param Recipient $recipient
     *
     * @return Recipient
     * @throws GeneralException
     */
    public function delete(Recipient $recipient): Recipient
    {
        if ($this->deleteById($recipient->id)) {
            return $recipient;
        }

        throw new GeneralException('There was a problem deleting this recipient. Please try again.');
    }

    /**
     * @param Recipient $recipient
     *
     * @return Recipient
     * @throws GeneralException
     */
    public function restore(Recipient $recipient): Recipient
    {
        if ($recipient->restore()) {
            return $recipient;
        }

        throw new GeneralException(__('There was a problem restoring this  Recipients. Please try again.'));
    }

    /**
     * @param Recipient $recipient
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Recipient $recipient): bool
    {
        if ($recipient->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Recipients. Please try again.'));
    }
}