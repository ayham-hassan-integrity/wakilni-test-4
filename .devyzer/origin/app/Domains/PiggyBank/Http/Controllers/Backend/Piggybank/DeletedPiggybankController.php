<?php

namespace App\Domains\PiggyBank\Http\Controllers\Backend\Piggybank;

use App\Http\Controllers\Controller;
use App\Domains\PiggyBank\Models\Piggybank;
use App\Domains\PiggyBank\Services\PiggybankService;

/**
 * Class DeletedPiggybankController.
 */
class DeletedPiggybankController extends Controller
{
    /**
     * @var PiggybankService
     */
    protected $piggybankService;

    /**
     * DeletedPiggybankController constructor.
     *
     * @param  PiggybankService  $piggybankService
     */
    public function __construct(PiggybankService $piggybankService)
    {
        $this->piggybankService = $piggybankService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.piggy-bank.deleted');
    }

    /**
     * @param  Piggybank  $deletedPiggybank
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Piggybank $deletedPiggybank)
    {
        $this->piggybankService->restore($deletedPiggybank);

        return redirect()->route('admin.piggybank.index')->withFlashSuccess(__('The  Piggybanks was successfully restored.'));
    }

    /**
     * @param  Piggybank  $deletedPiggybank
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Piggybank $deletedPiggybank)
    {
        $this->piggybankService->destroy($deletedPiggybank);

        return redirect()->route('admin.piggybank.deleted')->withFlashSuccess(__('The  Piggybanks was permanently deleted.'));
    }
}