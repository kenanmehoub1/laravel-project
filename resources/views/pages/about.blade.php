@extends('layouts.app')

@section('title', __('messages.about'))

@section('content')
    <div class="max-w-4xl mx-auto">

        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ __('messages.about_title') }}
            </h1>

            <p class="text-gray-600 dark:text-gray-300 mt-2">
                {{ __('messages.about_subtitle') }}
            </p>
        </div>


        <!-- Our Mission -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 transition-colors duration-300">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">
                {{ __('messages.our_mission') }}
            </h2>

            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                {{ __('messages.our_mission_text') }}
            </p>
        </div>


        <!-- Vision & Values -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

            <!-- Our Vision -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 transition-colors duration-300">
                <div class="text-3xl mb-2">👁️</div>

                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                    {{ __('messages.our_vision') }}
                </h3>

                <p class="text-gray-600 dark:text-gray-300 mt-2">
                    {{ __('messages.our_vision_text') }}
                </p>
            </div>


            <!-- Our Values -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 transition-colors duration-300">
                <div class="text-3xl mb-2">💎</div>

                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                    {{ __('messages.our_values') }}
                </h3>

                <p class="text-gray-600 dark:text-gray-300 mt-2">
                    {{ __('messages.our_values_text') }}
                </p>
            </div>

        </div>


        <!-- Why Choose Us -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 mt-6 transition-colors duration-300">

            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">
                {{ __('messages.why_choose_us') }}
            </h2>

            <ul class="space-y-3 text-gray-600 dark:text-gray-300">

                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>{{ __('messages.why_choose_1') }}</span>
                </li>

                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>{{ __('messages.why_choose_2') }}</span>
                </li>

                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>{{ __('messages.why_choose_3') }}</span>
                </li>

                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>{{ __('messages.why_choose_4') }}</span>
                </li>

            </ul>
        </div>

    </div>
@endsection