<?php

namespace App\Http\Controllers;

use App\service;
use App\Trip;
use App\Vehicle;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function listVehicles()
    {
        $vehicles=Vehicle::all();
        return response()->json([
            'vehicles' => $vehicles,
        ], 200);
    }
    public function vehicleDetails($id)
    {
        $vehicle=Vehicle::find($id);
        return response()->json([
            'vehicle' => $vehicle,
        ], 200);
    }

    public function serviceDetails($id)
    {
        $services=service::where('id_vehicle','=',$id)->get();
        return response()->json([
            'services' => $services,
        ], 200);
    }

    public function tripDetails($id)
    {
        $trips=Trip::where('id_vehicle','=',$id)->get();
        return response()->json([
            'services' => $trips,
        ], 200);
    }
}
