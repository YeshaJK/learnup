<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'language';

    protected $fillable = ['id','language_name','created_at','updated_at'];

    public function instructor(){
        return $this->belongsTo('instructor');
    }
    public function course(){
        return $this->hasMany(Course::class,'language_id');
    }
}
