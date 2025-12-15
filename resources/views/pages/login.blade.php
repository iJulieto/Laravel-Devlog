@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center w-full">
        <x-card class="w-full max-w-md p-8 shadow-2xl border-t-4 border-[#1ebab7]">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">{{ $title }}</h2>
                <p class="text-gray-500 mt-2">{{ $description }}</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6" x-data @submit.prevent="$dispatch('notify', 'We\'re still working on it. Please bear with us!');">
                @csrf

                <div>
                    <x-label for="email" value="Email" />
                    <x-input id="email" class="block mt-1 w-full focus:border-[#1ebab7] focus:ring-[#1ebab7]" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div x-data="{ showPassword: false }">
                    <x-label for="password" value="Password" />
                    <div class="relative mt-1">
                        <x-input id="password" class="block w-full focus:border-[#1ebab7] focus:ring-[#1ebab7] pr-10" type="password" ::type="showPassword ? 'text' : 'password'" name="password" required autocomplete="current-password" />
                        <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#1ebab7] shadow-sm focus:ring-[#1ebab7]" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-[#67bed9] hover:text-[#afd374] transition-colors duration-300" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-sm text-sm font-bold text-black bg-[#67bed9] hover:bg-[#afd374] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#67bed9] transition-all duration-300 transform hover:-translate-y-1">
                        Login
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-medium text-[#67bed9] hover:text-[#afd374] transition-colors duration-300">
                        Sign Up
                    </a>
                </p>
            </div>
        </x-card>
        <x-notification />
    </div>
@endsection