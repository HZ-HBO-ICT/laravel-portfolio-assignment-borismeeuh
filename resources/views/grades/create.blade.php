@extends('layout')

@section('content')

    <div id="wrapper" style="">
        <div id="page" class="articleContainer">
            <h1>New Grade</h1>
            <h3>Fields with an * are required</h3>

            <form method="post", action="/grade", class="form">
                @csrf

                <div class="field">
                    <label class="title">* Course Name - Alphabetic and Numeric characters (No Spaces)</label><br>
                    <div class="control">
                        <input type="text"
                               id="course_name"
                               name="course_name"
                               class="input @error('course_name') inputError @enderror"
                               value="{{ old('course_name') }}"
                               required><br>

                        @if ($errors->has('course_name'))
                            <p style="color: red"><strong>{{ $errors->first('course_name') }}</strong></p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label for="test type">* Test Type - Alphabetic characters only</label><br>
                    <div class="control">
                        <input type="text"
                               id="test_type"
                               name="test_type"
                               class="input @error('test_type') inputError @enderror"
                               value="{{ old('test_type') }}"
                               required><br>

                        @if ($errors->has('test_type'))
                            <p style="color: red"><strong>{{ $errors->first('test_type') }}</strong></p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="title">* Best Grade - Must be a number between 1 - 10</label><br>
                    <div class="control">
                        <input type="text"
                               id="best_grade"
                               name="best_grade"
                               class="input @error('best_grade') inputError @enderror"
                               value="{{ old('best_grade') }}"
                               required><br>

                        @if ($errors->has('best_grade'))
                            <p style="color: red"><strong>{{ $errors->first('best_grade') }}</strong></p>
                        @endif
                    </div>
                </div>

                <input type="submit" value="Submit" class="button">
            </form>
        </div>
    </div>
@endsection





