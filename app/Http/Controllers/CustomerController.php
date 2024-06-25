<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Request\StoreCustomerRequest;
use App\Http\Request\UpdateCustomerRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('Customers.index', [
            'Customers' => Customer::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('Customers.create');
    }

    public function store ( StoreCustomerRequest $request) 
    {
        Customer::create($request->all());
        return redirect()->route('customers.index')
                ->withSuccess('New Customer is added successfully.');

        // if($request->has('CustomerPhoto')){
        //             $photo=$request['CustomerPhoto'];
        //             $extension=strtolower($photo->extension());
        //             $filename=time().rand(1,10000).".".$extension;
        //             $photo->move("CustomersPhotos",$filename);
        //         }
    }

    public function show(Customer $Customer) 
    {
        return view('Customers.show', [
            'Customer' => $Customer
        ]);
    }

    public function edit(Customer $Customer)
    {
        return view('Customers.edit', [
            'Customer' => $Customer
        ]);
    }

    public function update( UpdateCustomerRequest $request, $id) 
    {
        $Customer = Customer::find($id);
        $Customer->update($request->all());
        return redirect()->route('customers.index')
                ->withSuccess('Customer is updated successfully.');
    }


    public function destroy(Customer $Customer) 
    {
        $Customer->delete();
        return redirect()->route('customers.index')
                ->withSuccess('Customer is deleted successfully.');
    }
}
