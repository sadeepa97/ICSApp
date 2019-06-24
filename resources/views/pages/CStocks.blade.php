@extends('layouts.app')



@section('content')
    <h1>Current Stocks</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Article number</th>
            <th scope="col">colour</th>
            <th scope="col">Quantity</th>
            <th scope="col">Location</th>
            <th scope="col">Collection</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>JS00002</th>
            <td>blue</td>
            <td>250</td>
            <td>Left 32</td>
            <td>summer 2020</td>
        </tr>
        <tr>
            <th>565476</th>
            <td>black</td>
            <td>50</td>
            <td>Left 21</td>
            <td>special</td>
        </tr>
        <tr>
            <th>762476</th>
            <td>nude</td>
            <td>100</td>
            <td>Glass table 14</td>
            <td>customer specified</td>
        </tr>
        </tbody>
    </table>


@endsection
