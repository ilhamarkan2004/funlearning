@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' bg-stone-300 border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm']) !!}>
