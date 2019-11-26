<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
