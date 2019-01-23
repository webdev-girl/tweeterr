

<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partials.header')
    <body>
        <div class="topnav">
            <ul>
                <li><a href="/index"><i class="fab fa-twitter"></i>Home</a></li>
                <li><a href="/moments">Moments</a></li>
                <li><a href="/notifications">Notifications</a></li>
                <li><a href="/messages">Messages</a></li>
                <li><i class="fab fa-twitter "></i></li>
            </ul>
        </div>
        <div class="container">
                <div class="row">
                    <form method="$_POST" action="/posts" id="posts">
                        <div class="col-sm">
                            <h1>Tweets</h1>
                        </div>

                        

                        <div class="col-sm">
                        <br/>
                        </div>

                        <br/>
                        <br/>
                        <div class="col-sm-2">
                            <textarea name="tweet" placeholder="Whats happening?" rows="5" cols="40"></textarea>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div>
                            <input type="submit" name="submit" value="Tweet">
                        </div>
                </form>
            </div>
    @include('partials.footer')
    </body>
</html>
