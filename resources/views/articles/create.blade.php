@extends('layout')

@section('content')

<div id="wrapper" style="">
    <div id="page" class="articleContainer">
        <h1>New Article</h1>

    <form method="post", action="/profession", class="form">
        @csrf

        <div class="field">
                <label class="title">Article Title</label><br>
                <div class="control">
                <input type="text"
                       id="title"
                       name="title"
                       class="input @error('course_name') inputError @enderror"
                       value="{{ old('title') }}"><br>

                    @if ($errors->has('title'))
                        <p style="color: red"><strong>{{ $errors->first('title') }}</strong></p>
                    @endif
            </div>
        </div>

        <div class="field">
                <label for="excerpt">Excerpt</label><br>
                <div class="control">
                <input type="text"
                       id="excerpt"
                       name="excerpt"
                       class="input @error('course_name') inputError @enderror"
                       value="{{ old('excerpt') }}"><br>

                    @if ($errors->has('excerpt'))
                        <p style="color: red"><strong>{{ $errors->first('excerpt') }}</strong></p>
                    @endif
            </div>
        </div>

        <div class="field">
                <label for="body">Complete Article</label><br>
                <div class="control">
                <input type="text"
                       id="body"
                       name="body"
                       class="input @error('course_name') inputError @enderror"
                       value="{{ old('body') }}"><br><br>

                    @if ($errors->has('body'))
                        <p style="color: red"><strong>{{ $errors->first('body') }}</strong></p>
                    @endif
            </div>
        </div>
        <input type="submit" value="Submit" class="button">
    </form>
    </div>
</div>
@endsection




