@extends('layout')

@section('content')
<p>
    <h2>
        Short Summary
    </h2>
<br>

I was born in Rotterdam and lived in Berkel en Roderijs for the first 2.5 years of my life. My parents decided to move to a more laid
back part of the Netherlands to raise their children. Like I said on the introduction page, I'm from a small village named Stellendam.
I've lived here eversince my parents decided to move. I actually prefer a small town like Stellendam over a 'big' city like Rotterdam,
so I think in the future I'll keep living in a small town.

<br>

    <h2>
        Spare time activities
    </h2>

Eversince I was a little kid, I've really enjoyed riding a skateboard. I've been doing it for about 11 years now. I still  Like
to practice skateboarding eventhough I don't have as much time as I used to have. I've been practicing judo for roughly 13 years now.
Judo is something that I also still really enjoy doing. Besides practicing judo and skateboarding I like to listen to music, read, watch
Youtube videos and occasionally play video games.

<br>
<br>

<div class="container6">
    <h2>
        Other interests
    </h2>
    When I listen to music I mostly listen to metal and classic rock. I grew up listening to primarily classic rock bands like Kiss,
    Black Sabbath and Guns 'n Roses. Over the years I also grew to appreciate heavier genres of music. Occasionally I'll buy vinyl too, because it's really cool to own a
    physical copy of an album. I also attend concerts relatively often and festivals in the summer. I also like to read. When I read,
    I mostly read historical and mythological books. I don't really watch any movies  or series. On this page you'll also find some of the albums I own on vinyl.
</div>
<br>
<br>
<br>

<div class="slidershow middle">

    <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">


        <div class="slide s1">
            <img src="images/Rainbow.jpg" alt="Rainbow-Rising">
        </div>

        <div class="slide">
            <img src="images/Black Sabbath.jpg" alt="Black Sabbath- The Eternal Idol">
        </div>

        <div class="slide">
            <img src="images/Pantera.jpg" alt="Pantera-Vulgar Display of Power">
        </div>

        <div class="slide">
            <img src="images/Ace Frehley.jpg" alt="Ace Frehley-Ace Frehley">
        </div>

        <div class="slide">
            <img src="images/In Flames.jpg" alt="In Flames-Clayman">
        </div>
    </div>

    <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
    </div>
</div>

<br>
<br>

<h2>
    Summerised characteristics
</h2>

<ul style="list-style: circle;">
    <li>skateboarding</li>
    <li>metalhead</li>
    <li>judoka</li>
    <li>historical interests</li>
    <li>Vinyl</li>

</ul>

</p>

<br>
<br>

@endsection


