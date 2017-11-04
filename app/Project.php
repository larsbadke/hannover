<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function times()
    {
        return $this->hasMany(Time::class);
    }
}
