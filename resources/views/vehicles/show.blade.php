@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h4>Vehicle Info</h4>
            <div class="card" style="color: #000;">
                <table class="table table-striped ">
                    <tr>
                        <td width="50%">Chasis</td>
                        <td>{{$vehicle->name}}</td>
                    </tr>
                    <tr>
                        <td>Chasis</td>
                        <td>{{$vehicle->chasis}}</td>
                    </tr>
                    <tr>
                        <td>VIN</td>
                        <td>{{$vehicle->vin}}</td>
                    </tr>
                    <tr>
                        <td>Rego</td>
                        <td>{{$vehicle->rego}}</td>
                    </tr><tr>
                        <td>Rego Type</td>
                        <td>{{$vehicle->rego_type}}</td>
                    </tr><tr>
                        <td>Rego Due</td>
                        <td>{{$vehicle->rego_due}}</td>
                    </tr><tr>
                        <td>Rego Club</td>
                        <td>{{$vehicle->rego_club}}</td>
                    </tr><tr>
                        <td>Insurance Company</td>
                        <td>{{$vehicle->ins_company}}</td>
                    </tr><tr>
                        <td>Insurance Policy No</td>
                        <td>{{$vehicle->ins_policy_no}}</td>
                    </tr><tr>
                        <td>Insurace Date Due</td>
                        <td>{{$vehicle->ins_date_due}}</td>
                    </tr><tr>
                        <td>Description</td>
                        <td>{{$vehicle->description}}</td>
                    </tr>
                </table>
            </div>
            <h4 style="margin-top: 10px ">Vehicle data</h4>
            <div class="card" style="color: #000;">
                <table class="table table-striped ">
                    <tr>
                        <td  width="50%">Engine Oil</td>
                        <td>{{$vehicle->engine_oil}}</td>
                    </tr>
                    <tr>
                        <td>Gear Box Oil</td>
                        <td>{{$vehicle->gb_oil}}</td>
                    </tr>
                    <tr>
                        <td>Diff Oil</td>
                        <td>{{$vehicle->diff_oil}}</td>
                    </tr>
                    <tr>
                        <td>Brake Fluid</td>
                        <td>{{$vehicle->brake_fluid}}</td>
                    </tr><tr>
                        <td>Radiator</td>
                        <td>{{$vehicle->radiator}}</td>
                    </tr><tr>
                        <td>Shocker Oil</td>
                        <td>{{$vehicle->shock_oil}}</td>
                    </tr><tr>
                        <td>Steering</td>
                        <td>{{$vehicle->steering}}</td>
                    </tr><tr>
                        <td>One Shot Lube</td>
                        <td>{{$vehicle->one_shot_lube}}</td>
                    </tr><tr>
                        <td>Cold Tyre Pressure</td>
                        <td>{{$vehicle->cold_tyre_pressure}}</td>
                    </tr>
                </table>
            </div>
            <h4 style="margin-top: 10px ">Parts</h4>
            <div class="card" style="color: #000;">
                <table class="table table-striped ">
                    <tr>
                        <td  width="50%">Oil Filter</td>
                        <td>{{$vehicle->oil_filter}}</td>
                    </tr>
                    <tr>
                        <td>Fuel Filter</td>
                        <td>{{$vehicle->fuel_filter}}</td>
                    </tr>
                    <tr>
                        <td>Front brake</td>
                        <td>{{$vehicle->front_brake}}</td>
                    </tr>
                    <tr>
                        <td>Rear brake</td>
                        <td>{{$vehicle->rear_brake}}</td>
                    </tr><tr>
                        <td>Head Light</td>
                        <td>{{$vehicle->headlight}}</td>
                    </tr><tr>
                        <td>Tail Light</td>
                        <td>{{$vehicle->taillight}}</td>
                    </tr><tr>
                        <td>Brake Light</td>
                        <td>{{$vehicle->brakelight}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
