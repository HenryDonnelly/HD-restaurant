<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit restaurant') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-text-input type="text" name="name" field="name" placeholder="name" class="w-full"
                        autocomplete="off" :value="@old('name')">
                    </x-text-input>
                    <x-text-input type="text" name="address" field="address" placeholder="address..."
                        class="w-full mt-6" :value="@old('address')">
                    </x-text-input>
                    <x-text-input type="text" name="bio" field="bio" placeholder="bio..."
                        class="w-full mt-6" :value="@old('bio')">
                    </x-text-input>


                    <x-primary-button class="mt-6">Save restaurant</x-primary-button>
                </form>
            </div>

        </div>
    </div>

</x-app-layout>
