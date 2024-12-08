@extends('layout')

@section('content')

    <div id="wrapper" style="">
        <div id="page" class="articleContainer">
            <h1>Edit Grade</h1>

            <form method="post", action="/grade/{{ $grade->id }}", class="form">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="title">Course Name</label><br>
                    <div class="control">
                        <input type="text"
                               id="course_name"
                               name="course_name"
                               class="input @error('course_name') inputError @enderror"
                               value="{{ $grade->course_name }}"
                               required><br>

                        @if ($errors->has('course_name'))
                            <p style="color: red"><strong>{{ $errors->first('course_name') }}</strong></p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label for="test type">Test Type</label><br>
                    <div class="control">
                        <input type="text"
                               id="test_type"
                               name="test_type"
                               class="input @error('test_type') inputError @enderror"
                               value="{{ $grade->test_type }}"
                               required><br>

                        @if ($errors->has('test_type'))
                            <p style="color: red"><strong>{{ $errors->first('test_type') }}</strong></p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="title">Best Grade</label><br>
                    <div class="control">
                        <input type="text"
                               id="best_grade"
                               name="best_grade"
                               class="input @error('best_grade') inputError @enderror"
                               value="{{ $grade->best_grade}}"
                               required><br>

                        @if ($errors->has('best_grade'))
                            <p style="color: red"><strong>{{ $errors->first('best_grade') }}</strong></p>
                        @endif
                    </div>
                </div>

                <input type="submit" value="Submit" class="button">
            </form>

            <form method="POST" action="/grade/{{ $grade->id }}" class="form">
                @csrf
                @method('DELETE')
                <button type="submit" class="button">Delete</button>
            </form>
        </div>
    </div>
@endsection





