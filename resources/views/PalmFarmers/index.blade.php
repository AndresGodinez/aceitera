@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>RFC</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th rowspan="2">Acciones</th>
                </tr>
                @foreach($palmFarmers as $palmFarmer)
                    <tr>
                        <td>$palmFarmer->id</td>
                        <td>$palmFarmer->name</td>
                        <td>$palmFarmer->address</td>
                        <td>$palmFarmer->phone</td>
                        <td>
                            <button class="btn btn-info">Detalles</button>
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
