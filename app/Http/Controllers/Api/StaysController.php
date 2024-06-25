<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Request\StoreStayRequest;
use App\Http\Request\UpdateStayRequest;
use App\Models\Stay;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class StaysController extends Controller
{
    //
    use ApiResponseTrait;

    public function index()
    {

        $AllStays = Stay::get();
        return $this->ApiResponseTrait( $AllStays , 'Success' , 200);

    }

    public function show($id)
    {
        $GetOneStay = Stay::find($id);
        return $this->ApiResponseTrait( $GetOneStay, 'Success', 200);
    }

    public function store( StoreStayRequest $request)
    {
        Stay::create($request->all());

        return $this->ApiResponseTrait(null, 'Success', 200);

    }

    public function update(UpdateStayRequest $request , $id)
    {
        $Stay = Stay::find($id);
        $Stay->update($request->all());
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }

    public function destroy($id)
    {
        $Stay = Stay::find($id);
        $Stay->delete();
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }
}
