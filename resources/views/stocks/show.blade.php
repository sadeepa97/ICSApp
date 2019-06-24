@extends('layouts.app ')


@section('content')


    <p> </p>
    <a href="/stocks" class="btn border-dark">Go Back</a>
    <h1>Article no. : {{$stock->article_no}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$stock->cover_image}}">
    <br><br>
    <div>
        <h6>Qty. : {{$stock->quantity}}</h6>
        <h6>Colour : {{$stock->colour}}</h6>
        <h6>Collection : {{$stock->collection}}</h6>
        <h6>Location : {{$stock->location}}</h6>
    </div>
    <hr>
    <a href="/stocks/{{$stock->article_no}}/edit" class="btn border-dark">Edit</a>

    {!! Form::open(['action' =>['StocksController@destroy',$stock->article_no],'method' => 'POST','class' =>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection
