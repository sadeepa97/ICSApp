@extends('layouts.app')

@section('content')

    <h1>Create Post </h1>
    {!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label('article no.', 'Article no.')}}
        {{Form::text('article no.','',['class' =>'form-control','placeholder'=>'Article no.'])}}
    </div>


    {!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label('colour', 'Colour')}}
        {{Form::textarea('colour','',['class' =>'form-control','placeholder'=>'Colour'])}}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
