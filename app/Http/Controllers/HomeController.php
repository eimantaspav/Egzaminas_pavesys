<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use App\Models\status;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('tasks')
            ->join('statuses', 'statuses.id', '=', 'tasks.status_id')
            ->select('tasks.task_name', 'statuses.name', 'tasks.task_description', 'tasks.created_at', 'tasks.updated_at')
            ->orderBy('created_at')
            ->get();
        return view('home', compact('data'));
    }

    public function search()
    
    {
        $search_text = $_GET['query'];
        $data = task::where('task_name', 'LIKE', '%'.$search_text.'%')->get();
        return view('search', compact('data'));
    }
}
