@extends('layout')

@section('content')
<h2>
    Here you'll find some frequently asked questions about HZ and how things work around here. You'll also
    <br>
    find the answers to the questions on this page.
</h2>

<form class="secondaryForm", action="FAQ/create", method="get">
    <button class="button">Create Question</button>
</form>
<p>
    <br>

<ul>

    @foreach($faqs as $faq)
        <li>{{ $faq->question }}</li>
        <li>{{ $faq->answer }}</li>
        <form method="get", action="FAQ/{{ $faq->id }}/edit">
            <input class="button" type="submit" value="Edit Question">
        </form>
        <br>
    @endforeach
</ul>
</p>

<br>
<br>

@endsection
