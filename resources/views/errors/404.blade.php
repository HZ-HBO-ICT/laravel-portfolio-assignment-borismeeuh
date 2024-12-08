@extends('layout')

@section('content')

    <body>
        <div id="notFoundPage">
            <div>
                404: Page not found
            </div>

            <div>
                We sincerely apologise for this inconvenience.
                <br>
                Were you looking for any of the following:
                <br>
                <a href="/home" class="errorLink">- Home</a>
                <br>
                <a href="/grade" class="errorLink">- Grades</a>
                <br>
                <a href="/profession/1" class="errorLink">- Article 1</a>
                <br>
                <a href="/FAQ" class="errorLink">- Frequently asked questions</a>
            </div>
            <br><br>
            <div>
                If you'd like to add additional information or feedback <br> about this error, you can send it to this email address:
                <br>
                <br>
                kams0007@hz.nl
            </div>
            <br>
        </div>

    </body>
@endsection
