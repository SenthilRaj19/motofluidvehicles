@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Trip history for {{$vehicle->name}}</h4>
            <div class="" style="color: #000;">
                <trip vehicle-id="{{$vehicle->id}}" ></trip>
            </div>
        </div>
    </div>
@endsection
