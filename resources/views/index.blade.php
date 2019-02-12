<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tweeter</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/tweeter.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
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
    @include('partials.footer')
    </body>
</html>
