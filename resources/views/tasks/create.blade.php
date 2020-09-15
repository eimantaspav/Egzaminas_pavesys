@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Nauja užduotis:</div>
               <div class="card-body">
                   <form action="{{ route('tasks.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Užduoties pavadinimas: </label>
                           <input type="text" name="task_name" class="form-control">
                       </div>
                       
                       <div class="form-group">
                        <label>Statuso ID: </label>
                        <input type="text" name="status_id" class="form-control">
                    </div>
                    <div class="form-group">
                           <label>Užduoties aprašymas: </label>
                           <textarea type="textarea" id="mce" name="task_description" class="form-control" ></textarea>
                       </div>
                      
                       <button type="submit" class="btn btn-primary">Pridėti</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection