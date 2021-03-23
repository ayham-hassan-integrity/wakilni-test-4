<?php

namespace App\Domains\CustomerPrice\Http\Controllers\Backend\Customerprice;

use App\Http\Controllers\Controller;
use App\Domains\CustomerPrice\Models\Customerprice;
use App\Domains\CustomerPrice\Services\CustomerpriceService;
use App\Domains\CustomerPrice\Http\Requests\Backend\Customerprice\DeleteCustomerpriceRequest;
use App\Domains\CustomerPrice\Http\Requests\Backend\Customerprice\EditCustomerpriceRequest;
use App\Domains\CustomerPrice\Http\Requests\Backend\Customerprice\StoreCustomerpriceRequest;
use App\Domains\CustomerPrice\Http\Requests\Backend\Customerprice\UpdateCustomerpriceRequest;

/**
 * Class CustomerpriceController.
 */
class CustomerpriceController extends Controller
{
    /**
     * @var CustomerpriceService
     */
    protected $customerpriceService;

    /**
     * CustomerpriceController constructor.
     *
     * @param CustomerpriceService $customerpriceService
     */
    public function __construct(CustomerpriceService $customerpriceService)
    {
        $this->customerpriceService = $customerpriceService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.customer-price.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.customer-price.create');
    }

    /**
     * @param StoreCustomerpriceRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreCustomerpriceRequest $request)
    {
        $customerprice = $this->customerpriceService->store($request->validated());

        return redirect()->route('admin.customerprice.show', $customerprice)->withFlashSuccess(__('The  Customerprices was successfully created.'));
    }

    /**
     * @param Customerprice $customerprice
     *
     * @return mixed
     */
    public function show(Customerprice $customerprice)
    {
        return view('backend.customer-price.show')
            ->withCustomerprice($customerprice);
    }

    /**
     * @param EditCustomerpriceRequest $request
     * @param Customerprice $customerprice
     *
     * @return mixed
     */
    public function edit(EditCustomerpriceRequest $request, Customerprice $customerprice)
    {
        return view('backend.customer-price.edit')
            ->withCustomerprice($customerprice);
    }

    /**
     * @param UpdateCustomerpriceRequest $request
     * @param Customerprice $customerprice
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateCustomerpriceRequest $request, Customerprice $customerprice)
    {
        $this->customerpriceService->update($customerprice, $request->validated());

        return redirect()->route('admin.customerprice.show', $customerprice)->withFlashSuccess(__('The  Customerprices was successfully updated.'));
    }

    /**
     * @param DeleteCustomerpriceRequest $request
     * @param Customerprice $customerprice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteCustomerpriceRequest $request, Customerprice $customerprice)
    {
        $this->customerpriceService->delete($customerprice);

        return redirect()->route('admin.$customerprice.deleted')->withFlashSuccess(__('The  Customerprices was successfully deleted.'));
    }
}