<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        return view('grades.index', [
            'grades' => Grade::latest()->get()
        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('grades.create');
    }

    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));
        return redirect(route('grade.index'));
    }

    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    public function update(Grade $grade, Request $request)
    {
        $grade->update($this->validateGrade($request));
        return redirect(route('grade.index', $grade));
    }

    public function destroy(Grade $grade)
    {
        Grade::findOrFail($grade->id)->destroy($grade->id);
        return redirect(route('grade.index'));
    }

    /**
     * @return array
     */
    public function validateGrade($request): array
    {
        return $request->validate([
            'course_name' => 'required|alpha_num|unique:grades|max:255',
            'test_type' => 'required|alpha|max:255',
            'best_grade' => 'required|numeric|min:0|max:10'
        ]);
    }
}
