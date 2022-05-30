<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Driver;


class DriversController extends Controller
{
    public function download(){
        
        $decoded = json_decode($collection = Http::get('http://ergast.com/api/f1/drivers.json?=123'));
        $drivers = $decoded->MRData->DriverTable->Drivers;

        foreach($drivers as $driver){
            $driverDB = Driver::where('driverId', $driver->driverId)->first();
            if($driverDB === null){
                $driverDB = new Driver;
                $driverDB->driverId = $driver->driverId;
                $driverDB->url = $driver->url;
                $driverDB->givenName = $driver->givenName;
                $driverDB->familyName = $driver->familyName;
                $driverDB->dateOfBirth = $driver->dateOfBirth;
                $driverDB->nationality = $driver->nationality;
                $driverDB->save();
            }
        }

        $allDrivers = Driver::all();

        return view('/drivers.index', compact('decoded', 'allDrivers'));
        
    }

    public function show($id){

        $driver = Driver::where('driverId', $id)->first();

        return view('/drivers.show', compact('driver'));
    }

}
