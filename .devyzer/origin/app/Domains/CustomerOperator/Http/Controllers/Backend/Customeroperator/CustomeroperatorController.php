<?php

namespace App\Domains\CustomerOperator\Http\Controllers\Backend\Customeroperator;

use App\Http\Controllers\Controller;
use App\Domains\CustomerOperator\Models\Customeroperator;
use App\Domains\CustomerOperator\Services\CustomeroperatorService;
use App\Domains\CustomerOperator\Http\Requests\Backend\Customeroperator\DeleteCustomeroperatorRequest;
use App\Domains\CustomerOperator\Http\Requests\Backend\Customeroperator\EditCustomeroperatorRequest;
use App\Domains\CustomerOperator\Http\Requests\Backend\Customeroperator\StoreCustomeroperatorRequest;
use App\Domains\CustomerOperator\Http\Requests\Backend\Customeroperator\UpdateCustomeroperatorRequest;

/**
 * Class CustomeroperatorController.
 */
class CustomeroperatorController extends Controller
{
    /**
     * @var CustomeroperatorService
     */
    protected $customeroperatorService;

    /**
     * CustomeroperatorController constructor.
     *
     * @param CustomeroperatorService $customeroperatorService
     */
    public function __construct(CustomeroperatorService $customeroperatorService)
    {
        $this->customeroperatorService = $customeroperatorService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.customer-operator.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.customer-operator.create');
    }

    /**
     * @param StoreCustomeroperatorRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreCustomeroperatorRequest $request)
    {
        $customeroperator = $this->customeroperatorService->store($request->validated());

        return redirect()->route('admin.customeroperator.show', $customeroperator)->withFlashSuccess(__('The  Customeroperators was successfully created.'));
    }

    /**
     * @param Customeroperator $customeroperator
     *
     * @return mixed
     */
    public function show(Customeroperator $customeroperator)
    {
        return view('backend.customer-operator.show')
            ->withCustomeroperator($customeroperator);
    }

    /**
     * @param EditCustomeroperatorRequest $request
     * @param Customeroperator $customeroperator
     *
     * @return mixed
     */
    public function edit(EditCustomeroperatorRequest $request, Customeroperator $customeroperator)
    {
        return view('backend.customer-operator.edit')
            ->withCustomeroperator($customeroperator);
    }

    /**
     * @param UpdateCustomeroperatorRequest $request
     * @param Customeroperator $customeroperator
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateCustomeroperatorRequest $request, Customeroperator $customeroperator)
    {
        $this->customeroperatorService->update($customeroperator, $request->validated());

        return redirect()->route('admin.customeroperator.show', $customeroperator)->withFlashSuccess(__('The  Customeroperators was successfully updated.'));
    }

    /**
     * @param DeleteCustomeroperatorRequest $request
     * @param Customeroperator $customeroperator
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteCustomeroperatorRequest $request, Customeroperator $customeroperator)
    {
        $this->customeroperatorService->delete($customeroperator);

        return redirect()->route('admin.$customeroperator.deleted')->withFlashSuccess(__('The  Customeroperators was successfully deleted.'));
    }
}