@include('partials.header')
        <title>Tweeter</title>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                         <image class="left-side-image-index" src="../images/backimage.png" alt="birdwing"/>
                    </div>
                    <div class="col-sm right-side-index">
                        <div class="col-sm">
                             <a id="index-top-login" href="/login" class="w3-btn w3">Login</a>
                        </div>
                        <div class="index-text">
                            <img class="right-side-image-index" src="images/twitterbird.png" alt="bird">
                             <p>See whats happening</p>
                             <p>in the world right now</p>
                             <h6 class="index-text2">Join Tweeter today</h6>
                             <div>
                                 <a href="/register" class="w3-btn w3 index-signup-button">Sign Up</a>
                             </div>
                             <div>
                                 <a href="/login" class="w3-btn w3 index-login-button">Login</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class= "index-footer">
        @include('partials.footer')
       </div>
    </body>
</html>
