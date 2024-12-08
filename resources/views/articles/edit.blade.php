@extends('layout')

@section('content')


    <div id="wrapper" style="">
        <div id="page" class="articleContainer">
            <h1>Update Article</h1>

            <form method="POST", action="/profession/{{ $profession->id }}" class="form">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="title">Article Title</label><br>
                    <div class="control">
                        <input type="text" id="title" name="title" value="{{ $profession->title }}" class="input"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt">Excerpt</label><br>
                    <div class="control">
                        <input type="text" id="excerpt" name="excerpt" value="{{ $profession->excerpt }}" class="input"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="body">Complete Article</label><br>
                    <div class="control">
                        <input type="text" id="body" name="body" value="{{ $profession->body }}" class="input"><br><br>
                    </div>
                </div>
                <input type="submit" value="Submit" class="button">
            </form>

            <form method="POST" action="/profession/{{ $profession->id }}" class="form">
                @csrf
                @method('DELETE')
                <button type="submit" class="button">Delete</button>
            </form>
        </div>
    </div>

@endsection
