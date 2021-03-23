<?php

namespace App\Domains\User\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Domains\User\Models\User;
use App\Domains\User\Services\UserService;

/**
 * Class DeletedUserController.
 */
class DeletedUserController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * DeletedUserController constructor.
     *
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.user.deleted');
    }

    /**
     * @param  User  $deletedUser
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(User $deletedUser)
    {
        $this->userService->restore($deletedUser);

        return redirect()->route('admin.user.index')->withFlashSuccess(__('The  Users was successfully restored.'));
    }

    /**
     * @param  User  $deletedUser
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(User $deletedUser)
    {
        $this->userService->destroy($deletedUser);

        return redirect()->route('admin.user.deleted')->withFlashSuccess(__('The  Users was permanently deleted.'));
    }
}