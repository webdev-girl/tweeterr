 @include('partials.header')

    <title>Tweeter.com</title>
     {{-- @extends('layouts.app') --}}
     {{-- @section('content') --}}
    <body class="timeline-bg">
        <div class="timeline-nav">
           <ul>
               {{-- <li><a class="navbar-brand" href="{{ url('/') }}">
                       {{ config('Home', 'Home') }}
                   </a><i class="fab fa-twitter"></i></a></li> --}}
               <li><a class="login" href="/index"><img src="../images/twitterbird.png" width="23px" height="23px">Home</a></li>
               <li><a href="/moments">Moments</a></li>
               <li><a href="/notifications">Notifications</a></li>
               <li><a href="/messages">Messages</a></li>
               <li><a><i class="fab fa-twitter"></i></a></li>
               <li><a href="{{ url('/logout') }}"> logout </a></li>
           </ul>
        </div>
        <div class="container-fluid timeline-div">
            <div class="row">
                <div class="col-sm-4 left-profile">
                    <div class="container">
                        <div>
                            <div class="col-md">
                                <div class="card card-default">
                                    <div class="card-header header">
                                        <div>
                                            <ul class="profile-contact">
                                                <li><a href="/moments">Rachel Sakac</a></li>
                                                <li><a href="/moments">@sakac934</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 card-right">
                    <div class="container">
                        <div>
                            <div class="col-md">
                                <div class="card card-default">
                                    <div class="card-header right-card-header">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                                </div>
                                                 @foreach ($tweets as $tweet)
                                                <div class="col-sm">
                                                   <form method="post" action="tweet">
                                                
                                                    @csrf
                                                        <textarea name="tweet" class="form-control" rows="1" placeholder="What's happening?" required></textarea>
                                                        <button type="submit" class="btn btn-primary"> {{ __('Tweet') }}</button>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <p> {{$tweet->tweet}}</p>
                                        by {{$tweet->user->name}} at {{$tweet->created_at}}
                                           <hr />
                                        @endforeach

                                        {{-- @php
                                            if(isset($tweet->has_permissions)){
                                        @endphp
                                            //    <a href="/edit-tweet">Edit</a>
                                        @php
                                            if(isset($tweet->liked) && ($tweet->liked==true)){
                                        @endphp --}}

                                        <form method="get" action="/edit-tweet">
                                            <input type="hidden" name="id" value="{{ $tweet->id }}" >
                                            <input type="hidden" name="tweet" value="{{ $tweet->id }}" >
                                            <input type="hidden" name="tweet" value="{{$tweet->tweet}}">
                                         </form>
                                     <div class="container">
                                         <div class="row">
                                            <div class="col-md-4 tweet-buttons">
                                                <form method="POST" action="/like-tweet">
                                                     @csrf
                                                     <input type="hidden" name="tweet_id" value="{{ $tweet->id }}"/>
                                                     <input type="hidden" name="like" value="0" />
                                                      {{-- <button type="submit" class="btn btn-primary">{{ __('Unlike') }}</button> --}} --}}
                                                     <button class="btn btn-default like btn-unlike" ng-click="like()">
                                                       <i class="fa fa-thumbs-o-down"></i>
                                                     </button>
                                                </form>
                                            </div>

                                        {{-- @php
                                        }
                                            else{
                                        @endphp --}}

                                             <div class="col-md-4 tweet-buttons">
                                                 <form method="POST" action="/like-tweet" >
                                                     @csrf
                                                     <input type="hidden" name="tweet_id" value="{{ $tweet->id }}"/>
                                                     <input type="hidden" name="like" value="1" />
                                                   {{-- <button type="submit" class="btn btn-primary"><i class="fa fa-heart"></i>{{ __('like') }}</button> --}} --}}
                                                   <button class="btn btn-default like btn-like" ng-click="like()">
                                                       <i class="fa fa-heart"></i>
                                                    </button>
                                                 </form>
                                             </div>

                                                {{-- @php
                                            }
                                            @endphp --}}

                                             <div class="col-md-4 tweet-buttons">
                                                <form name="delete-form" method="post" action="delete">
                                                    @csrf
                                                   {{$tweet->id}}
                                                   <input type="hidden" name="_method" value="DELETE"/>
                                                   <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                    {{-- <button type="submit" class="btn btn-primary">{{ __('Delete') }}</button> --}}
                                                   <button class="btn btn-default like btn-delete" ng-click="like()">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                             </div>
                                        </div>
                                    </div>
{{--
                                        @php
                                    }
                                    @endphp --}}

                                        <div class="container">
                                            <div class="row">
                                               <div class="col-sm-1">
                                                    <img class="comment-avatar" src="images/profile.png" alt="profile">
                                                </div>
                                                <div class="col-sm">
                                                    <form method="POST" action="/comment">
                                                     @csrf
                                                     {{-- @foreach ($comments as $comment)
                                                       <p><b> {{$comment->post_id}}<b></p>
                                                       by {{$comment->user->name}} at {{$comment->created_at}}
                                                           <hr />
                                                         @endforeach --}}
                                                       <textarea name="comment" class="form-control" rows="1" placeholder="What's happening?" required></textarea>
                                                       <input type="hidden" name="user_id"  value="{{ $tweet->user_id}}" />
                                                       <input type="hidden" name="tweet_id"  value="{{ $tweet->id}}" />
                                                       <button type="submit" class="btn btn-primary"> {{ __('Comment') }}</button>

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
            </div>
        </div>
        @include('partials.footer')
        {{-- @endsection --}}
    </body>
</html>
