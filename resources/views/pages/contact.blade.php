@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Side Cards -->
            <div class="space-y-8">
                <!-- Contact Information -->
                <x-card class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $contact_info_title }}</h3>
                    <div class="space-y-4 text-gray-600">
                        <p><strong>{{ $contact_address_label }}:</strong><br>{{ $contact_address }}</p>
                        <p><strong>{{ $contact_email_label }}:</strong><br>{{ $contact_email }}</p>
                        <p><strong>{{ $contact_phone_label }}:</strong><br>{{ $contact_phone }}</p>
                    </div>
                </x-card>

                <!-- Social Media -->
                <x-card class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $follow_us_title }}</h3>
                    <div class="flex flex-col space-y-3">
                        @foreach($social_links as $link)
                            <a href="{{ $link['url'] }}" class="text-gray-600 hover:text-[#67bed9] transition-colors font-medium">{{ $link['name'] }}</a>
                        @endforeach
                    </div>
                </x-card>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <x-card class="p-8 h-full">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $form_title }}</h2>
                    
                    <form action="#" method="POST" class="space-y-6" x-data @submit.prevent="$dispatch('notify', 'Message sent successfully!'); $el.reset();">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-label for="name" :value="$name_label" />
                                <x-input type="text" name="name" id="name" placeholder="{{ $name_placeholder }}" class="w-full mt-5" />
                            </div>

                            <div>
                                <x-label for="email" :value="$email_label" />
                                <x-input type="email" name="email" id="email" placeholder="{{ $email_placeholder }}" class="w-full mt-5" />
                            </div>
                        </div>

                        <div>
                            <x-label for="message" :value="$message_label" />
                            <x-textarea name="message" id="message" rows="6" placeholder="{{ $message_placeholder }}" class="w-full mt-5 mb-5"></x-textarea>
                        </div>

                        <div class="flex justify-center">
                            <x-button class="w-full md:w-3/4 p-8">
                                {{ $submit_button }}
                            </x-button>
                        </div>
                    </form>
                </x-card>
            </div>
        </div>
        
        <x-notification />
    </div>
@endsection