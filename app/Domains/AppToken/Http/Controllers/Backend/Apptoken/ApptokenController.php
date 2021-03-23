<?php

namespace App\Domains\AppToken\Http\Controllers\Backend\Apptoken;

use App\Http\Controllers\Controller;
use App\Domains\AppToken\Models\Apptoken;
use App\Domains\AppToken\Services\ApptokenService;
use App\Domains\AppToken\Http\Requests\Backend\Apptoken\DeleteApptokenRequest;
use App\Domains\AppToken\Http\Requests\Backend\Apptoken\EditApptokenRequest;
use App\Domains\AppToken\Http\Requests\Backend\Apptoken\StoreApptokenRequest;
use App\Domains\AppToken\Http\Requests\Backend\Apptoken\UpdateApptokenRequest;

/**
 * Class ApptokenController.
 */
class ApptokenController extends Controller
{
    /**
     * @var ApptokenService
     */
    protected $apptokenService;

    /**
     * ApptokenController constructor.
     *
     * @param ApptokenService $apptokenService
     */
    public function __construct(ApptokenService $apptokenService)
    {
        $this->apptokenService = $apptokenService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.app-token.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.app-token.create');
    }

    /**
     * @param StoreApptokenRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreApptokenRequest $request)
    {
        $apptoken = $this->apptokenService->store($request->validated());

        return redirect()->route('admin.apptoken.show', $apptoken)->withFlashSuccess(__('The  Apptokens was successfully created.'));
    }

    /**
     * @param Apptoken $apptoken
     *
     * @return mixed
     */
    public function show(Apptoken $apptoken)
    {
        return view('backend.app-token.show')
            ->withApptoken($apptoken);
    }

    /**
     * @param EditApptokenRequest $request
     * @param Apptoken $apptoken
     *
     * @return mixed
     */
    public function edit(EditApptokenRequest $request, Apptoken $apptoken)
    {
        return view('backend.app-token.edit')
            ->withApptoken($apptoken);
    }

    /**
     * @param UpdateApptokenRequest $request
     * @param Apptoken $apptoken
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateApptokenRequest $request, Apptoken $apptoken)
    {
        $this->apptokenService->update($apptoken, $request->validated());

        return redirect()->route('admin.apptoken.show', $apptoken)->withFlashSuccess(__('The  Apptokens was successfully updated.'));
    }

    /**
     * @param DeleteApptokenRequest $request
     * @param Apptoken $apptoken
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteApptokenRequest $request, Apptoken $apptoken)
    {
        $this->apptokenService->delete($apptoken);

        return redirect()->route('admin.$apptoken.deleted')->withFlashSuccess(__('The  Apptokens was successfully deleted.'));
    }
}