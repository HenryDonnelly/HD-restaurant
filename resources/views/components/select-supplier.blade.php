@props(['suppliers', 'field' => '','selected' => null])

<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @foreach ($suppliers as $supplier)
        <option value="{{ $supplier->id }}" {{ $selected == $supplier->id ? 'selected' : '' }}>
            {{ $supplier->name }}
        </option>
    @endforeach
</select>

@error($field)
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
