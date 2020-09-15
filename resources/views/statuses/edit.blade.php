@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informacijos atnaujinimas:</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('statuses.update', $status->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="name" class="form-control" value="{{ $status->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Atnaujinti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection