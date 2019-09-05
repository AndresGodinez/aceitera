@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$palmFarmer->name}}</h5>
                    <p class="card-text">{{$palmFarmer->rfc}}</p>
                    <p class="card-text">{{$palmFarmer->address}}</p>
                    <p class="card-text">{{$palmFarmer->phone}}</p>
                </div>
            </div>
        </div>
    </div>

    @if($palmFarmer->grounds)

    <div class="container mt-4">
        <div class="row">
            <h3>Terrenos registrados</h3>
            <table class="table table-striped">
                <tr>
                    <th>id</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Localidad</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                </tr>
                @foreach($palmFarmer->grounds as $ground)
                    <tr>
                        <td>{{$ground->id}}</td>
                        <td>{{$ground->state->name}}</td>
                        <td>{{$ground->municipality->name}}</td>
                        <td>{{$ground->location}}</td>
                        <td>{{$ground->latitude}}</td>
                        <td>{{$ground->longitude}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @endif
@endsection
