@extends('app')
@section('content')
    <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3" role="main">
                <div class="text-center">
                    <img src="{{Auth::user()->avatar}}" width="50" class="img-circle" alt="">
                    {!! Form::open(['url'=>'/avatar','file'=>true]) !!}
                    {!! Form::file('avatar') !!}
                    <div>
                        {!! Form::submit('上傳頭像',['class'=>'btn btn-success pull-right']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
          </div>
    </div>
@stop