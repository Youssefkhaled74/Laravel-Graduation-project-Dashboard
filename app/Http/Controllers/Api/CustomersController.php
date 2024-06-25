<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Request\StoreCustomerRequest;
use App\Http\Request\UpdateCustomerRequest;
use App\Models\Customer;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    use ApiResponseTrait;

    public function index()
    {

        $AllCustomers = Customer::get();
        return $this->ApiResponseTrait( $AllCustomers , 'Success' , 200);

    }

    public function show($id)
    {
        $GetOneCustomer = Customer::find($id);
        return $this->ApiResponseTrait( $GetOneCustomer, 'Success', 200);
    }

    public function store( StoreCustomerRequest $request)
    {
        Customer::create($request->all());

        return $this->ApiResponseTrait(null, 'Success', 200);

    }

    public function update(UpdateCustomerRequest $request , $id)
    {
        $Customer = Customer::find($id);
        $Customer->update($request->all());
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }

    public function destroy($id)
    {
        $Customer = Customer::find($id);
        $Customer->delete();
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }
}
