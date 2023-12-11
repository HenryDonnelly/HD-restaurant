<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $restaurant->name }} - Books by this restaurant
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Display publisher details -->

            <h3 class="font-bold text-2xl mb-4">restaurant Details</h3>
            <p class="text-gray-700"><span class="font-bold">ID:</span> {{ $restaurant->name }}</p>
            <p class="text-gray-700"><span class="font-bold">Name:</span> {{ $restaurant->address }}</p>
            <p class="text-gray-700"><span class="font-bold">Address:</span> {{ $restaurant->phone_no }}</p>

            <!-- Display books for the publisher -->

            <h3 class="font-bold text-2xl mt-6 mb-4">Books by {{ $restaurant->name }}</h3>

            @forelse ($books as $book)
                <x-card>
                     <a href="{{ route('admin.foods.show', $book) }}" class="font-bold text-2xl">{{ $food->name }}</a>

                </x-card>
            @empty
                <p>No foods for this author</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
