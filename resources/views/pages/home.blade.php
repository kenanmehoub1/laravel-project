@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')
    <div class="text-center py-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
            {{ __('messages.welcome') }}
        </h1>

        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
            {{ __('messages.welcome_subtitle') }}
        </p>

        <div class="mt-8">
            <a href="{{ route('properties') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition duration-300">
                {{ __('messages.browse_properties') }}
            </a>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">

        <!-- Easy Search -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 text-center transition-colors duration-300">
            <div class="text-4xl mb-3">🔍</div>

            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                {{ __('messages.easy_search') }}
            </h3>

            <p class="text-gray-600 dark:text-gray-300 mt-2">
                {{ __('messages.easy_search_desc') }}
            </p>
        </div>


        <!-- Quality Listings -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 text-center transition-colors duration-300">
            <div class="text-4xl mb-3">🏡</div>

            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                {{ __('messages.quality_listings') }}
            </h3>

            <p class="text-gray-600 dark:text-gray-300 mt-2">
                {{ __('messages.quality_listings_desc') }}
            </p>
        </div>


        <!-- Trusted Agents -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 text-center transition-colors duration-300">
            <div class="text-4xl mb-3">🤝</div>

            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                {{ __('messages.trusted_agents') }}
            </h3>

            <p class="text-gray-600 dark:text-gray-300 mt-2">
                {{ __('messages.trusted_agents_desc') }}
            </p>
        </div>

    </div>
@endsection