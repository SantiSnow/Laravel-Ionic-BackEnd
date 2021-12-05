<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Area</th>
        <th scope="col">Fecha de visita</th>
        <th scope="col">Encargado</th>
    </tr>
    </thead>
    <tbody>
    @foreach($informes as $informe)
        <tr>
            <th scope="row">{{ $informe->id }}</th>
            <td>{{ $informe->area }}</td>
            <td>{{ $informe->visited }}</td>
            <td>{{ $informe->user->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
