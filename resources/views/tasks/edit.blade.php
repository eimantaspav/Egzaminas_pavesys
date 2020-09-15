@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informacijos atnaujinimas:</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="task_name" class="form-control" value="{{ $task->task_name }}">
                        </div>
                       
                        <div class="form-group">
                            <label for="">Projekto ID</label>
                            <input type="text" name="status_id" class="form-control" value="{{ $task->status_id }}">
                        </div>
                        <div class="form-group">
                            <label for="">Aprašymas</label>
                            
                            <textarea id="mce" name="task_description" class="form-control">{{ $task->task_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Atnaujinti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection