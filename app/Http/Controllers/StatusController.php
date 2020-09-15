<?php

namespace App\Http\Controllers;

use App\Models\status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function index() {
        return view('statuses.index', ['statuses' => status::orderBy('name')->get()]);
    }
    public function create() {
        return view('statuses.create');
    }
    public function store(Request $request) {
        $status = new status();

        $status->fill($request->all());
        $status->save();
        return redirect()->route('statuses.index');
    }
 
    public function edit(status $status){
        return view('statuses.edit', ['status' => $status]);
    }
 
    public function update(Request $request, status $status){
        $status->fill($request->all());
        $status->save();
        return redirect()->route('statuses.index');
    }
 
     public function destroy(status $status){
         $status->delete();
         return redirect()->route('statuses.index');
     }
}