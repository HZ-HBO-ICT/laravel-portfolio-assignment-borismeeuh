@extends('layout')

@section('content')

    <div>
        <div id="faqPage" class="faqContainer">
            <h1>Change Question</h1>

            <form method="POST", action="/FAQ/{{$faq->id}}" class="form">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="question">Question</label><br>
                    <div class="control">
                        <input type="text"
                               id="question"
                               name="question"
                               value="{{ $faq->question }}"
                               class="input"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="answer">Answer</label><br>
                    <div class="control">
                        <input type="text"
                               id="answer"
                               name="answer"
                               value="{{ $faq->answer }}"
                               class="input"><br>
                    </div>
                </div>
                <input type="submit" value="Submit" class="button">
            </form>

            <form method="POST" action="/FAQ/{{ $faq->id }}" class="form">
                @csrf
                @method('DELETE')
                <button type="submit" class="button">Delete</button>
            </form>
        </div>
    </div>
@endsection
