<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Models\Customer::all();
        $view = view('customers.index', compact('customers'));

        return adminView($view);
    }

    public function create()
    {
        $view = view('customers.form');

        return adminView($view);
    }

    function store(CustomerRequest $request)
    {
        $customer = Models\Customer::create($this->getAttributeFields($request));

        return redirect(route('customers.index'))->with('status', "成功新增客戶資料：{$customer->company}");
    }

    public function show($id)
    {
        //
    }

    public function edit(Models\Customer $customer)
    {
        $view = view('customers.form', compact('customer'));

        return adminView($view);
    }

    public function update(CustomerRequest $request, Models\Customer $customer)
    {
        $customer->update($this->getAttributeFields($request));

        return redirect(route('customers.index'))->with('status', "成功修改客戶資料：{$customer->company}");
    }

    public function destroy($id)
    {
        //
    }

    protected function getAttributeFields(Request $request)
    {
        return $request->only([
            'company',
            'tax_id',
            'contact_person',
            'email',
            'fee',
            'comment',
        ]);
    }
}
