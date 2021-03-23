<?php

namespace App\Domains\PasswordReset\Http\Controllers\Backend\Passwordreset;

use App\Http\Controllers\Controller;
use App\Domains\PasswordReset\Models\Passwordreset;
use App\Domains\PasswordReset\Services\PasswordresetService;
use App\Domains\PasswordReset\Http\Requests\Backend\Passwordreset\DeletePasswordresetRequest;
use App\Domains\PasswordReset\Http\Requests\Backend\Passwordreset\EditPasswordresetRequest;
use App\Domains\PasswordReset\Http\Requests\Backend\Passwordreset\StorePasswordresetRequest;
use App\Domains\PasswordReset\Http\Requests\Backend\Passwordreset\UpdatePasswordresetRequest;

/**
 * Class PasswordresetController.
 */
class PasswordresetController extends Controller
{
    /**
     * @var PasswordresetService
     */
    protected $passwordresetService;

    /**
     * PasswordresetController constructor.
     *
     * @param PasswordresetService $passwordresetService
     */
    public function __construct(PasswordresetService $passwordresetService)
    {
        $this->passwordresetService = $passwordresetService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.password-reset.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.password-reset.create');
    }

    /**
     * @param StorePasswordresetRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StorePasswordresetRequest $request)
    {
        $passwordreset = $this->passwordresetService->store($request->validated());

        return redirect()->route('admin.passwordreset.show', $passwordreset)->withFlashSuccess(__('The  Passwordresets was successfully created.'));
    }

    /**
     * @param Passwordreset $passwordreset
     *
     * @return mixed
     */
    public function show(Passwordreset $passwordreset)
    {
        return view('backend.password-reset.show')
            ->withPasswordreset($passwordreset);
    }

    /**
     * @param EditPasswordresetRequest $request
     * @param Passwordreset $passwordreset
     *
     * @return mixed
     */
    public function edit(EditPasswordresetRequest $request, Passwordreset $passwordreset)
    {
        return view('backend.password-reset.edit')
            ->withPasswordreset($passwordreset);
    }

    /**
     * @param UpdatePasswordresetRequest $request
     * @param Passwordreset $passwordreset
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePasswordresetRequest $request, Passwordreset $passwordreset)
    {
        $this->passwordresetService->update($passwordreset, $request->validated());

        return redirect()->route('admin.passwordreset.show', $passwordreset)->withFlashSuccess(__('The  Passwordresets was successfully updated.'));
    }

    /**
     * @param DeletePasswordresetRequest $request
     * @param Passwordreset $passwordreset
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeletePasswordresetRequest $request, Passwordreset $passwordreset)
    {
        $this->passwordresetService->delete($passwordreset);

        return redirect()->route('admin.$passwordreset.deleted')->withFlashSuccess(__('The  Passwordresets was successfully deleted.'));
    }
}