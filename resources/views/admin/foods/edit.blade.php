@extends('layouts.app')

@section('content')
    <h3 class="text-center">Create food</h3>
    <form action="{{ route('admin.foods.update', $food)}}" method="post" enctype="multipart/form-data">
        @method('put')
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
        <div class="form-group">
            <label for="picture">Food picture</label>
            <input type="file" name="picture" id="picture" class="form-control {{ $errors->has('picture') ? 'is-invalid' : '' }}">
            @if($errors->has('picture'))
                <span class="invalid-feedback">
                    {{ $errors->first('picture') }}
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection


