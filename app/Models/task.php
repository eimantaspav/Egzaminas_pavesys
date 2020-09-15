<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public $fillable = ['task_name', 'task_description', 'status_id', 'completed_date'];

    public function statuses()
    {
        return $this->belongsTo('App\status');
    }
}

