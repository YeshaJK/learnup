<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseChapter extends Model
{
    use HasFactory;
    protected $table = 'course_chapter';

    protected $fillable = ['id','course_id','chapter_title','chapter_video','num_of_video','num_of_assignment','created_at','updated_at'];

    public function course(){
        return $this->hasMany(Course::class, 'id');
    }
}
