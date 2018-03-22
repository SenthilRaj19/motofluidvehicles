@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Add Vehicle</h4>
            <div class="card" style="color: #000;">
                <edit-vehicle vehicle-id="{{$vehicle->id}}"></edit-vehicle>
            </div>
        </div>
    </div>
@endsection
