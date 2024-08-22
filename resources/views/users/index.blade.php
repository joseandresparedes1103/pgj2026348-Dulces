@extends('adminlte::page')

@section('content')
    <div class="container" x-data="pagination({{ $currentPage }}, {{ $lastPage }})">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <h1>Lista de Usuarios</h1>

        <!-- Green Bar -->
        <div class="mb-3" style="border-top: 10px solid green;"></div>

        <div class="mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Crear Usuario
            </a>
        </div>

        <form action="{{ route('users.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <select name="rol" class="form-control">
                    <option value="">Buscar por rol</option>
                    @foreach($roles as $rol)
                        <option value="{{ $rol->name }}" {{ request()->get('rol') == $rol->name ? 'selected' : '' }}>
                            {{ $rol->name }}
                        </option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </div>
            </div>
        </form>

        @if($users->isEmpty())
            <p>No se encontraron usuarios.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-hover shadow-lg">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->roles->pluck('name')->first() }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Paginación con Alpine.js -->
            <ul class="pagination justify-content-center">
                <li class="page-item" :class="{ disabled: currentPage == 1 }">
                    <a class="page-link" href="#" aria-label="Previous" @click.prevent="changePage(currentPage - 1)">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $lastPage; $i++)
                    <li class="page-item" :class="{ active: currentPage == {{ $i }} }">
                        <a class="page-link" href="#" @click.prevent="changePage({{ $i }})">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item" :class="{ disabled: currentPage == {{ $lastPage }} }">
                    <a class="page-link" href="#" aria-label="Next" @click.prevent="changePage(currentPage + 1)">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        @endif
    </div>

    <!-- Importar Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        function pagination(currentPage, lastPage) {
            return {
                currentPage,
                lastPage,
                changePage(page) {
                    if (page >= 1 && page <= this.lastPage) {
                        const url = new URL(window.location.href);
                        url.searchParams.set('page', page);
                        window.location.href = url.toString();
                    }
                }
            }
        }
    </script>

    <style>
        .table {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        .btn-group .btn {
            transition: transform 0.3s ease;
        }

        .btn-group .btn:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
