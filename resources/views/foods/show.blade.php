@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <x-alert-success>
            {{session('success')}}
        </x-alert-success>
    </div>
</div>
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
<a href="{{ route('foods.edit', $food)}}">Edit</a>
<form action="{{route ('foods.destroy', $food)}}" method="post">
    @method('delete')
    @csrf
    <x-primary-button onclick="return confirm('are you sure you want to delete?')">Delete</x-primary-button>
</form>
</div>
@endsection
</div>
