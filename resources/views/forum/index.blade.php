@extends('app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>歡迎來到Laravel社區
                <a class="btn btn-lg btn-primary pull-right" href="../../components/#navbar" role="button">發佈新的帖子 »</a>
            </h1>
        </div>
    </div>
    <div class="container">
          <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $discussion)
                    <div class="media">
                    <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" alt="64x64" src="{{$discussion->user->avatar}}" style="width: 64px; height: 64px;">
                    </a>
                    </div>
                    <div class="media-body">
                    <h4 class="media-heading">{{$discussion->title}}</h4>
                    {{$discussion->user->name}}
                    </div>
                    </div>
                @endforeach
            </div>
          </div>
    </div>
@stop