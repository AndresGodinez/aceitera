@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nombre Palmicultor</th>
                    <th>Toneladas</th>
                    <th>Fecha Captura</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th colspan="2">Acciones</th>
                </tr>
                @foreach($captures as $capture)
                    <tr>
                        <td>{{$capture->id}}</td>
                        <td>{{$capture->ground->palmFarmer->name}}</td>
                        <td>{{$capture->tons}}</td>
                        <td>{{$capture->created_at}}</td>
                        <td>{{$capture->ground->latitude}}</td>
                        <td>{{$capture->ground->longitude}}</td>
                        <td>
                            <a

                            >Detalles</a>
                        </td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $captures->render() }}
        </div>
    </div>
@endsection
