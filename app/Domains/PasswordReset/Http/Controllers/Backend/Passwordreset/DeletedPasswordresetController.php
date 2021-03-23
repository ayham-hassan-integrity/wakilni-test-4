<?php

namespace App\Domains\PasswordReset\Http\Controllers\Backend\Passwordreset;

use App\Http\Controllers\Controller;
use App\Domains\PasswordReset\Models\Passwordreset;
use App\Domains\PasswordReset\Services\PasswordresetService;

/**
 * Class DeletedPasswordresetController.
 */
class DeletedPasswordresetController extends Controller
{
    /**
     * @var PasswordresetService
     */
    protected $passwordresetService;

    /**
     * DeletedPasswordresetController constructor.
     *
     * @param  PasswordresetService  $passwordresetService
     */
    public function __construct(PasswordresetService $passwordresetService)
    {
        $this->passwordresetService = $passwordresetService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.password-reset.deleted');
    }

    /**
     * @param  Passwordreset  $deletedPasswordreset
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Passwordreset $deletedPasswordreset)
    {
        $this->passwordresetService->restore($deletedPasswordreset);

        return redirect()->route('admin.passwordreset.index')->withFlashSuccess(__('The  Passwordresets was successfully restored.'));
    }

    /**
     * @param  Passwordreset  $deletedPasswordreset
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Passwordreset $deletedPasswordreset)
    {
        $this->passwordresetService->destroy($deletedPasswordreset);

        return redirect()->route('admin.passwordreset.deleted')->withFlashSuccess(__('The  Passwordresets was permanently deleted.'));
    }
}