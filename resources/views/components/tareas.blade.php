<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tarea</th>
        <th scope="col">Usuario</th>
        <th scope="col">Realizada</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <th scope="row">{{ $task->id }}</th>
            <td>{{ $task->title }}</td>
            <td>{{ $task->user->name }}</td>
            <td>{{ $task->done == 1 ? "Si" : "No" }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
