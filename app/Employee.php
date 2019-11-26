<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['fullName','code', 'dob', 'sex', 'phone', 'numberId', 'address','email', 'group_id'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
