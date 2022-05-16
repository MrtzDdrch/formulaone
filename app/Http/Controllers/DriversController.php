<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DriversController extends Controller
{
    public function index(){
        $decoded = json_decode($collection = Http::get('http://ergast.com/api/f1/drivers.json?=123'));
        $drivers = $decoded->MRData->DriverTable->Drivers;
        dd($drivers);


        return view('/drivers.index', ['collection' => $collection]);



        // $decoded = json_decode($collection);
        // return view('/drivers.index', compact('decoded'));

        
    }

    // public function index(){
    //     return view('/drivers.index');
    // }
}
