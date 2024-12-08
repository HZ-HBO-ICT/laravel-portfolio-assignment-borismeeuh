@extends('layout')

@section('content')

    <div>
        <div id="faqPage" class="faqContainer">
            <h1>New Question</h1>

            <form method="post", action="/FAQ", class="form">
                @csrf

                <div class="field">
                    <label class="question">Question</label><br>
                    <div class="control">
                        <input type="text"
                               id="question"
                               name="question"
                               class="input"
                               value="{{ old('question') }}"><br>

                        @if ($errors->has('question'))
                            <p style="color: red"><strong>{{ $errors->first('question') }}</strong></p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label for="answer">Answer</label><br>
                    <div class="control">
                        <input type="text"
                               id="answer"
                               name="answer"
                               class="input"
                               value="{{ old('answer') }}"><br>

                        @if ($errors->has('answer'))
                            <p style="color: red"><strong>{{ $errors->first('answer') }}</strong></p>
                        @endif
                    </div>
                </div>
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
    </div>
@endsection
