<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <form action="{{ url('/create_task') }}" method="post">
                    @csrf
                    <h3>Ingresar nueva tarea</h3>
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" name="title" id="" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <select name="user" class="form-select">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
            <div class="col-6 mt-5">
                <form action="" method="post">
                    @csrf
                    <h3>Ingresar nuevo informe</h3>

                    <div class="mb-3">
                        <label for="cargo" class="form-label">Posición</label>
                        <select name="cargo" class="form-select">
                            <option>Encargado</option>
                            <option>Supervisor</option>
                            <option>Lider de Proyecto</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cargo" class="form-label">Departamento</label>
                        <select name="cargo" class="form-select">
                            <option>Diseño</option>
                            <option>Desarrollo</option>
                            <option>Infraestructura</option>
                            <option>Marketing</option>
                            <option>Testing</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <select name="user" class="form-select">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="observacion" class="form-label">Observaciones</label>
                        <textarea class="form-control" name="observacion" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Cargar Informe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
