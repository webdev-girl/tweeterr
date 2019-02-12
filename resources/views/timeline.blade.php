@include('partials.header')
        <title>Tweeter.com</title>
        <body class="timeline-bg">
     @extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card tweet-box">
                        <div class="card-header">{{ __('Tweet') }}</div>

                            <div class="card-body">
                                <form method="POST" action="">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <textarea name="tweet" class="form-control" rows="1"
                                                placeholder="What's happening?" required></textarea>
                                            </div>
                                        <div>
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Tweet') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        <div class="card-body">
                            <form method="POST" action="timeline">
                                @csrf
                                 @foreach ($tweets as $tweet)
                                  <p><b> {{$tweet}} </b></p> 
                                 <p>
                                        {{$tweet->tweet}} by {{$tweet->user_id}} at {{$tweet->created_at}}

                                  </p>
                                  <hr />
                                @endforeach
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <textarea name="comment" class="form-control" rows="1"
                                            placeholder="What's happening?" required></textarea>
                                        </div>
                                    <div>
                                    <div class="col-md-8 offset-md-4">
                                        {{-- <input type="hidden" name="user_id" value="{{$tweet->user_id}}">
                                        <input type="hidden" name="tweets" value="{{$tweet->tweet}}"> - --}}
                                        {{-- <button type="submit" class="btn btn-primary">
                                            {{ __('Comment') }}
                                        </button> --}}
                                          <button class="tweet-button"type="submit" name="tweet-button">Tweet</button>
                                    </div>
                                </div>
                            </form>
                            <div>
                                <ul>
                                    <li><a href="#">Reply</a></li>
                                    <li><a href="#">Retweet</a></li>
                                    <li><a href="#">Like</a></li>
                                    <li><a href="#">Review Tweet Activity</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @include('partials.footer')
    </body>
</html>



{{--
                                                           <button class="tweet-button"type="submit" name="tweet-button">Tweet</button>






                            <div ng-app="Actions">
                            <span ng-controller="LikeController">
                                @if ($tweets->user->id != Auth::id())
                                    <button class="btn btn-default like btn-login" ng-click="like()">
                                        <i class="fa fa-heart"></i>
                                        <span>@{{ like_btn_text }}</span>
                                    </button>
                                @endif
                            </span>
                            </div>
                        </div>
                    </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row timeline-left-div-background ">
                                        <div class="col-sm index-text-left">
                                            <p><a href="/moments">Rachel Sakac</a></p>
                                            <br/>
                                            <p><a href="/moments">@sakac934</a></p>
                                            <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
