@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white">Configuración</div>

                    <div class="card-body">
                        <form action="{{ route('configuracion.actualizar') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="modo">Seleccionar modo:</label>
                                <select name="modo" id="modo" class="form-control">
                                    <option value="false" {{ !$modoOscuro ? 'selected' : '' }}>Modo Claro</option>
                                    <option value="true" {{ $modoOscuro ? 'selected' : '' }}>Modo Oscuro</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
