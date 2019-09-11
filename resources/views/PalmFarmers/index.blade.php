@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('palmFarmerIndex')}}">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control"
                           placeholder="Nombre"
                           id="name"
                           name="name">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>RFC</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th colspan="2">Acciones</th>
                </tr>
                @foreach($palmFarmers as $palmFarmer)
                    <tr>
                        <td>{{$palmFarmer->id}}</td>
                        <td>{{$palmFarmer->name}}</td>
                        <td>{{$palmFarmer->rfc}}</td>
                        <td>{{$palmFarmer->address}}</td>
                        <td>{{$palmFarmer->phone}}</td>
                        <td>
                            <a
                                href="{{ route('palmFarmerShow', ['id'=> $palmFarmer->id]) }}"
                                class="btn btn-primary"
                            >Detalles</a>
                        </td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $palmFarmers->render() }}
        </div>
    </div>
@endsection
