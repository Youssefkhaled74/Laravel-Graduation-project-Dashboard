<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Http\Request\StoreAttractionRequest;   
use App\Http\Request\UpdateAttractionRequest;
use App\Http\Requests\UpdateAttractionRequest as RequestsUpdateAttractionRequest;

class AttractionController extends Controller
{
    //
    public function index()
    {
        return view('Attractions.index', [
            'attractions' => Attraction::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('Attractions.create');
    }

    public function store ( StoreAttractionRequest $request) 
    {
        Attraction::create($request->all());
        return redirect()->route('attractions.index')
                ->withSuccess('New Attraction is added successfully.');

        // if($request->has('AttractionPhoto')){
        //             $photo=$request['AttractionPhoto'];
        //             $extension=strtolower($photo->extension());
        //             $filename=time().rand(1,10000).".".$extension;
        //             $photo->move("public\AttractionsPhotos",$filename);
        //         }
    }

    public function show(Attraction $Attraction) 
    {
        return view('Attractions.show', [
            'Attraction' => $Attraction
        ]);
    }

    public function edit(Attraction $Attraction)
    {
        return view('Attractions.edit', [
            'Attraction' => $Attraction
        ]);
    }

    public function update( UpdateAttractionRequest $request, $id) 
    {
        $Attraction = Attraction::find($id);
        $Attraction->update($request->all());
        return redirect()->route('attractions.index')
                ->withSuccess('Attraction is updated successfully.');
    }


    public function destroy(Attraction $Attraction) 
    {
        $Attraction->delete();
        return redirect()->route('attractions.index')
                ->withSuccess('Attraction is deleted successfully.');
    }
}
