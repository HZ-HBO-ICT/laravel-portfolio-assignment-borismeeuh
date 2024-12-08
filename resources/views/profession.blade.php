@extends('layout')

@section('content')

    <div>
        <h2>fag</h2>
        <h2>________________________________________________________</h2>
        <ul>
            @foreach($articles as $article)
                <li>
                    <h3>
                        <a href="/profession/{{$article->id}}">{{$article->title}}</a>
                    </h3>

                    <p>{{$article->excerpt}}</p>
                    <p>________________________________________________________</p>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
