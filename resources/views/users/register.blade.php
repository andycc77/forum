@extends('app')
@section('content')
    <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3" role="main">
                @if($errors->any())
                <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
                </ul>
                @endif
                {!! Form::open(['url'=>'/user/register']) !!}
                <!---  Field --->
                <div class="form-group">
                    {!! Form::label('name', '用戶名:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <!---  Field --->
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <!---  Field --->
                <div class="form-group">
                    {!! Form::label('password', '密碼:') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <!---  Field --->
                <div class="form-group">
                    {!! Form::label('password_confirmation', '確認密碼:') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                <div>
                    {!! Form::submit('馬上註冊',['class'=>'btn btn-success form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
          </div>
    </div>
@stop