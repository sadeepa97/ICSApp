@extends('layouts.app')

@section('content')



    {{--<a href="/adminPanel" class="btn btn-warning">Back to dashboard</a>--}}

    <hr>

    <h1 class="display-4">Items</h1>

    {{--<div class="row">
        <div class="col-sm-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Sale items</div>
                <div class="card-body">
                    <h1 class="card-title"><div class="counter text-center" data-count="{{count($stocks)}}"></div></h1>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Inventory Items</div>
                <div class="card-body">
                    <h1 class="card-title"><div class="counter text-center" data-count="{{count($stocks)}}"></div></h1>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Ending soon</div>
                <div class="card-body">
                    <h1 class="card-title text-center">{{$min}}</h1>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Stock full</div>
                <div class="card-body">
                    <h1 class="card-title text-center">{{$max}}</h1>
                </div>
            </div>
        </div>

    </div>--}}

    <section id="tabs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inventory Items</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Delivered Items</a>

                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            <div class="table">
                                <a href="stocks/create" class="btn btn-primary float-right">+ Add Item</a>
                                <br><br>

                                <table class="table table-striped" id="myTable">
                                    <thead class="thead-dark">

                                    <th scope="col">Article no.</th>
                                    <th scope="col">Colour</th>
                                    <th scope="col">Qty.</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Collection</th>
                                    <th scope="col"></th>





                                    </thead>
                                    <tbody>

                                    @foreach($stocks as $stock)
                                        <tr>

                                            <th scope="row">{{$stock->article_no}}</th>
                                            <th>{{$stock->colour}}</th>
                                            <th>{{$stock->quantity}}</th>
                                            <th>{{$stock->location}}</th>
                                            <th>{{$stock->collection}}</th>


                                            <th>

                                                {!!Form::open(['action' => ['StocksController@destroy', $stock->article_no], 'method' => 'POST' ,'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                <a href="/stocks/{{$stock->article_no}}/edit" class="btn btn-warning">Edit</a>
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </th>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
