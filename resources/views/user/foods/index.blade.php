<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All foods') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            @forelse ($foods as $food)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('user.foods.show', $food) }}">{{ $food->name }}</a>
                    </h2>
                    <p class="mt-2">

                        {{ $food->description }}
                        {{ $food->category }}
                        {{ $food->price }}
                        {{ $food->best_before }}
                        @if ($food->picture)
                            <img src="{{ $food->picture }}" alt="{{ $food->name }}" width="100">
                        @else
                            No Image
                        @endif
                    </p>

                </div>
            @empty
                <p>No foods</p>
            @endforelse

        </div>
    </div>


</x-app-layout>


{{--
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
                        <td><a href="{{ route ('user.foods.show', $food)}}">{{ $food->name }}</a></td>
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




@endsection --}}
