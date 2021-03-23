<?php

namespace App\Domains\Barcode\Http\Controllers\Backend\Barcode;

use App\Http\Controllers\Controller;
use App\Domains\Barcode\Models\Barcode;
use App\Domains\Barcode\Services\BarcodeService;
use App\Domains\Barcode\Http\Requests\Backend\Barcode\DeleteBarcodeRequest;
use App\Domains\Barcode\Http\Requests\Backend\Barcode\EditBarcodeRequest;
use App\Domains\Barcode\Http\Requests\Backend\Barcode\StoreBarcodeRequest;
use App\Domains\Barcode\Http\Requests\Backend\Barcode\UpdateBarcodeRequest;

/**
 * Class BarcodeController.
 */
class BarcodeController extends Controller
{
    /**
     * @var BarcodeService
     */
    protected $barcodeService;

    /**
     * BarcodeController constructor.
     *
     * @param BarcodeService $barcodeService
     */
    public function __construct(BarcodeService $barcodeService)
    {
        $this->barcodeService = $barcodeService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.barcode.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.barcode.create');
    }

    /**
     * @param StoreBarcodeRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreBarcodeRequest $request)
    {
        $barcode = $this->barcodeService->store($request->validated());

        return redirect()->route('admin.barcode.show', $barcode)->withFlashSuccess(__('The  Barcodes was successfully created.'));
    }

    /**
     * @param Barcode $barcode
     *
     * @return mixed
     */
    public function show(Barcode $barcode)
    {
        return view('backend.barcode.show')
            ->withBarcode($barcode);
    }

    /**
     * @param EditBarcodeRequest $request
     * @param Barcode $barcode
     *
     * @return mixed
     */
    public function edit(EditBarcodeRequest $request, Barcode $barcode)
    {
        return view('backend.barcode.edit')
            ->withBarcode($barcode);
    }

    /**
     * @param UpdateBarcodeRequest $request
     * @param Barcode $barcode
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateBarcodeRequest $request, Barcode $barcode)
    {
        $this->barcodeService->update($barcode, $request->validated());

        return redirect()->route('admin.barcode.show', $barcode)->withFlashSuccess(__('The  Barcodes was successfully updated.'));
    }

    /**
     * @param DeleteBarcodeRequest $request
     * @param Barcode $barcode
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteBarcodeRequest $request, Barcode $barcode)
    {
        $this->barcodeService->delete($barcode);

        return redirect()->route('admin.$barcode.deleted')->withFlashSuccess(__('The  Barcodes was successfully deleted.'));
    }
}