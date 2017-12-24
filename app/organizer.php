<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organizer extends Model
{
    public $timestamps = false;
    protected $fillable = ['id' , 'name','image'];
}
