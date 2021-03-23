<?php

namespace App\Domains\PiggyBank\Http\Controllers\Backend\Piggybank;

use App\Http\Controllers\Controller;
use App\Domains\PiggyBank\Models\Piggybank;
use App\Domains\PiggyBank\Services\PiggybankService;
use App\Domains\PiggyBank\Http\Requests\Backend\Piggybank\DeletePiggybankRequest;
use App\Domains\PiggyBank\Http\Requests\Backend\Piggybank\EditPiggybankRequest;
use App\Domains\PiggyBank\Http\Requests\Backend\Piggybank\StorePiggybankRequest;
use App\Domains\PiggyBank\Http\Requests\Backend\Piggybank\UpdatePiggybankRequest;

/**
 * Class PiggybankController.
 */
class PiggybankController extends Controller
{
    /**
     * @var PiggybankService
     */
    protected $piggybankService;

    /**
     * PiggybankController constructor.
     *
     * @param PiggybankService $piggybankService
     */
    public function __construct(PiggybankService $piggybankService)
    {
        $this->piggybankService = $piggybankService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.piggy-bank.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.piggy-bank.create');
    }

    /**
     * @param StorePiggybankRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StorePiggybankRequest $request)
    {
        $piggybank = $this->piggybankService->store($request->validated());

        return redirect()->route('admin.piggybank.show', $piggybank)->withFlashSuccess(__('The  Piggybanks was successfully created.'));
    }

    /**
     * @param Piggybank $piggybank
     *
     * @return mixed
     */
    public function show(Piggybank $piggybank)
    {
        return view('backend.piggy-bank.show')
            ->withPiggybank($piggybank);
    }

    /**
     * @param EditPiggybankRequest $request
     * @param Piggybank $piggybank
     *
     * @return mixed
     */
    public function edit(EditPiggybankRequest $request, Piggybank $piggybank)
    {
        return view('backend.piggy-bank.edit')
            ->withPiggybank($piggybank);
    }

    /**
     * @param UpdatePiggybankRequest $request
     * @param Piggybank $piggybank
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePiggybankRequest $request, Piggybank $piggybank)
    {
        $this->piggybankService->update($piggybank, $request->validated());

        return redirect()->route('admin.piggybank.show', $piggybank)->withFlashSuccess(__('The  Piggybanks was successfully updated.'));
    }

    /**
     * @param DeletePiggybankRequest $request
     * @param Piggybank $piggybank
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeletePiggybankRequest $request, Piggybank $piggybank)
    {
        $this->piggybankService->delete($piggybank);

        return redirect()->route('admin.$piggybank.deleted')->withFlashSuccess(__('The  Piggybanks was successfully deleted.'));
    }
}