<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All restaurants') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            @forelse ($restaurants as $restaurant)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('user.restaurants.show', $restaurant) }}">{{ $restaurant->name }}</a>
                    </h2>
                    <p class="mt-2">

                        <h3 class="font-bold text-1xl"><strong>Supplier name</strong>
                            {{ $restaurant->supplier->name }} </h3>

                        {{ $restaurant->description }}
                        {{ $restaurant->category }}
                        {{ $restaurant->price }}
                        {{ $restaurant->best_before }}
                        @if ($restaurant->picture)
                            <img src="{{ $restaurant->picture }}" alt="{{ $restaurant->name }}" width="100">
                        @else
                            No Image
                        @endif
                    </p>

                </div>
            @empty
                <p>No restaurants</p>
            @endforelse

        </div>
    </div>


</x-app-layout>


{{--
 @extends('layouts.app')
@section('content')
    <div class="container">
        <h1>All restaurants</h1>
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
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <td><a href="{{ route ('user.restaurants.show', $restaurant)}}">{{ $restaurant->name }}</a></td>
                        <td>{{ $restaurant->description }}</td>
                        <td>{{ $restaurant->category }}</td>
                        <td>{{ $restaurant->price }}</td>
                        <td>{{ $restaurant->best_before }}</td>
                        <td>
                            @if ($restaurant->picture)
                                <img src="{{ $restaurant->picture }}" alt="{{ $restaurant->name }}" width="100">
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
