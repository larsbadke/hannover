<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function project()
    {
        $this->belongsTo(Project::class);
    }
}
