<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Models\Message;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class MessageService.
 */
class MessageService extends BaseService
{
    /**
     * MessageService constructor.
     *
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->model = $message;
    }

    /**
     * @param array $data
     *
     * @return Message
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Message
    {
        DB::beginTransaction();

        try {
            $message = $this->model::create([
                'title' => $data['title'],
                'message' => $data['message'],
                'status' => $data['status'],
                'receiver_id' => $data['receiver_id'],
                'sender_id' => $data['sender_id'],
                'content_type_id' => $data['content_type_id'],
                'type_id' => $data['type_id'],
                'location_id' => $data['location_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this message. Please try again.'));
        }

        DB::commit();

        return $message;
    }

    /**
     * @param Message $message
     * @param array $data
     *
     * @return Message
     * @throws \Throwable
     */
    public function update(Message $message, array $data = []): Message
    {
        DB::beginTransaction();

        try {
            $message->update([
                'title' => $data['title'],
                'message' => $data['message'],
                'status' => $data['status'],
                'receiver_id' => $data['receiver_id'],
                'sender_id' => $data['sender_id'],
                'content_type_id' => $data['content_type_id'],
                'type_id' => $data['type_id'],
                'location_id' => $data['location_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this message. Please try again.'));
        }

        DB::commit();

        return $message;
    }

    /**
     * @param Message $message
     *
     * @return Message
     * @throws GeneralException
     */
    public function delete(Message $message): Message
    {
        if ($this->deleteById($message->id)) {
            return $message;
        }

        throw new GeneralException('There was a problem deleting this message. Please try again.');
    }

    /**
     * @param Message $message
     *
     * @return Message
     * @throws GeneralException
     */
    public function restore(Message $message): Message
    {
        if ($message->restore()) {
            return $message;
        }

        throw new GeneralException(__('There was a problem restoring this  Messages. Please try again.'));
    }

    /**
     * @param Message $message
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Message $message): bool
    {
        if ($message->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Messages. Please try again.'));
    }
}