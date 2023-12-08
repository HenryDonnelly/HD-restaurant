<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Food') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.foods.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-text-input type="text" name="name" field="name" placeholder="name" class="w-full"
                        autocomplete="off" :value="@old('name')">
                    </x-text-input>
                    <x-text-input type="text" name="category" field="category" placeholder="category..."
                        class="w-full mt-6" :value="@old('category')">
                    </x-text-input>
                    <x-text-input type="text" name="description" field="description" placeholder="description..."
                        class="w-full mt-6" :value="@old('description')">
                    </x-text-input>

                    <x-text-input type="text" name="price" field="price" placeholder="price..."
                        class="w-full mt-6" :value="@old('price')">
                    </x-text-input>
                    <x-text-input type="text" name="best_before" field="best_before" placeholder="best_before..."
                        class="w-full mt-6" :value="@old('best_before')">
                    </x-text-input>

                    <x-file-input type="file" name="picture" placeholder="Food" class="w-full mt-6" field="picture"
                        :value="@old('picture')">>
                    </x-file-input>
                    <div class="mt-6">
                        <x-select-supplier name="supplier_id" :suppliers="$suppliers" :selected="old('supplier_id')"/>
                    </div>
                    <x-primary-button class="mt-6">Save Book</x-primary-button>
                </form>
            </div>

        </div>
    </div>

</x-app-layout>
