@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center py-12">
        <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
            {{ $title }}
        </h1>
        <p class="mt-5 max-w-xl mx-auto text-xl text-white">
            {{ $subtitle }}
        </p>
    </div>

    <div class="mt-16 mb-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 relative">
            @foreach($steps as $step)
                <div class="relative flex flex-col items-center">
                    <x-card class="p-8 w-full h-full border-t-4 hover:-translate-y-1 transition-transform duration-300 z-10" style="border-color: {{ $step['color'] }}">
                        <div class="text-center">
                            <div class="h-14 w-14 mx-auto rounded-full flex items-center justify-center mb-6" style="background-color: {{ $step['color'] }}1a">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="color: {{ $step['color'] }}">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $step['icon'] }}" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $step['title'] }}</h3>
                            <p class="text-gray-500 leading-relaxed">{{ $step['description'] }}</p>
                        </div>
                    </x-card>
                    
                    @if(!$loop->last)
                        <!-- Arrow Desktop -->
                        <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 translate-x-1/2 z-0">
                            <svg class="w-24 h-12 text-black" viewBox="0 0 100 50" fill="none" stroke="currentColor">
                                <path d="M10 25 Q 50 {{ $loop->index % 2 == 0 ? '5' : '45' }} 90 25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M82 18 L 90 25 L 82 32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <!-- Arrow Mobile -->
                        <div class="lg:hidden my-4 text-black">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
