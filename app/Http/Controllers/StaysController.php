<?php

namespace App\Http\Controllers;

use App\Models\Stay;
use App\Http\Request\StoreStayRequest;
use App\Http\Request\UpdateStayRequest;
use Illuminate\Http\Request;

class StaysController extends Controller
{
    //
    public function index()
    {
        return view('Stays.index', [
            'stays' => Stay::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('Stays.create');
    }

    public function store ( StoreStayRequest $request) 
    {
        Stay::create($request->all());
        return redirect()->route('stays.index')
                ->withSuccess('New stay is added successfully.');

        // if($request->has('stayPhoto')){
        //             $photo=$request['stayPhoto'];
        //             $extension=strtolower($photo->extension());
        //             $filename=time().rand(1,10000).".".$extension;
        //             $photo->move("staysPhotos",$filename);
        //         }
    }

    public function show(stay $stay) 
    {
        return view('Stays.show', [
            'stay' => $stay
        ]);
    }

    public function edit(stay $stay)
    {
        return view('stays.edit', [
            'stay' => $stay
        ]);
    }

    public function update( UpdateStayRequest $request, $id) 
    {
        $stay = Stay::find($id);
        $stay->update($request->all());
        return redirect()->route('stays.index')
                ->withSuccess('stay is updated successfully.');
    }


    public function destroy(stay $stay) 
    {
        $stay->delete();
        return redirect()->route('stays.index')
                ->withSuccess('stay is deleted successfully.');
    }
}
