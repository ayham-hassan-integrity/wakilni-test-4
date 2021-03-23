<?php

namespace App\Domains\User\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Domains\User\Models\User;
use App\Domains\User\Services\UserService;
use App\Domains\User\Http\Requests\Backend\User\DeleteUserRequest;
use App\Domains\User\Http\Requests\Backend\User\EditUserRequest;
use App\Domains\User\Http\Requests\Backend\User\StoreUserRequest;
use App\Domains\User\Http\Requests\Backend\User\UpdateUserRequest;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * UserController constructor.
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.user.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * @param StoreUserRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->userService->store($request->validated());

        return redirect()->route('admin.user.show', $user)->withFlashSuccess(__('The  Users was successfully created.'));
    }

    /**
     * @param User $user
     *
     * @return mixed
     */
    public function show(User $user)
    {
        return view('backend.user.show')
            ->withUser($user);
    }

    /**
     * @param EditUserRequest $request
     * @param User $user
     *
     * @return mixed
     */
    public function edit(EditUserRequest $request, User $user)
    {
        return view('backend.user.edit')
            ->withUser($user);
    }

    /**
     * @param UpdateUserRequest $request
     * @param User $user
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->userService->update($user, $request->validated());

        return redirect()->route('admin.user.show', $user)->withFlashSuccess(__('The  Users was successfully updated.'));
    }

    /**
     * @param DeleteUserRequest $request
     * @param User $user
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteUserRequest $request, User $user)
    {
        $this->userService->delete($user);

        return redirect()->route('admin.$user.deleted')->withFlashSuccess(__('The  Users was successfully deleted.'));
    }
}