<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles=new Vehicle();
        return view('vehicles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle=new Vehicle();
        $vehicle->name=$request->vehicleName;
        $vehicle->chasis=$request->chasis;
        $vehicle->vin=$request->vin;
        $vehicle->rego=$request->rego;
        $vehicle->rego_type=$request->regoType;
        $vehicle->rego_due=substr($request->regoDue,0,10);
        $vehicle->rego_club=$request->regoClub;
        $vehicle->ins_company=$request->insCompany;
        $vehicle->ins_policy_no=$request->insPolicyNo;
        $vehicle->ins_date_due=substr($request->insDateDue,0,10);
        $vehicle->engine_oil=$request->engOil;
        $vehicle->gb_oil=$request->gearOil;
        $vehicle->diff_oil=$request->diffOil;
        $vehicle->brake_fluid=$request->brakeFluid;
        $vehicle->radiator=$request->radiator;
        $vehicle->shock_oil=$request->shockOil;
        $vehicle->steering=$request->steering;
        $vehicle->one_shot_lube=$request->lube;
        $vehicle->cold_tyre_pressure=$request->coldPressure;
        $vehicle->description=$request->description;
        $vehicle->oil_filter=$request->oilFilter;
        $vehicle->fuel_filter=$request->fuelFilter;
        $vehicle->front_brake=$request->brakesFront;
        $vehicle->rear_brake=$request->brakesRear;
        $vehicle->headlight=$request->headLight;
        $vehicle->taillight=$request->tailLight;
        $vehicle->brakelight=$request->brakeLight;
        $vehicle->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $vehicle=Vehicle::find($vehicle)->first();
        return view('vehicles.show')->withVehicle($vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle=Vehicle::find($id);
        return view('vehicles.edit')->withVehicle($vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle=Vehicle::find($id);
        $vehicle->name=$request->vehicleName;
        $vehicle->chasis=$request->chasis;
        $vehicle->vin=$request->vin;
        $vehicle->rego=$request->rego;
        $vehicle->rego_type=$request->regoType;
        $vehicle->rego_due=substr($request->regoDue,0,10);
        $vehicle->rego_club=$request->regoClub;
        $vehicle->ins_company=$request->insCompany;
        $vehicle->ins_policy_no=$request->insPolicyNo;
        $vehicle->ins_date_due=substr($request->insDateDue,0,10);
        $vehicle->engine_oil=$request->engOil;
        $vehicle->gb_oil=$request->gearOil;
        $vehicle->diff_oil=$request->diffOil;
        $vehicle->brake_fluid=$request->brakeFluid;
        $vehicle->radiator=$request->radiator;
        $vehicle->shock_oil=$request->shockOil;
        $vehicle->steering=$request->steering;
        $vehicle->one_shot_lube=$request->lube;
        $vehicle->cold_tyre_pressure=$request->coldPressure;
        $vehicle->description=$request->description;
        $vehicle->oil_filter=$request->oilFilter;
        $vehicle->fuel_filter=$request->fuelFilter;
        $vehicle->front_brake=$request->brakesFront;
        $vehicle->rear_brake=$request->brakesRear;
        $vehicle->headlight=$request->headLight;
        $vehicle->taillight=$request->tailLight;
        $vehicle->brakelight=$request->brakeLight;
        $vehicle->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle=Vehicle::find($id);
        $vehicle->delete();
    }
}
