@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Užduoties ID</th>
                <th>Pavadinimas</th>
                <th>Aprašymas</th>
                <th>Statuso ID</th>
                <th>Pradėta</th>
                <th>Atnaujinta</th>
                <th>Veiksmai</th>






            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->task_name}}</td>
                    <td>{!! $task->task_description!!}</td>
                    <td>{{ $task->status_id}}</td>
                    <td>{{ $task->created_at}}</td>
                    <td>{{ $task->updated_at}}</td>
                    
                    <td>
                        <form action={{ route('tasks.destroy', $task->id) }} method="POST">
                            <a class="btn btn-success" href={{ route('tasks.edit', $task->id) }}>Redaguoti</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" value="Trinti" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <div>
            <a href="{{ route('tasks.create') }}" class="btn btn-success">Pridėti</a>
        </div>
    </div>


@endsection
