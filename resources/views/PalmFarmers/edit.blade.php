@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('palmFarmerStore')}}" method="post">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control"
                           placeholder="Nombre"
                           value="{{ $palmFarmer->name }}"
                    >
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input type="text"
                           name="rfc"
                           id="rfc"
                           class="form-control"
                           placeholder="RFC"
                           value="{{ $palmFarmer->rfc }}"

                    >
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text"
                           name="address"
                           id="address"
                           class="form-control"
                           placeholder="Dirección"
                           value="{{ $palmFarmer->address }}"

                    >
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text"
                           name="phone"
                           id="phone"
                           class="form-control"
                           placeholder="Teléfono"
                           value="{{ $palmFarmer->phone }}"
                    >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
