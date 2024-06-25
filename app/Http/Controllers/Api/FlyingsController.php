<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Request\StoreFlyRequest;
use App\Http\Request\UpdateFlyRequest;
use App\Models\Fly;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FlyingsController extends Controller
{
    //
    use ApiResponseTrait;

    public function index()
    {

        $AllFlys = Fly::get();
        return $this->ApiResponseTrait( $AllFlys , 'Success' , 200);

    }

    public function show($id)
    {
        $GetOneFly = Fly::find($id);
        return $this->ApiResponseTrait( $GetOneFly, 'Success', 200);
    }

    public function store( StoreFlyRequest $request)
    {
        Fly::create($request->all());

        return $this->ApiResponseTrait(null, 'Success', 200);

    }

    public function update(UpdateFlyRequest $request , $id)
    {
        $Fly = Fly::find($id);
        $Fly->update($request->all());
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }

    public function destroy($id)
    {
        $Fly = Fly::find($id);
        $Fly->delete();
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }
}
