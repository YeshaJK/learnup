<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructor';

    protected $fillable = ['id','name','email','date','country','phone_number','qualification','experience','created_at','updated_at'];

    public function instructor(){
        return $this->hasMany('App\Comment');
    }
    public function course(){
        return $this->belongsToMany('course');
    }
}
