<?php

namespace App\Domains\AppToken\Http\Controllers\Backend\Apptoken;

use App\Http\Controllers\Controller;
use App\Domains\AppToken\Models\Apptoken;
use App\Domains\AppToken\Services\ApptokenService;

/**
 * Class DeletedApptokenController.
 */
class DeletedApptokenController extends Controller
{
    /**
     * @var ApptokenService
     */
    protected $apptokenService;

    /**
     * DeletedApptokenController constructor.
     *
     * @param  ApptokenService  $apptokenService
     */
    public function __construct(ApptokenService $apptokenService)
    {
        $this->apptokenService = $apptokenService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.app-token.deleted');
    }

    /**
     * @param  Apptoken  $deletedApptoken
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Apptoken $deletedApptoken)
    {
        $this->apptokenService->restore($deletedApptoken);

        return redirect()->route('admin.apptoken.index')->withFlashSuccess(__('The  Apptokens was successfully restored.'));
    }

    /**
     * @param  Apptoken  $deletedApptoken
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Apptoken $deletedApptoken)
    {
        $this->apptokenService->destroy($deletedApptoken);

        return redirect()->route('admin.apptoken.deleted')->withFlashSuccess(__('The  Apptokens was permanently deleted.'));
    }
}