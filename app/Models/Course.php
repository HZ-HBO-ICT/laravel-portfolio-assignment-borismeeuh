<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function grades(){
        return $this->hasMany(Grade::class);
    }

    public function assignCredits(){
        $gradesArray = $this->grades;
        $insufficient = 0;

        foreach ($gradesArray as $grade){
            if($grade->best_grade < $grade->lowest_passing_grade){
                $insufficient++;
            }
        }

        if($insufficient === 0){
            $this->passed_at = now();
            $this->save();
        }
    }
}
