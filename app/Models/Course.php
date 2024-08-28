<?php

namespace App\Models;

use App\Http\Controllers\CoursechapterController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instructor;
use App\Models\Language;
use App\Models\CourseChapter;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';

    protected $fillable = ['id','course_title','course_subtitle','course_brief','course_about','course_image','instructor_id','video','subcategory_id','category_id','course_fee','language_id','created_at','updated_at'];

    public function instructor(){
        return $this->belongsTo('instructor');
    }
    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function course_chapter(){
        return $this->belongsTo(CourseChapter::class, 'course_id');
    }
}
