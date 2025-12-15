@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="relative flex justify-center items-center group h-96 select-none" x-data="{ active: 0, images: {{ json_encode($images) }} }">
                <div class="absolute w-64 h-64 bg-[#1ebab7]/30 rounded-full blur-3xl -top-4 -left-4 animate-pulse"></div>
                <div class="absolute w-64 h-64 bg-[#afd374]/30 rounded-full blur-3xl -bottom-4 -right-4 animate-pulse delay-1000"></div>
                
                <template x-for="(image, index) in images" :key="index">
                    <div @click="active = (active + 1) % images.length"
                         class="absolute w-80 h-64 bg-white p-3 rounded-3xl shadow-2xl transition-all duration-500 ease-out cursor-pointer transform origin-center border border-gray-100"
                         :class="{
                            'z-30 scale-105 rotate-0': active === index,
                            'z-20 scale-100 rotate-6 translate-x-8': (active + 1) % images.length === index,
                            'z-10 scale-95 -rotate-6 -translate-x-8': (active + 2) % images.length === index
                         }">
                        <img :src="image" class="w-full h-full object-cover rounded-2xl pointer-events-none bg-gray-50">
                    </div>
                </template>
            </div>
            <x-card class="p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $title }}</h2>
                    <div class="prose prose-indigo text-gray-500">
                        @foreach($content as $paragraph)
                            <p class="mb-4">{{ $paragraph }}</p>
                        @endforeach
                    </div>
            </x-card>
        </div>
    </div>
@endsection
