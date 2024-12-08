<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function returnDashboardPage()
    {
        $course = Course::all();
        return view('dashboard', [
            'courses' => $course
        ]);
    }
}
