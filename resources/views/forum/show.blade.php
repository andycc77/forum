@extends('app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="media">
            <div class="media-left">
            <a href="#">
              <img class="media-object img-circle" alt="64x64" src="{{$discussion->user->avatar}}" style="width: 64px; height: 64px;">
            </a>
            </div>
            <div class="media-body">
            <h4 class="media-heading">{{$discussion->title}}
                @if(Auth::check() && Auth::user()->id ==$discussion->user->id)
                <a class="btn btn-lg btn-primary pull-right" href="/discussions/{{$discussion->id}}/edit" role="button">修改帖子 »</a>
                @endif
            </h4>
            {{$discussion->user->name}}
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="blog-post">
                    {!! $html !!}
                </div>
                <hr>
                @foreach($discussion->comments as $comment)
                    <div class="media">
                    <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" alt="64x64" src="{{$comment->user->avatar}}" style="width: 64px; height: 64px;">
                    </a>
                    </div>
                    <div class="media-body">
                    <h4 class="media-heading">{{$comment->user->name}}</h4>
                        {{$comment->body}}
                    </div>
                    </div>
                @endforeach
                <hr>
                @if(Auth::check())
                {!! Form::open(['url'=>'/comment']) !!}
                <!---  Field --->
                {!! Form::hidden('discussion_id',$discussion->id) !!}
                <div class="form-group">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
                <div>
                    {!! Form::submit('發表評論',['class'=>'btn btn-success pull-right']) !!}
                </div>
                {!! Form::close() !!}
                @else
                    <a href="/user/login" class="btn btn-block btn-success">登入參與評論</a>
                @endif
            </div>
        </div>
    </div>
@stop