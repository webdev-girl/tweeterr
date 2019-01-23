<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partials.header')
    <body>
        <div class="container">
            <div class="row left-side-signup">
                <div class="col-6">
                    <h1>Follow Your Interests</h1>
                    <h1>Hear what people are talking about</h1>
                    <h1>Join the conversation</h1>
                </div>
                <div class="col-6">
                    <h1>See whats happening</h1>
                    <h1>in the world right now</h1>
                    <h1>Join Tweeter today</h1>
                </div>
                <div>
                    <a href="signup.blade.php" class="w3-btn w3-black">Sign Up</a>
                </div>
                <div>
                    <a href="login.blade.php" class="w3-btn w3-black">Login</a>
                </div>
            </div>
        </div>
    @include('partials.footer')
    </body>
</html>
