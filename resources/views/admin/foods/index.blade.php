<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All foods') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-primary-button><a href="{{ route('admin.foods.create') }}" class="btn-link btn-lg mb-2">Add a food</a></x-primary-button>
            @forelse ($foods as $food)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('admin.foods.show', $food) }}">{{ $food->name }}</a>
                    </h2>
                    <p class="mt-2">

                        <h3 class="font-bold text-1xl"><strong>Supplier name</strong>
                            {{ $food->supplier->name }} </h3>

                        {{ $food->description }}
                        {{ $food->category }}
                        {{ $food->price }}
                        {{ $food->best_before }}
                        {{-- {{$food->restaurant->name}} --}}

                            <img src="{{ asset($food->picture) }}" class="img-fluid" alt="food Image">
                    </p>

                </div>
            @empty
                <p>No foods</p>
            @endforelse

        </div>
    </div>


</x-app-layout>



