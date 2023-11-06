@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <x-alert-success>
            {{session('success')}}
        </x-alert-success>
    </div>
</div>
    <h3 class="text-center">Create food</h3>
    <form action="{{ route('foods.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Food Name</label>
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                   value="{{ old('name') }}" placeholder="Enter name">
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    {{ $errors->first('name') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="category">Food Category</label>
            <input type="text" name="category" id="category" class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}"
                   value="{{ old('category') }}" placeholder="Enter food category">
            @if($errors->has('category'))
                <span class="invalid-feedback">
                    {{ $errors->first('category') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Food Description</label>
            <textarea name="description" id="description" rows="4" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                      placeholder="Enter food description">{{ old('description') }}</textarea>
            @if($errors->has('description'))
                <span class="invalid-feedback">
                    {{ $errors->first('description') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="price">Food Price</label>
            <input type="text" name="price" id="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                   value="{{ old('price') }}" placeholder="Enter food price">
            @if($errors->has('price'))
                <span class="invalid-feedback">
                    {{ $errors->first('price') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="best_before">Food Best Before Date</label>
            <input type="text" name="best_before" id="best_before" class="form-control {{ $errors->has('best_before') ? 'is-invalid' : '' }}"
                   value="{{ old('best_before') }}" placeholder="Enter food best_before date">
            @if($errors->has('best_before'))
                <span class="invalid-feedback">
                    {{ $errors->first('best_before') }}
                </span>
            @endif
        </div>
        <X-file-input type="file"
        name="book_image"
        placeholder="food"
        class="w-full mt-6"
        field="picture"
        ></X-file-input>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Food') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('foods.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                        type="text"
                        name="name"
                        field="name"
                        placeholder="name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('name')"></x-text-input>

                    <x-text-input
                        type="text"
                        name="category"
                        field="category"
                        placeholder="category..."
                        class="w-full mt-6"
                        :value="@old('category')"></x-text-input>

                    <!-- I created a new component called textarea, you will need to do the same to using the x-textarea component -->
                    <x-textarea
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="Description..."
                        class="w-full mt-6"
                        :value="@old('description')">
                    </x-textarea>

                    <x-textarea
                    name="price"
                    rows="10"
                    field="price"
                    placeholder="price..."
                    class="w-full mt-6"
                    :value="@old('price')">
                </x-textarea>

                    <div class="form-group">
                        <label for="title">food name</label>
                        <input type="text" name="title" id="title" class="form-control"{{$errors->has('title') ? 'is-invalid' : ''}}>
                    </div>

                    <x-primary-button class="mt-6">Save food</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> --}}
