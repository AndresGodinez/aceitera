@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Palmicultor</th>
                    <th>localidad</th>
                    <th>Municipio</th>
                    <th>Estado</th>
                    <th>Longitud</th>
                    <th>Latitud</th>
                    <th colspan="2">Acciones</th>
                </tr>
                @foreach($grounds as $ground)
                    <tr>
                        <td>{{$ground->id}}</td>
                        <td>{{$ground->palmFarmer->name}}</td>
                        <td>{{$ground->location}}</td>
                        <td>{{$ground->municipality->name}}</td>
                        <td>{{$ground->state->name}}</td>
                        <td>{{$ground->longitude}}</td>
                        <td>{{$ground->latitude}}</td>
                        <td>
                            <button class=" text-white btn btn-info">Detalles</button>
                        </td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
