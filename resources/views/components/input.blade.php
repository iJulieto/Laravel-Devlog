@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#67bed9] focus:ring-[#67bed9] sm:text-sm p-2 border']) !!}>
