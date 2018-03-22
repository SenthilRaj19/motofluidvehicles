@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Service history for {{$vehicle->name}}</h4>
            <div class="" style="color: #000;">
                <service vehicle-id="{{$vehicle->id}}" ></service>
            </div>
        </div>
    </div>
@endsection
