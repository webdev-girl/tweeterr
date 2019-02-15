
@include('partials.header')
    <title>Tweeter.com</title>
        <body class="timeline-bg">
            @extends('layouts.app')
            @section('content')
                <div class="container fluid ">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="container">
                                <div class="row" >
                                    <div class="col-md">
                                        <div class="card card-default">
                                            <div class="profile-right">
                                            </div>

                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <p><a href="/moments">Rachel Sakac</a></p>
                                                            <br/>
                                                            <p><a href="/moments">@sakac934</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="card-header">
                                            <div class="container ">
                                                <form method="POST" action="" >
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                                        </div>
                                                        <div class="col-sm">
                                                            <textarea name="tweet" class="form-control" rows="1" placeholder="What's happening?" required></textarea>
                                                        </div>
                                                            {{-- <input type="hidden" name="user" value="{{$tweet->user}}">
                                                            <input type="hidden" name="tweet" value="{{$tweet->tweet}}"> --}}
                                                            <button type="submit" class="btn btn-primary"> {{ __('Tweet') }}</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-body">
                                                 @foreach ($tweets as $tweet)
                                                 <p><b> {{$tweet->tweet}}<b></p>
                                                    by {{$tweet->user->name}} at {{$tweet->created_at}}
                                                         <hr />
                                                    <a href="/edit-tweet/{{$tweet->id}}" >Edit</a>
                                                 @endforeach

                                                 {{-- @php
                                                 if(isset($tweet->like) && ($tweet->like == true)){

                                                }else{
                                                }
                                                 @endphp --}}

                                                 <div class="container">
                                                     <div class="row">
                                                         <div class="col-md-4 flex-container">


                                                                    <form method="POST" action="" >
                                                                        @csrf
                                                                          <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                          <input type="hidden" name="like" value="1"/>
                                                                          {{-- <button type="submit" class="btn btn-primary"><i class="fa fa-heart"></i>{{ __('like') }}</button> --}}
                                                                          <button class="btn btn-default like btn-login" ng-click="like()">
                                                                               <i class="fa fa-heart"></i>
                                                                             {{-- <span>@{{ like_btn_text }}</span>  --}}
                                                                         </button>
                                                                     </form>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <form method="POST" action="/like-tweet">
                                                                        @csrf
                                                                      <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                      <input type="hidden" name="like" value="0"/>
                                                                          {{-- <button type="submit" class="btn btn-primary">{{ __('Unlike') }}</button> --}}

                                                                      <button class="btn btn-default like btn-login" ng-click="like()">
                                                                            <i class="fa fa-thumbs-o-down"></i>
                                                                             {{-- <span>@{{ like_btn_text }}</span> --}}
                                                                      </button>
                                                                  </form>
                                                                </div>
                                                                <div class="col-md-4">
                                                                   <form method="POST" action="">
                                                                         @csrf

                                                                            {{-- {{$tweet->id}} --}}
                                                                         {{-- <p>{{'Tweet has been deleted successfully!'}}</p> --}}

                                                                        <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                                          {{-- <button type="submit" class="btn btn-primary">{{ __('Delete') }}</button> --}}
                                                                          <button class="btn btn-default like btn-login" ng-click="like()">
                                                                              <i class="fa fa-trash"> </i>
                                                                             {{-- <span>@{{ like_btn_text }}</span> --}}
                                                                         </button>
                                                                      <i>&#xf014;</i>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <form method="POST" action="comment">
                                                    @csrf
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                                                </div>
                                                                <div class="col-sm">
                                                                    <textarea name="comment" class="form-control" rows="1" placeholder="What's happening?" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm">
                                                                <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                <button type="submit" class="btn btn-primary"> {{ __('Comment') }}</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form method="POST" action="comment">
                                                    @csrf
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                                                </div>
                                                                <div class="col-sm">
                                                                    <textarea name="comment" class="form-control" rows="1" placeholder="What's happening?" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm">
                                                                <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                <button type="submit" class="btn btn-primary"> {{ __('Comment') }}</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection
    </body>
</html>
