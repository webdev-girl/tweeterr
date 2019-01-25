
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
                    <div class="col-sm">
                        <h1>Tweets</h1>
                    <form method="POST" action="/posts">
                        @csrf
                    <div class="col-sm">

                        @foreach ($tweets as $singletweet)
                            <a href="/posts/{{$singletweet}}">
                            {{$singletweet->tweet}} </a>
                            - by {{$singletweet->user_id}}
                            <br/>

                        @endforeach
                        <input type="hidden" name="user_id" value="{{$singletweet->user_id}}">
                        <input type="hidden" name="tweets_id" value="{{$singletweet->tweets_id}}">
                    </div>
                        <div>
                            <input type="submit" name="submit" value="Tweet">
                        </div>
                </form>
            </div>
        @include('partials.footer')
    </body>
</html>
