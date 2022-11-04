<?php

namespace App\Http\Controllers;

use App\Models\Airport as ModelsAirport;
use Illuminate\Http\Request;

class Airport extends Controller
{
    
    public function create(Request $request){
        try {
     /*       $request->validate([
                'name'      => 'required|string|min:1|max:30',
                'airline'   => 'string',
                'country'   => 'required|string|min:1|max:25',
                'location'  => 'required|string|min:1|',
            ]); */
    
            $airport = ModelsAirport::create([
                'name'      => $request->name,
                'airlines_id'   => $request->airlines_id,
                'countries_id'   => $request->countries_id,
                'location'  => $request->location 
            ]);
    
            $airport->save();
    
            return redirect('/airports');
    
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function delete($id)
    {
        $Airport = ModelsAirport::find($id);
        $Airport->delete();

        return redirect('/airports');
    }

    public function edit ($id,Request $request){
        $request->validate([
            'name'      => 'required|string|min:1|max:30',
            'countries_id'   => 'required|string|min:1|max:25',
            'location'  => 'required|string|min:1|max:30',
            'airlines_id'  => 'required|string|min:1|max:25',
        ]);

        $Airport = ModelsAirport::find($id);

        $Airport->name = $request->name;
        $Airport->country = $request->country;
        $Airport->location = $request->location;
        $Airport->airlines = $request->airlines;

        $Airport->save();

        return redirect('/airports');
    }

}
