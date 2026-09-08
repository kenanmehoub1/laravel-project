@extends('layouts.app')

@section('title', __('messages.about'))

@section('content')

    {{-- =====================================================
        HERO
    ====================================================== --}}
    <section class="relative overflow-hidden
                    bg-slate-50
                    dark:bg-slate-950
                    transition-colors duration-300">

        {{-- Decorative Background --}}
        <div class="absolute -top-32 -right-32
                    w-96 h-96
                    rounded-full
                    bg-blue-100/70
                    dark:bg-blue-900/10
                    blur-3xl">
        </div>

        <div class="absolute -bottom-40 -left-32
                    w-96 h-96
                    rounded-full
                    bg-cyan-100/60
                    dark:bg-cyan-900/10
                    blur-3xl">
        </div>

        <div class="relative max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center
                        py-16 sm:py-20 lg:py-24">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2
                            px-4 py-2
                            rounded-full
                            bg-blue-50
                            dark:bg-blue-950/50
                            border border-blue-100
                            dark:border-blue-900
                            text-blue-600
                            dark:text-blue-400
                            text-sm font-semibold">

                    <svg class="w-4 h-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11v10a1 1 0 01-1 1h-3m-6 0h6"/>
                    </svg>

                    {{ __('messages.about_badge') }}

                </div>

                <h1 class="mt-6
                           text-4xl sm:text-5xl lg:text-6xl
                           font-extrabold
                           tracking-tight
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.about_title') }}

                </h1>

                <p class="max-w-3xl mx-auto
                          mt-6
                          text-base sm:text-lg
                          leading-8
                          text-slate-600
                          dark:text-slate-300">

                    {{ __('messages.about_description') }}

                </p>

            </div>

        </div>

    </section>


    {{-- =====================================================
        STATS
    ====================================================== --}}
    <section class="relative -mt-8
                    pb-12
                    bg-slate-50
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-6xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-2
                        lg:grid-cols-4
                        gap-4 sm:gap-6">

                {{-- Stat 1 --}}
                <div class="bg-white
                            dark:bg-slate-900
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-5 sm:p-7
                            text-center
                            shadow-sm">

                    <div class="text-3xl sm:text-4xl
                                font-extrabold
                                text-blue-600
                                dark:text-blue-400">

                        +500

                    </div>

                    <p class="mt-2
                              text-sm
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.stat_properties') }}

                    </p>

                </div>

                {{-- Stat 2 --}}
                <div class="bg-white
                            dark:bg-slate-900
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-5 sm:p-7
                            text-center
                            shadow-sm">

                    <div class="text-3xl sm:text-4xl
                                font-extrabold
                                text-blue-600
                                dark:text-blue-400">

                        +20

                    </div>

                    <p class="mt-2
                              text-sm
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.stat_areas') }}

                    </p>

                </div>

                {{-- Stat 3 --}}
                <div class="bg-white
                            dark:bg-slate-900
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-5 sm:p-7
                            text-center
                            shadow-sm">

                    <div class="text-3xl sm:text-4xl
                                font-extrabold
                                text-blue-600
                                dark:text-blue-400">

                        24/7

                    </div>

                    <p class="mt-2
                              text-sm
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.stat_access') }}

                    </p>

                </div>

                {{-- Stat 4 --}}
                <div class="bg-white
                            dark:bg-slate-900
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-5 sm:p-7
                            text-center
                            shadow-sm">

                    <div class="text-3xl sm:text-4xl
                                font-extrabold
                                text-blue-600
                                dark:text-blue-400">

                        دبي

                    </div>

                    <p class="mt-2
                              text-sm
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.stat_market') }}

                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        OUR MISSION
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1
                        lg:grid-cols-2
                        gap-10 lg:gap-16
                        items-center">

                {{-- Image --}}
                <div class="relative
                            order-2 lg:order-1">

                    <div class="relative
                                h-80 sm:h-96 lg:h-[500px]
                                rounded-3xl
                                overflow-hidden
                                bg-slate-100
                                dark:bg-slate-900">

                        <img
                            src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1200&q=85"
                            alt="{{ __('messages.mission_image_alt') }}"
                            class="w-full h-full
                                   object-cover">

                        <div class="absolute inset-0
                                    bg-gradient-to-t
                                    from-black/50
                                    via-black/10
                                    to-transparent">
                        </div>

                        <div class="absolute
                                    bottom-6
                                    right-6
                                    left-6
                                    text-white">

                            <p class="text-sm
                                      font-medium
                                      text-white/80">

                                {{ __('messages.mission_image_text') }}

                            </p>

                            <h3 class="mt-1
                                       text-2xl sm:text-3xl
                                       font-bold">

                                {{ __('messages.mission_image_title') }}

                            </h3>

                        </div>

                    </div>

                </div>

                {{-- Content --}}
                <div class="order-1 lg:order-2">

                    <span class="text-sm
                                 font-semibold
                                 text-blue-600
                                 dark:text-blue-400">

                        {{ __('messages.about_section_badge') }}

                    </span>

                    <h2 class="mt-3
                               text-3xl sm:text-4xl
                               font-extrabold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.mission_title') }}

                    </h2>

                    <p class="mt-6
                              text-slate-600
                              dark:text-slate-400
                              leading-8">

                        {{ __('messages.mission_text_1') }}

                    </p>

                    <p class="mt-4
                              text-slate-600
                              dark:text-slate-400
                              leading-8">

                        {{ __('messages.mission_text_2') }}

                    </p>

                    {{-- Features --}}
                    <div class="mt-8
                                space-y-4">

                        <div class="flex items-start gap-3">

                            <div class="mt-1
                                        w-6 h-6
                                        flex-shrink-0
                                        rounded-full
                                        bg-blue-50
                                        dark:bg-blue-950
                                        text-blue-600
                                        dark:text-blue-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <p class="text-slate-700
                                      dark:text-slate-300">

                                {{ __('messages.mission_feature_1') }}

                            </p>

                        </div>

                        <div class="flex items-start gap-3">

                            <div class="mt-1
                                        w-6 h-6
                                        flex-shrink-0
                                        rounded-full
                                        bg-blue-50
                                        dark:bg-blue-950
                                        text-blue-600
                                        dark:text-blue-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <p class="text-slate-700
                                      dark:text-slate-300">

                                {{ __('messages.mission_feature_2') }}

                            </p>

                        </div>

                        <div class="flex items-start gap-3">

                            <div class="mt-1
                                        w-6 h-6
                                        flex-shrink-0
                                        rounded-full
                                        bg-blue-50
                                        dark:bg-blue-950
                                        text-blue-600
                                        dark:text-blue-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <p class="text-slate-700
                                      dark:text-slate-300">

                                {{ __('messages.mission_feature_3') }}

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        VISION & VALUES
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-slate-50
                    dark:bg-slate-900
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center
                        max-w-3xl
                        mx-auto
                        mb-12">

                <span class="text-sm
                             font-semibold
                             text-blue-600
                             dark:text-blue-400">

                    {{ __('messages.vision_badge') }}

                </span>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.vision_title') }}

                </h2>

            </div>

            <div class="grid grid-cols-1
                        lg:grid-cols-2
                        gap-6">

                {{-- Vision --}}
                <div class="group
                            rounded-3xl
                            bg-white
                            dark:bg-slate-950
                            border border-slate-200
                            dark:border-slate-800
                            p-7 sm:p-9
                            shadow-sm
                            hover:-translate-y-1
                            hover:shadow-xl
                            transition-all duration-300">

                    <div class="w-14 h-14
                                rounded-2xl
                                bg-blue-50
                                dark:bg-blue-950
                                text-blue-600
                                dark:text-blue-400
                                flex items-center justify-center">

                        <svg class="w-7 h-7"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6z"/>
                            <circle
                                cx="12"
                                cy="12"
                                r="2.5"
                                stroke-width="1.8"/>
                        </svg>

                    </div>

                    <h3 class="mt-6
                               text-2xl
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.vision_title_short') }}

                    </h3>

                    <p class="mt-4
                              leading-8
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.vision_text') }}

                    </p>

                </div>

                {{-- Values --}}
                <div class="group
                            rounded-3xl
                            bg-white
                            dark:bg-slate-950
                            border border-slate-200
                            dark:border-slate-800
                            p-7 sm:p-9
                            shadow-sm
                            hover:-translate-y-1
                            hover:shadow-xl
                            transition-all duration-300">

                    <div class="w-14 h-14
                                rounded-2xl
                                bg-amber-50
                                dark:bg-amber-950
                                text-amber-600
                                dark:text-amber-400
                                flex items-center justify-center">

                        <svg class="w-7 h-7"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 3l2.8 5.7L21 9.6l-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"/>
                        </svg>

                    </div>

                    <h3 class="mt-6
                               text-2xl
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.values_title') }}

                    </h3>

                    <p class="mt-4
                              leading-8
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.values_text') }}

                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        DUBAI AREAS
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center
                        max-w-3xl
                        mx-auto
                        mb-12">

                <span class="text-sm
                             font-semibold
                             text-blue-600
                             dark:text-blue-400">

                    {{ __('messages.areas_badge') }}

                </span>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.areas_title') }}

                </h2>

                <p class="mt-4
                          leading-7
                          text-slate-600
                          dark:text-slate-400">

                    {{ __('messages.areas_subtitle') }}

                </p>

            </div>

            <div class="grid grid-cols-1
                        sm:grid-cols-2
                        lg:grid-cols-4
                        gap-5">

                {{-- Downtown --}}
                <div class="group relative
                            h-64
                            overflow-hidden
                            rounded-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1518684079-3c830dcef090?auto=format&fit=crop&w=800&q=85"
                        alt="{{ __('messages.downtown') }}"
                        class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition-transform duration-700">

                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/70
                                via-black/20
                                to-transparent">
                    </div>

                    <div class="absolute
                                bottom-5
                                right-5
                                text-white">

                        <h3 class="text-xl
                                   font-bold">

                            {{ __('messages.downtown') }}

                        </h3>

                        <p class="mt-1
                                  text-sm
                                  text-white/80">

                            {{ __('messages.downtown_en') }}

                        </p>

                    </div>

                </div>

                {{-- Marina --}}
                <div class="group relative
                            h-64
                            overflow-hidden
                            rounded-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=85"
                        alt="{{ __('messages.marina') }}"
                        class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition-transform duration-700">

                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/70
                                via-black/20
                                to-transparent">
                    </div>

                    <div class="absolute
                                bottom-5
                                right-5
                                text-white">

                        <h3 class="text-xl
                                   font-bold">

                            {{ __('messages.marina') }}

                        </h3>

                        <p class="mt-1
                                  text-sm
                                  text-white/80">

                            {{ __('messages.marina_en') }}

                        </p>

                    </div>

                </div>

                {{-- Business Bay --}}
                <div class="group relative
                            h-64
                            overflow-hidden
                            rounded-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1518684079-3c830dcef090?auto=format&fit=crop&w=800&q=85"
                        alt="{{ __('messages.business_bay') }}"
                        class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition-transform duration-700">

                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/70
                                via-black/20
                                to-transparent">
                    </div>

                    <div class="absolute
                                bottom-5
                                right-5
                                text-white">

                        <h3 class="text-xl
                                   font-bold">

                            {{ __('messages.business_bay') }}

                        </h3>

                        <p class="mt-1
                                  text-sm
                                  text-white/80">

                            {{ __('messages.business_bay_en') }}

                        </p>

                    </div>

                </div>

                {{-- Palm Jumeirah --}}
                <div class="group relative
                            h-64
                            overflow-hidden
                            rounded-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=85"
                        alt="{{ __('messages.palm_jumeirah') }}"
                        class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition-transform duration-700">

                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/70
                                via-black/20
                                to-transparent">
                    </div>

                    <div class="absolute
                                bottom-5
                                right-5
                                text-white">

                        <h3 class="text-xl
                                   font-bold">

                            {{ __('messages.palm_jumeirah') }}

                        </h3>

                        <p class="mt-1
                                  text-sm
                                  text-white/80">

                            {{ __('messages.palm_jumeirah_en') }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        WHY CHOOSE US
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-slate-50
                    dark:bg-slate-900
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center
                        max-w-3xl
                        mx-auto
                        mb-12">

                <span class="text-sm
                             font-semibold
                             text-blue-600
                             dark:text-blue-400">

                    {{ __('messages.why_badge') }}

                </span>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.why_title') }}

                </h2>

            </div>

            <div class="grid grid-cols-1
                        sm:grid-cols-2
                        lg:grid-cols-4
                        gap-5">

                @php
                    $features = [
                        [
                            'title' => __('messages.why_feature_1_title'),
                            'text' => __('messages.why_feature_1_text'),
                            'icon' => '🏠',
                        ],
                        [
                            'title' => __('messages.why_feature_2_title'),
                            'text' => __('messages.why_feature_2_text'),
                            'icon' => '⌕',
                        ],
                        [
                            'title' => __('messages.why_feature_3_title'),
                            'text' => __('messages.why_feature_3_text'),
                            'icon' => '✓',
                        ],
                        [
                            'title' => __('messages.why_feature_4_title'),
                            'text' => __('messages.why_feature_4_text'),
                            'icon' => '◆',
                        ],
                    ];
                @endphp

                @foreach ($features as $feature)

                    <div class="group
                                bg-white
                                dark:bg-slate-950
                                border border-slate-200
                                dark:border-slate-800
                                rounded-2xl
                                p-6
                                shadow-sm
                                hover:-translate-y-1
                                hover:shadow-xl
                                transition-all duration-300">

                        <div class="w-12 h-12
                                    rounded-xl
                                    bg-blue-50
                                    dark:bg-blue-950
                                    text-blue-600
                                    dark:text-blue-400
                                    flex items-center justify-center
                                    text-xl">

                            {{ $feature['icon'] }}

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-slate-900
                                   dark:text-white">

                            {{ $feature['title'] }}

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  leading-7
                                  text-slate-600
                                  dark:text-slate-400">

                            {{ $feature['text'] }}

                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =====================================================
        HOW IT WORKS - PROCESS
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-6xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center
                        mb-12">

                <span class="text-sm
                             font-semibold
                             text-blue-600
                             dark:text-blue-400">

                    {{ __('messages.process_badge') }}

                </span>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.process_title') }}

                </h2>

            </div>

            <div class="grid grid-cols-1
                        md:grid-cols-3
                        gap-8">

                {{-- Step 1 --}}
                <div class="relative text-center">

                    <div class="mx-auto
                                w-16 h-16
                                rounded-2xl
                                bg-blue-600
                                text-white
                                flex items-center justify-center
                                text-xl
                                font-bold">

                        01

                    </div>

                    <h3 class="mt-5
                               text-xl
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.step_1_title') }}

                    </h3>

                    <p class="mt-3
                              text-slate-600
                              dark:text-slate-400
                              leading-7">

                        {{ __('messages.step_1_desc') }}

                    </p>

                </div>

                {{-- Step 2 --}}
                <div class="relative text-center">

                    <div class="mx-auto
                                w-16 h-16
                                rounded-2xl
                                bg-blue-600
                                text-white
                                flex items-center justify-center
                                text-xl
                                font-bold">

                        02

                    </div>

                    <h3 class="mt-5
                               text-xl
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.step_2_title') }}

                    </h3>

                    <p class="mt-3
                              text-slate-600
                              dark:text-slate-400
                              leading-7">

                        {{ __('messages.step_2_desc') }}

                    </p>

                </div>

                {{-- Step 3 --}}
                <div class="relative text-center">

                    <div class="mx-auto
                                w-16 h-16
                                rounded-2xl
                                bg-blue-600
                                text-white
                                flex items-center justify-center
                                text-xl
                                font-bold">

                        03

                    </div>

                    <h3 class="mt-5
                               text-xl
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.step_3_title') }}

                    </h3>

                    <p class="mt-3
                              text-slate-600
                              dark:text-slate-400
                              leading-7">

                        {{ __('messages.step_3_desc') }}

                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        CTA
    ====================================================== --}}
    <section class="py-10 sm:py-14
                    bg-white
                    dark:bg-slate-950">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden
                        rounded-3xl
                        bg-blue-600
                        dark:bg-blue-900
                        px-6 sm:px-10 lg:px-16
                        py-12 sm:py-16">

                <div class="absolute
                            -top-32 -left-20
                            w-80 h-80
                            rounded-full
                            bg-white/10">
                </div>

                <div class="absolute
                            -bottom-40 -right-20
                            w-96 h-96
                            rounded-full
                            bg-white/10">
                </div>

                <div class="relative z-10
                            max-w-3xl
                            mx-auto
                            text-center">

                    <h2 class="text-3xl sm:text-4xl
                               font-extrabold
                               text-white">

                        {{ __('messages.cta_title') }}

                    </h2>

                    <p class="mt-4
                              text-blue-100
                              leading-8">

                        {{ __('messages.cta_text') }}

                    </p>

                    <div class="mt-7
                                flex flex-col
                                sm:flex-row
                                justify-center
                                gap-3">

                        <a
                            href="{{ route('properties') }}"
                            class="inline-flex
                                   items-center
                                   justify-center
                                   gap-2
                                   rounded-xl
                                   bg-white
                                   text-blue-600
                                   font-bold
                                   px-7 py-3.5
                                   hover:bg-blue-50
                                   transition-colors">

                            {{ __('messages.cta_properties') }}

                            <span>←</span>

                        </a>

                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex
                                   items-center
                                   justify-center
                                   rounded-xl
                                   border border-white/30
                                   text-white
                                   font-bold
                                   px-7 py-3.5
                                   hover:bg-white/10
                                   transition-colors">

                            {{ __('messages.cta_contact') }}

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection