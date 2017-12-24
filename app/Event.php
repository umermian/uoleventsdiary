<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    protected $fillable = ['image','name', 'date_time','venue','phone' , 'u_id' , 'o_id'];

    // public function user(){
    //     return $this->belongsTo(User::class); // ????
    // }
}
