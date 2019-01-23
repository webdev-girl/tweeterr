<!DOCTYPE html>
<html class="about-bg" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login on Tweeter</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/tweeter.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="topnav">
            <ul>
                <li><a href="/home"><i class="fab fa-twitter"></i>Home</a></li>
                <li><a href="/">Let's go Tweeter</a></li>
                <li><a href="/about">Company</a></li>
                <li><a href="/">Values</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/">Blog</a></li>
                <li><a href="/terms">Terms</a></li>
                <div id="myNav" class="overlay">

              <!-- Button to close the overlay navigation -->
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

              <!-- Overlay content -->
              <div class="overlay-content">
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
              </div>


            </div>
            <span onclick="openNav()">English US()</span>
            </ul>
        </div>

            @hasSection('legend')
            <div style="border: 3px solid #ccc; border-left: none;">
            @yield('legend')
            </div>
            @endif


            @yield('pages-content')

            @include('partials.footer')
</body>
</html>
