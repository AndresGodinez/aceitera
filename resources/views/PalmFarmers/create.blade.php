@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('palmFarmerStore')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control"
                           placeholder="Nombre"
                    >
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input type="text"
                           name="rfc"
                           id="rfc"
                           class="form-control"
                           placeholder="RFC"
                    >
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text"
                           name="address"
                           id="address"
                           class="form-control"
                           placeholder="Dirección"
                    >
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text"
                           name="phone"
                           id="phone"
                           class="form-control"
                           placeholder="Teléfono"
                    >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
