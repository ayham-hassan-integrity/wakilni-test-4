<?php

namespace App\Domains\Stock\Http\Controllers\Backend\Stock;

use App\Http\Controllers\Controller;
use App\Domains\Stock\Models\Stock;
use App\Domains\Stock\Services\StockService;
use App\Domains\Stock\Http\Requests\Backend\Stock\DeleteStockRequest;
use App\Domains\Stock\Http\Requests\Backend\Stock\EditStockRequest;
use App\Domains\Stock\Http\Requests\Backend\Stock\StoreStockRequest;
use App\Domains\Stock\Http\Requests\Backend\Stock\UpdateStockRequest;

/**
 * Class StockController.
 */
class StockController extends Controller
{
    /**
     * @var StockService
     */
    protected $stockService;

    /**
     * StockController constructor.
     *
     * @param StockService $stockService
     */
    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.stock.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.stock.create');
    }

    /**
     * @param StoreStockRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreStockRequest $request)
    {
        $stock = $this->stockService->store($request->validated());

        return redirect()->route('admin.stock.show', $stock)->withFlashSuccess(__('The  Stocks was successfully created.'));
    }

    /**
     * @param Stock $stock
     *
     * @return mixed
     */
    public function show(Stock $stock)
    {
        return view('backend.stock.show')
            ->withStock($stock);
    }

    /**
     * @param EditStockRequest $request
     * @param Stock $stock
     *
     * @return mixed
     */
    public function edit(EditStockRequest $request, Stock $stock)
    {
        return view('backend.stock.edit')
            ->withStock($stock);
    }

    /**
     * @param UpdateStockRequest $request
     * @param Stock $stock
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateStockRequest $request, Stock $stock)
    {
        $this->stockService->update($stock, $request->validated());

        return redirect()->route('admin.stock.show', $stock)->withFlashSuccess(__('The  Stocks was successfully updated.'));
    }

    /**
     * @param DeleteStockRequest $request
     * @param Stock $stock
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteStockRequest $request, Stock $stock)
    {
        $this->stockService->delete($stock);

        return redirect()->route('admin.$stock.deleted')->withFlashSuccess(__('The  Stocks was successfully deleted.'));
    }
}