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
                                            <div class="card-header">

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
                                                <form method="POST" action="editTweet">
                                                     @csrf
                                                    @foreach ($tweets as $tweet)
                                                        <p><b> {{$tweet->tweet}} </br></p>
                                                        <p>
                                                        <hr />
                                                    @endforeach --}}
                                                     <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <textarea  class="form-control" rows="1"
                                                                placeholder="What's happening?">{{$tweet->tweet}} </textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 offset-md-4">
                                                            <input type="hidden" name="edit-tweet" value="{{$tweet_id}}">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Edit Tweet') }}
                                                            </button>
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
                                                         <div class="row" >
                                                            <div class="col-md-4">
                                                                <form method="POST" action="" >
                                                                    @csrf
                                                                      <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                      <input type="hidden" name="like" value="1"/>
                                                                      <button type="submit" class="btn btn-primary">{{ __('like') }}</button>
                                                                 </form>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <form method="POST" action="/like-tweet">
                                                                @csrf
                                                                  <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                  <input type="hidden" name="like" value="0"/>
                                                                  <button type="submit" class="btn btn-primary">{{ __('Unlike') }}</button>
                                                              </form>
                                                            </div>
                                                            <div class="col-md-4">
                                                                 <form method="POST" action="tweet_id">
                                                                     @csrf
                                                                  <input type="hidden" name="tweet_id" value="delete"/>
                                                                  <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                  <button type="submit" class="btn btn-primary">{{ __('Delete') }}</button>
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
