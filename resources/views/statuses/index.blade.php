@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Užduoties ID</th>
                <th>Pavadinimas</th>
                <th style="width: 25%">Veiksmai</th>
            </tr>
            @foreach ($statuses as $status)
                <tr>
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->name}}</td>
                    <td>
                        <form action={{ route('statuses.destroy', $status->id) }} method="POST">
                            <a class="btn btn-success" href={{ route('statuses.edit', $status->id) }}>Redaguoti</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" value="Trinti" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <div>
            <a href="{{ route('statuses.create') }}" class="btn btn-success">Pridėti</a>
        </div>
    </div>


@endsection
