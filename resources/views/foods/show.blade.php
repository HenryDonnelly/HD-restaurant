@extends('layouts.app')

@section('content')
<div class="container">
<h1>view food</h1>
<table class="table table-hover">
    <tbody>
        <tr>
            <td><strong> Name </strong> </td>
            <td>{{$food->name}}</td>
        </tr>

        <tr>
            <td><strong> description </strong> </td>
            <td>{{$food->description}}</td>
        </tr>

        <tr>
            <td><strong> category </strong> </td>
            <td>{{$food->category}}</td>
        </tr>

        <tr>
            <td><strong> price </strong> </td>
            <td>{{$food->price}}</td>
        </tr>

        <tr>
            <td><strong> Best before </strong> </td>
            <td>{{$food->best_before}}</td>
        </tr>

        <tr>
            <td><strong> picture </strong> </td>
            <td>{{$food->picture}}</td>
        </tr>



    </tbody>
</table>
</div>
@endsection
</div>
