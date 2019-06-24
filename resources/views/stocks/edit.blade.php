@extends('layouts.app')



@section('content')
    <h1>Edit Item</h1>
    {!! Form::open(['action' => ['StocksController@update',$stock->article_no],'method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label('article_no', 'Article No.')}}
        {{Form::text('article_no',$stock->article_no,['class' =>'form-control','placeholder'=>'Article No.'])}}
    </div>
    <div class="form-group">
        {{ Form::label('colour', 'Colour')}}
        {{Form::text('colour',$stock->colour,['class' =>'form-control','placeholder'=>'Colour','enctype' => 'multipart/form-data'])}}
    </div>
    <div class="form-group">
        {{ Form::label('quantity', 'Quantity')}}
        {{Form::text('quantity',$stock->quantity,['class' =>'form-control','placeholder'=>'Quantity'])}}
    </div>
    <div class="form-group">
        {{ Form::label('location', 'Location')}}
        {{Form::text('location',$stock->location,['class' =>'form-control','placeholder'=>'Location'])}}
    </div>
    <div class="form-group">
        {{ Form::label('collection', 'Collection')}}
        {{Form::text('collection',$stock->collection,['class' =>'form-control','placeholder'=>'Collection'])}}
    </div>

    {{Form::hidden('_method','PUT')}}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
