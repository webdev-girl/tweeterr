@include('partials.header')
 {{-- @extends('layouts.app') --}}
  @section('content')
        <title>Tweeter</title>
    <body class="index-bg">
        <div class="container-fluid margin">
            <div class="row">
                <div class="col-sm">
                     <image class="left-side-image-index" src="../images/backimage.png" alt="birdwing"/>
                </div>
                <div class="col-sm right-side-index">
                    <div>
                        <div class="row">
                            <div class="col-sm">
                                <img class="right-side-image-index" src="images/twitterbird.png" alt="bird">
                            </div>
                            <div class="col-sm">
                                 <a id="index-top-login" href="/login" class="w3-btn w3 index-login-top-button">Login</a>
                            </div>
                        </div>
                        <div class="main-content">
                            <ul>
                                <li><h2>See whats happening</h2></li>
                                <li class="margin-content"><h2>in the world right now<h2></li>
                                <li><h5>Join Tweeter today.</h5></li>
                                <li><a href="/register" class="w3-btn w3 index-signup-button">Sign Up</a></li>
                                <li><a href="/login" class="w3-btn w3 index-login-button">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>

                <ul class="index-footer-info">
                        <li><a href="/about" rel="noopener">About</a><li>
                        <li><a href="https://blog.twitter.com" rel="noopener">Blog</a></li>
                        <li><a href="//support.twitter.com" rel="noopener">Help Center</a></li>
                        <li><a href="http://status.twitter.com" rel="noopener">Status</a></li>
                        <li><a href="https://about.twitter.com/careers" rel="noopener">Jobs</a></li>
                        <li><a href="/privacy" rel="noopener">Privacy Policy</a></li>
                        <li><a href="/tos" rel="noopener">Terms</a></li>
                        <li><a href="//support.twitter.com/articles/20170514" rel="noopener">Cookies</a></li>
                        <li><a href="//about.twitter.com/press/brand-assets" rel="noopener">Brand</a></li>
                        <li><a href="https://about.twitter.com/products" rel="noopener">Apps</a></li>
                        <li><a href="//ads.twitter.com/?ref=gl-tw-tw-twitter-advertise" rel="noopener">Advertise</a></li>
                        <li><a href="https://marketing.twitter.com" rel="noopener">Marketing</a></li>
                        <li><a href="https://marketing.twitter.com" rel="noopener">Marketing</a></li>
                        <li><a href="//dev.twitter.com" rel="noopener">Developers</a></li>
                        <li><a href="/i/directory/profiles" rel="noopener">Directory</a></li>
                        {{-- <li><a href="/settings/personalization" rel="noopener">Settings</a></li> --}}
                        <li class="index-footer"> © 2019 Twitter</li>
                </ul>

       </footer>
       @endsection
    </body>
 </html>
