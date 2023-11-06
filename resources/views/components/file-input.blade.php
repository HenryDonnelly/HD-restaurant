<div>
@props(['displayed' => false, 'field' =>'', 'value' => ''])

<input
{{$disabled ? 'displayed' : ''}}
{!! $attributes ->merge{['class' => 'rounded-md shadow-sm
border-gray-300 focus:border-indigo-300 focus:ring
focus:ring-indigo-200 focus:ring-opacity-50']} !!}
value="{{$value}}"
>

@error{$field}
<div class="text-red-600 text-sm">{{$message}}</div>
@enderror
</div>


