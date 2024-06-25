<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Request\StoreCarRequest;
use App\Http\Request\UpdateCarRequest;
use App\Http\Requests\UpdateCarRequest as RequestsUpdateCarRequest;

class CarsController extends Controller
{
    //
    public function index()
    {
        return view('Cars.index', [
            'cars' => Car::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('Cars.create');
    }

    public function store ( StoreCarRequest $request) 
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
                    return redirect()->route('cars.index')
                            ->withSuccess('New Car is added successfully.');
    }

    public function show(Car $car) 
    {
        return view('cars.show', [
            'car' => $car
        ]);
    }

    public function edit(Car $car)
    {
        return view('cars.edit', [
            'car' => $car
        ]);
    }

    public function update( UpdateCarRequest $request, $id) 
    {
        $Car = Car::find($id);

        if($request->has('carPhoto')){
            $carPhoto=$request['carPhoto'];
            $extension=strtolower($carPhoto->extension());
            $filename=time().rand(1,10000).".".$extension;
            $carPhoto->move("CarsPhotos",$filename);
            }
            // $Car->update($request['carPhoto']->$filename);
        // $Car->update($request->all());
        $carDetail = Car::where('id', $id)
        ->update([
            'name'=> $request->name,
            'model' => $request->model,
            'priceForDay' => $request->priceForDay,
            'description' => $request->description,
            'carPhoto' => $filename,
        ]);

        // Car::update([
        //     'name' => $request['name'],
        //     'model' => $request['model'],
        //     'priceForDay'=>$request['priceForDay'],
        //     'description'=>$request['description'],
        //     'carPhoto'=>$filename,
        // ]);

        return redirect()->route('cars.index')
                ->withSuccess('Car is updated successfully.');
    }


    public function destroy(Car $Car) 
    {
        $Car->delete();
        return redirect()->route('cars.index')
                ->withSuccess('Car is deleted successfully.');
    }
}
