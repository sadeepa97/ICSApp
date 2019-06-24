@extends('layouts.app')



@section('content')
    <h1>Add Item</h1>

    {!! Form::open(['action' => 'StocksController@store','method'=>'POST','enctype' => 'multipart/form-data']) !!}

     <div>
         {{ Form::label('article_no', 'Article No.')}}
        {{Form::text('article_no','',['class' =>'form-control','placeholder'=>'Article No.'])}}
    </div>
    <div class="form-group">
        {{ Form::label('colour', 'Colour')}}
        {{Form::text('colour','',['class' =>'form-control','placeholder'=>'Colour'])}}
    </div>
    <div class="form-group">
        {{ Form::label('quantity', 'Quantity')}}
        {{Form::text('quantity','',['class' =>'form-control','placeholder'=>'Quantity'])}}
    </div>
    <div class="form-group">
        {{ Form::label('location', 'Location')}}
        {{Form::text('location','',['class' =>'form-control','placeholder'=>'Location'])}}
    </div>
    <div class="form-group">
        {{ Form::label('collection', 'Collection')}}
        {{Form::text('collection','',['class' =>'form-control','placeholder'=>'Collection'])}}
    </div>



    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
