<?php

namespace App\Domains\Stock\Http\Controllers\Backend\Stock;

use App\Http\Controllers\Controller;
use App\Domains\Stock\Models\Stock;
use App\Domains\Stock\Services\StockService;

/**
 * Class DeletedStockController.
 */
class DeletedStockController extends Controller
{
    /**
     * @var StockService
     */
    protected $stockService;

    /**
     * DeletedStockController constructor.
     *
     * @param  StockService  $stockService
     */
    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.stock.deleted');
    }

    /**
     * @param  Stock  $deletedStock
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Stock $deletedStock)
    {
        $this->stockService->restore($deletedStock);

        return redirect()->route('admin.stock.index')->withFlashSuccess(__('The  Stocks was successfully restored.'));
    }

    /**
     * @param  Stock  $deletedStock
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Stock $deletedStock)
    {
        $this->stockService->destroy($deletedStock);

        return redirect()->route('admin.stock.deleted')->withFlashSuccess(__('The  Stocks was permanently deleted.'));
    }
}