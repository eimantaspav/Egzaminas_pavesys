<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public $fillable = ['name'];

    public function tasks() {
        return $this->hasMany('App\task');
    }

}
