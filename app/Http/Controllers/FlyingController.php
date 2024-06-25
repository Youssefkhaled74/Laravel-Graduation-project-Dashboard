<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreFlyRequest;
use App\Http\Request\UpdateFlyRequest;
use App\Models\Fly;
use Illuminate\Http\Request;

class FlyingController extends Controller
{
    public function index()
    {
        return view('Flys.index', [
            'flys' => Fly::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('Flys.create');
    }

    public function store ( StoreFlyRequest $request) 
    {
        Fly::create($request->all());
        return redirect()->route('flys.index')
                ->withSuccess('New fly is added successfully.');

        if($request->has('photo')){
                    $photo=$request['photo'];
                    $extension=strtolower($photo->extension());
                    $filename=time().rand(1,10000).".".$extension;
                    $photo->move("FlysPhotos",$filename);
                }
    }

    public function show(fly $fly) 
    {
        return view('flys.show', [
            'fly' => $fly
        ]);
    }

    public function edit(fly $fly)
    {
        return view('flys.edit', [
            'fly' => $fly
        ]);
    }

    public function update( UpdateFlyRequest $request, $id) 
    {
        $fly = fly::find($id);
        $fly->update($request->all());
        return redirect()->route('flys.index')
                ->withSuccess('fly is updated successfully.');
    }


    public function destroy(fly $fly) 
    {
        $fly->delete();
        return redirect()->route('flys.index')
                ->withSuccess('fly is deleted successfully.');
    }
}
