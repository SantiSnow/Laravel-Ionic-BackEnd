<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tablas del sistema
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3 href="">Usuarios</h3>
                    @include('components.usuarios')
                <hr>
                <br>
                <h3 href="">Tareas</h3>
                    @include('components.tareas')
                <hr>
                <br>
                <h3 href="">Informes</h3>
                    @include('components.informes')

                <hr>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
