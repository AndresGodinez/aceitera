@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('groundStore')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="location">Localidad</label>
                    <input type="text"
                           name="location"
                           id="location"
                           class="form-control"
                           placeholder="Localidad"
                    >
                </div>
                <div class="form-group">
                    <label for="state_id">Estado</label>
                    <input type="text"
                           name="state_id"
                           id="state_id"
                           class="form-control"
                           placeholder="RFC"
                    >
                </div>
                <div class="form-group">
                    <label for="municipality_id">Municipio</label>
                    <input type="text"
                           name="municipality_id"
                           id="municipality_id"
                           class="form-control"
                           placeholder="RFC"
                    >
                </div>
                <div class="form-group">
                    <label for="latitude">Latitud</label>
                    <input type="text"
                           name="latitude"
                           id="latitude"
                           class="form-control"
                           placeholder="Latitud"
                    >
                </div>
                <div class="form-group">
                    <label for="longitude">Longitud</label>
                    <input type="text"
                           name="longitude"
                           id="longitude"
                           class="form-control"
                           placeholder="Longitud"
                    >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
