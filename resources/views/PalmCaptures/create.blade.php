@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('captureStore')}}" method="post">
                @csrf
                <input type="hidden"
                       name="palmFarmerId"
                       id="palmFarmerId"
                       value="{{$palmFarmerId}}"
                >
                <div class="form-group">
                    <label for="tons">Toneladas</label>
                    <input type="text"
                           name="tons"
                           id="tons"
                           class="form-control"
                           placeholder="Toneladas"
                    >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
