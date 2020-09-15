@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Užduotis</th>
                <th>Statusas</th>
                <th>Aprašymas</th>
                <th>Sukurta</th>
                <th>Atnaujinta</th>



            </tr>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->task_name }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{!! $row->task_description !!}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->updated_at}}</td>



                </tr>
            @endforeach

        </table>

        <form action="/search" type="get" method="{{ url('/search') }}">
        <input name="query" type="search">
        <button type="submit">Ieškoti</button>
    </form>
       
    </div>


@endsection
