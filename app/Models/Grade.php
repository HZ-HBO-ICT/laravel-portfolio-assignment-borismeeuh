<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course(){
        $this->belongsTo(Course::class);
    }

    public function addResult($grade){
        $course = $this->course;

        Course::assignCredits;
        if($this->best_grade >= $grade){
            return;
        }

        $this->best_grade = $grade;

        $course->assignCredits;
    }
}
