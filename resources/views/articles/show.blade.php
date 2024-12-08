@extends('layout')

@section('content')

    <h2 style="text-align: center">{{$article->title}}</h2>

    <p style="text-align: center">
        {{$article->body}}
    </p>
    <form method="get", action="{{ $article->id }}/edit", class="secondaryForm">
        <button class="button">Edit Article</button>
    </form>

@endsection
