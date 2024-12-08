@extends('layout')

@section('content')

    <h2 style="text-align: center">Grades</h2>

    <form class="secondaryForm", action="grade/create", method="get">
        <button class="button">Add Grade</button>
    </form>

    <ul>
        @foreach($grades as $grade)
            <li>
                {{ $grade->course_name }} <br>
                {{ $grade->test_type }} <br>
                {{ $grade->lowest_passing_grade }}<br>
                {{ $grade->best_grade }} <br>
                {{ $grade->passed_at }} <br>
                <form method="get", action="grade/{{ $grade->id }}/edit">
                    <input class="button" type="submit" value="Edit Grade">
                </form>
                <p>________________________________________________________</p>
            </li>
        @endforeach
    </ul>
@endsection
