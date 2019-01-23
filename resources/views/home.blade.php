@extends('layout')

@section ('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm left-side-image-index">
                <div class="row index-icon-text">
                    <div class="col-sm-1 index-icons-leftside">
                        <img  src="images/search.png" alt="search">
                        <img  src="images/people.png" alt="people">
                        <img  src="images/bubble.png" alt="bubble">
                    </div>
                    <div class="col-sm index-text-left">
                        <p>Hear what people are talking about.</p>
                        <br/>
                        <p>Follow your interests</p>
                        <br/>
                        <p>Join the conversation</p>
                    </div>
                </div>
            </div>
            <div class="col-sm right-side-index">
             <div class="col-sm">
                     <a id="index-top-login" href="/home" class="w3-btn w3">Login</a>
                 </div>
                 <div class="index-text">
                    <img class="right-side-image-index" src="images/twitterbird.png" alt="bird">
                     <p>See whats happening</p>
                     <p>in the world right now</p>
                     <h6 class="index-text2">Join Tweeter today</h6>
                     <div>
                         <a href="/signup" class="w3-btn w3 index-signup-button">Sign Up</a>
                     </div>
                     <div>
                         <a href="/login" class="w3-btn w3 index-login-button">Login</a>
                     </div>
                </div>
            </div>
         </div>
    </div>

@endsection
