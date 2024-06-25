<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Request\StoreCarRequest;
use App\Http\Request\UpdateCarRequest;
use App\Models\Car;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    use ApiResponseTrait;

    public function index()
    {

        $AllCars = Car::get();
        return $this->ApiResponseTrait( $AllCars , 'Success' , 200);

    }

    public function show($id)
    {
        $GetOneCar = Car::find($id);
        return $this->ApiResponseTrait( $GetOneCar, 'Success', 200);
    }

    public function store( StoreCarRequest $request)
    {
        if($request->has('carPhoto')){
            $carPhoto=$request['carPhoto'];
            $extension=strtolower($carPhoto->extension());
            $filename=time().rand(1,10000).".".$extension;
            $carPhoto->move("CarsPhotos",$filename);
            }
            
            Car::create([
                'name' => $request['name'],
                'model' => $request['model'],
                // 'password' => Hash::make($data['password']),
                'priceForDay'=>$request['priceForDay'],
                'description'=>$request['description'],
                'carPhoto'=>$filename,
                ]);


        return $this->ApiResponseTrait(null, 'Success', 200);

    }

    public function update(UpdateCarRequest $request , $id)
    {
        $Car = Car::find($id);
        $Car->update($request->all());
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }

    public function destroy($id)
    {
        $Car = Car::find($id);
        $Car->delete();
        return $this->ApiResponseTrait(null, 'Success', 200);       
    }
}
