<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All restaurants') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-primary-button><a href="{{ route('admin.restaurants.create') }}" class="btn-link btn-lg mb-2">Add a restaurant</a></x-primary-button>
            @forelse ($restaurants as $restaurant)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('admin.restaurants.show', $restaurant) }}">{{ $restaurant->name }}</a>
                    </h2>
                    <p class="mt-2">

                        <h3 class="font-bold text-1xl"><strong>Restaurant name</strong>
                            {{ $restaurant->name }} </h3>
                        {{ $restaurant->address }}
                        {{ $restaurant->bio }}

                    </p>

                </div>
            @empty
                <p>No restaurants</p>
            @endforelse

        </div>
    </div>


</x-app-layout>



