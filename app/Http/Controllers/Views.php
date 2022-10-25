<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Airlines;
use App\Models\Countries;
use Illuminate\Http\Request;

class Views extends Controller
{
    
    public function main_page(){
        return view('main_page');
    }

    public function airports(){
        $airports = Airport::all();

        return view('airports', ['airports' => $airports]);
    }

    public function airlines(){
        $airlines = Airlines::all();

        return view('airlines', ['airlines' => $airlines]);
    }

    public function countries(){
        $countries = Countries::all();

        return view('countries', ['countries' => $countries]);
    }

    public function add_airport(){
        $countries = Countries::all();
        return view('add_airport',['countries' => $countries]);
    }

    public function add_airlines(){
    return view('add_airlines');
    }

    public function add_countries(){
        return view('add_countries');
        }

    public function update_airline($id){

        $airline = Airlines::find($id);

        return view('update_airline', ['airline' => $airline]);
    }

    public function update_airport($id){

        $airport = Airport::find($id);
    
        return view('update_airport', ['airport' => $airport]);
    }
        
    public function update_countrie($id){

        $countrie = Countries::find($id);
    
        return view('update_countrie', ['countrie' => $countrie]);
    }

    public function add($id){

        $countrie = Countries::find($id);
    
        return view('update_countrie', ['countrie' => $countrie]);
    }
    


    public function test22(){
        return view('Test22');
    }
}