@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>All foods</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Best_before</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $food)
                    <tr>
                        <td><a href="{{ route ('foods.show', $food)}}">{{ $food->name }}</a></td>
                        <td>{{ $food->description }}</td>
                        <td>{{ $food->category }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->best_before }}</td>
                        <td>
                            @if ($food->picture)
                                <img src="{{ $food->picture }}" alt="{{ $food->name }}" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




@endsection
