@extends('app')
@section('content')
    <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2" role="main">
                {!! Form::open(['url'=>'/discussions']) !!}
                <!---  Field --->
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <!---  Field --->
                <div class="form-group">
                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::text('body', null, ['class' => 'form-control']) !!}
                </div>
                <div>
                    {!! Form::submit('發表帖子',['class'=>'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
          </div>
    </div>
@stop