<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function createindex(){
        return view('places.create');
    }

    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $place = new Place();
        $place->name = request('name');
        $place->description = request('description');
        $place->repair = false;
        $place->work = false; 
        $place->save();

        // return response()->json([
        //     'place' => $place
        // ], 201);
        return redirect('/places');

    }

    public function delete($id){
        Place::findOrFail($id)->delete();
        return redirect('/places');
    }

    public function updateplace($id){
        $places= Place::findOrFail($id);
        return view('places/update')->with('places', $places);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'repair'=>'required',
            'work'=>'required'
        ]);

        $place = Place::findOrFail($id);
        $place->name = request('name');
        $place->description = request('description');
        $place->repair = request('repair');
        $place->work = request('work');
        $place->save();

        // return response()->json([
        //     'place' => $place
        // ], 201);
        return redirect('/places');
    }


    public function show(){
        $places=Place::take(PHP_INT_MAX)->get();
        // return response()->json(['places'=>$places]);
        return view('places/show')->with('places',$places);
    }
}
