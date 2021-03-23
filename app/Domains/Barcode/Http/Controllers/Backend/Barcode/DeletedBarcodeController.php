<?php

namespace App\Domains\Barcode\Http\Controllers\Backend\Barcode;

use App\Http\Controllers\Controller;
use App\Domains\Barcode\Models\Barcode;
use App\Domains\Barcode\Services\BarcodeService;

/**
 * Class DeletedBarcodeController.
 */
class DeletedBarcodeController extends Controller
{
    /**
     * @var BarcodeService
     */
    protected $barcodeService;

    /**
     * DeletedBarcodeController constructor.
     *
     * @param  BarcodeService  $barcodeService
     */
    public function __construct(BarcodeService $barcodeService)
    {
        $this->barcodeService = $barcodeService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.barcode.deleted');
    }

    /**
     * @param  Barcode  $deletedBarcode
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Barcode $deletedBarcode)
    {
        $this->barcodeService->restore($deletedBarcode);

        return redirect()->route('admin.barcode.index')->withFlashSuccess(__('The  Barcodes was successfully restored.'));
    }

    /**
     * @param  Barcode  $deletedBarcode
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Barcode $deletedBarcode)
    {
        $this->barcodeService->destroy($deletedBarcode);

        return redirect()->route('admin.barcode.deleted')->withFlashSuccess(__('The  Barcodes was permanently deleted.'));
    }
}