<?php

namespace App\Http\Controllers;

use App\Models\Airlines as ModelsAirlines;
use Illuminate\Http\Request;

class Airlines extends Controller
{
    
    public function create(Request $request){
        $request->validate([
            'name'      => 'required|string|min:8|max:30',
            'country'   => 'required|string',
        ]);

        $Airlines = ModelsAirlines::create([
            'name'      => $request->name,
            'countries_id'   => $request->country,
        ]);

        $Airlines->save();

        return redirect('/airlines');
    }

    public function delete($id)
    {
        $Airlines = ModelsAirlines::find($id);
        $Airlines->delete();

        return redirect('/airlines');
    }

    public function edit ($id,Request $request){
        $request->validate([
            'name'      => 'required|string|min:8|max:30',
            'country'   => 'required|string|min:6|max:25',
        ]);

        $Airlines = ModelsAirlines::find($id);

        $Airlines->name = $request->name;
        $Airlines->countries_id = $request->country;

        $Airlines->save();

        return redirect('/airlines');
    }
}