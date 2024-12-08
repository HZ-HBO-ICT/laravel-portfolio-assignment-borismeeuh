<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Borismeeuh's Page</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <header id="header">
            <div id="background_container">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/home">Main Page</a></li>
                            <li><a href="/profile">Profile Page</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li><a href="/FAQ">FAQ</a></li>
                            <li><a href="/motivation">My Motivation</a></li>
                            <li><a href="/view">View on the job</a></li>
                            <li><a href="/profession">Articles</a></li>
                            <li><a href="/grade">Grades</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="authenticationDiv">
                <div id="registerDiv">
                    <a href="/register" id="registerLink">Register</a>
                </div>

                <div id="loginDiv">
                    <a href="/login" id="loginLink">Login</a>
                </div>

                <div id="logoutDiv">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>

            <div id="darkModeToggle">
                <img src="images/moon.png" id="darkModeToggleImage">
            </div>
        </header>

        @yield('content')

        <div class="footer">
            <div class="footersectionlinks">
                <ul>
                    <li class="footerlink"><a href="/home">Main Page</a></li>
                    <li class="footerlink"><a href="/profile">Profile Page</a></li>
                    <li class="footerlink"><a href="/dashboard">Dashboard</a></li>
                    <li class="footerlink"><a href="/FAQ">FAQ</a></li>
                    <li class="footerlink"><a href="/motivation">My Motivation</a></li>
                    <li class="footerlink"><a href="/view">View on the job</a></li>
                    <li class="footerlink"><a href="/profession">Profession</a></li>
                    <li class="footerlink"><a href="/grade">Grades</a></li>
                </ul>
            </div>
            <div class="footercontent">
                <a href="https://www.instagram.com/borismeeuh/" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="footerbottom">
                &copy; Boris Kamstra  |  Hogeschool Zeeland
            </div>
        </div>
        <script src="/js/script.js"></script>
    </body>
</html>
