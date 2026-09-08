@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')

    {{-- =====================================================
        HERO
    ====================================================== --}}
    <section class="relative min-h-[680px] lg:min-h-[760px] overflow-hidden">

        {{-- صورة دبي الرئيسية --}}
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/dubai-hero.webp') }}"
                alt="{{ __('messages.hero_alt') }}"
                class="w-full h-full object-cover"
            >
        </div>

        {{-- طبقة الوضع النهاري --}}
        <div class="absolute inset-0
                    bg-white/65
                    dark:bg-slate-950/75
                    transition-colors duration-500">
        </div>

        {{-- تدرج إضافي --}}
        <div class="absolute inset-0
                    bg-gradient-to-b
                    from-white/40
                    via-white/20
                    to-white
                    dark:from-slate-950/40
                    dark:via-slate-950/30
                    dark:to-slate-950">
        </div>

        <div class="relative z-10
                    max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            {{-- =================================================
                HERO CONTENT
            ================================================== --}}
            <div class="text-center
                        pt-24 sm:pt-28 lg:pt-32
                        max-w-4xl mx-auto">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2
                            rounded-full
                            px-4 py-2
                            bg-white/90 dark:bg-slate-900/90
                            backdrop-blur-md
                            border border-white/70 dark:border-slate-700
                            shadow-sm
                            text-blue-600 dark:text-blue-400
                            text-sm font-semibold">

                    <svg class="w-4 h-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>

                    {{ __('messages.hero_badge') }}

                </div>

                {{-- العنوان --}}
                <h1 class="mt-6
                           text-4xl sm:text-5xl lg:text-6xl
                           font-extrabold
                           leading-tight
                           tracking-tight
                           text-slate-950
                           dark:text-white">

                    {{ __('messages.hero_title') }}

                    <span class="block mt-2
                                 text-blue-600
                                 dark:text-blue-400">

                        {{ __('messages.hero_title_highlight') }}

                    </span>

                </h1>

                {{-- الوصف --}}
                <p class="mt-6
                          max-w-2xl mx-auto
                          text-base sm:text-lg
                          leading-8
                          font-medium
                          text-slate-700
                          dark:text-slate-200">

                    {{ __('messages.hero_description') }}

                </p>

            </div>

            {{-- =================================================
                CATEGORY CARDS
            ================================================== --}}
            <div class="relative
                        mt-12 sm:mt-14 lg:mt-16
                        pb-12 lg:pb-16">

                <div class="grid grid-cols-2
                            sm:grid-cols-3
                            lg:grid-cols-6
                            gap-3 sm:gap-4 lg:gap-5">

                    {{-- فيلا --}}
                    <a href="{{ route('properties') }}"
                       class="property-category group">
                        <div class="category-card">
                            <div class="category-icon
                                        bg-blue-50
                                        dark:bg-blue-950/60
                                        text-blue-600
                                        dark:text-blue-400">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21h18M5 21V10l7-6 7 6v11M9 21v-6h6v6"/>
                                </svg>
                            </div>
                            <h3 class="category-title">{{ __('messages.category_villa') }}</h3>
                            <span class="category-arrow">←</span>
                        </div>
                    </a>

                    {{-- شقق --}}
                    <a href="{{ route('properties') }}"
                       class="property-category group">
                        <div class="category-card">
                            <div class="category-icon
                                        bg-cyan-50
                                        dark:bg-cyan-950/60
                                        text-cyan-600
                                        dark:text-cyan-400">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 21V6a2 2 0 012-2h8a2 2 0 012 2v15M16 9h3a1 1 0 011 1v11M8 8h2M8 12h2M8 16h2M12 8h1M12 12h1M12 16h1M3 21h18"/>
                                </svg>
                            </div>
                            <h3 class="category-title">{{ __('messages.category_apartments') }}</h3>
                            <span class="category-arrow">←</span>
                        </div>
                    </a>

                    {{-- عقارات فاخرة --}}
                    <a href="{{ route('properties') }}"
                       class="property-category group">
                        <div class="category-card">
                            <div class="category-icon
                                        bg-amber-50
                                        dark:bg-amber-950/50
                                        text-amber-500
                                        dark:text-amber-400">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3l2.6 5.27L20.5 9.1l-4.25 4.14 1 5.85L12 16.35l-5.25 2.74 1-5.85L3.5 9.1l5.9-.83L12 3z"/>
                                </svg>
                            </div>
                            <h3 class="category-title">{{ __('messages.category_luxury') }}</h3>
                            <span class="category-arrow">←</span>
                        </div>
                    </a>

                    {{-- أراضي --}}
                    <a href="{{ route('properties') }}"
                       class="property-category group">
                        <div class="category-card">
                            <div class="category-icon
                                        bg-emerald-50
                                        dark:bg-emerald-950/50
                                        text-emerald-600
                                        dark:text-emerald-400">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 20h18M5 17c3-3 5-4 8-2 2 1 4 1 6-2M5 17v3M19 13v7M8 12c1-3 3-5 6-6"/>
                                </svg>
                            </div>
                            <h3 class="category-title">{{ __('messages.category_land') }}</h3>
                            <span class="category-arrow">←</span>
                        </div>
                    </a>

                    {{-- عقارات جاهزة --}}
                    <a href="{{ route('properties') }}"
                       class="property-category group">
                        <div class="category-card">
                            <div class="category-icon
                                        bg-violet-50
                                        dark:bg-violet-950/50
                                        text-violet-600
                                        dark:text-violet-400">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 21V9l8-6 8 6v12M8 21v-7h8v7M9 10h6"/>
                                    <circle cx="18" cy="18" r="3"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.8 18l.8.8 1.6-1.7"/>
                                </svg>
                            </div>
                            <h3 class="category-title">{{ __('messages.category_ready') }}</h3>
                            <span class="category-arrow">←</span>
                        </div>
                    </a>

                    {{-- المشاريع على الخريطة --}}
                    <a href="{{ route('properties') }}"
                       class="property-category group">
                        <div class="category-card">
                            <div class="category-icon
                                        bg-sky-50
                                        dark:bg-sky-950/50
                                        text-sky-600
                                        dark:text-sky-400">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 19l6-4 6 3 6-4M3 5l6-3 6 3 6-3M9 2v13M15 5v13M21 2v16"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 7a3 3 0 100 6 3 3 0 000-6z"/>
                                </svg>
                            </div>
                            <h3 class="category-title">{{ __('messages.category_projects') }}</h3>
                            <span class="category-arrow">←</span>
                        </div>
                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- =====================================================
        FEATURED PROPERTIES
    ====================================================== --}}
    <section class="py-20 lg:py-24
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <span class="inline-flex items-center gap-2
                             rounded-full
                             px-4 py-2
                             bg-blue-50
                             dark:bg-blue-950/50
                             text-blue-600
                             dark:text-blue-400
                             text-sm font-semibold">

                    <svg class="w-4 h-4"
                         fill="currentColor"
                         viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.036a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.036a1 1 0 00-1.176 0l-2.802 2.036c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L3 8.72c-.783-.57-.38-1.81.588-1.81H7.05a1 1 0 00.95-.69l1.049-3.293z"/>
                    </svg>

                    {{ __('messages.featured_badge') }}

                </span>

                <h2 class="mt-5
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.featured_title') }}

                </h2>

                <p class="mt-4
                          max-w-2xl mx-auto
                          text-slate-600
                          dark:text-slate-400">

                    {{ __('messages.featured_subtitle') }}

                </p>

            </div>

            {{-- كروت العقارات --}}
            <div class="grid grid-cols-1
                        sm:grid-cols-2
                        lg:grid-cols-4
                        gap-6">

                @php
                    $featuredProperties = [
                        [
                            'image' => '1.jpg',
                            'type' => __('messages.for_sale'),
                            'price' => '$1,250,000',
                            'title' => __('messages.property_1_title'),
                            'location' => __('messages.property_1_location'),
                            'beds' => __('messages.property_1_beds'),
                            'baths' => __('messages.property_1_baths'),
                            'area' => __('messages.property_1_area'),
                        ],
                        [
                            'image' => '1.jpg',
                            'type' => __('messages.for_rent'),
                            'price' => '$75,000',
                            'title' => __('messages.property_2_title'),
                            'location' => __('messages.property_2_location'),
                            'beds' => __('messages.property_2_beds'),
                            'baths' => __('messages.property_2_baths'),
                            'area' => __('messages.property_2_area'),
                        ],
                        [
                            'image' => '1.jpg',
                            'type' => __('messages.for_sale'),
                            'price' => '$2,800,000',
                            'title' => __('messages.property_3_title'),
                            'location' => __('messages.property_3_location'),
                            'beds' => __('messages.property_3_beds'),
                            'baths' => __('messages.property_3_baths'),
                            'area' => __('messages.property_3_area'),
                        ],
                        [
                            'image' => '1.jpg',
                            'type' => __('messages.for_rent'),
                            'price' => '$55,000',
                            'title' => __('messages.property_4_title'),
                            'location' => __('messages.property_4_location'),
                            'beds' => __('messages.property_4_beds'),
                            'baths' => __('messages.property_4_baths'),
                            'area' => __('messages.property_4_area'),
                        ],
                    ];
                @endphp

                @foreach($featuredProperties as $property)

                    <article class="group
                                   overflow-hidden
                                   rounded-2xl
                                   bg-white
                                   dark:bg-slate-900
                                   border border-slate-200
                                   dark:border-slate-800
                                   shadow-sm
                                   hover:shadow-xl
                                   transition-all duration-300
                                   hover:-translate-y-1">

                        {{-- الصورة --}}
                        <div class="relative h-56 overflow-hidden">

                            <img
                                src="{{ asset('images/' . $property['image']) }}"
                                alt="{{ $property['title'] }}"
                                class="w-full h-full object-cover
                                       transition-transform duration-500
                                       group-hover:scale-105"
                            >

                            {{-- نوع العقار --}}
                            <span class="absolute top-4 right-4
                                         px-3 py-1.5
                                         rounded-full
                                         bg-blue-600
                                         text-white
                                         text-xs font-semibold">

                                {{ $property['type'] }}

                            </span>

                            {{-- المفضلة --}}
                            <button type="button"
                                    class="absolute top-4 left-4
                                           w-10 h-10
                                           rounded-full
                                           bg-white/95
                                           flex items-center justify-center
                                           text-slate-600
                                           hover:text-red-500
                                           transition-colors">

                                <svg class="w-5 h-5"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.7"
                                          d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/>
                                </svg>

                            </button>

                        </div>

                        {{-- المعلومات --}}
                        <div class="p-5">

                            <div class="flex items-center justify-between gap-3">

                                <span class="text-xl font-extrabold
                                             text-blue-600
                                             dark:text-blue-400">

                                    {{ $property['price'] }}

                                </span>

                            </div>

                            <h3 class="mt-3
                                       font-bold
                                       text-slate-900
                                       dark:text-white
                                       line-clamp-1">

                                {{ $property['title'] }}

                            </h3>

                            <p class="mt-2
                                      text-sm
                                      text-slate-500
                                      dark:text-slate-400">

                                {{ $property['location'] }}

                            </p>

                            {{-- التفاصيل --}}
                            <div class="flex items-center gap-4
                                        mt-5 pt-4
                                        border-t
                                        border-slate-100
                                        dark:border-slate-800
                                        text-sm
                                        text-slate-500
                                        dark:text-slate-400">

                                <span>{{ $property['beds'] }}</span>
                                <span>{{ $property['baths'] }}</span>
                                <span>{{ $property['area'] }}</span>

                            </div>

                            <a href="{{ route('properties') }}"
                               class="flex items-center justify-between
                                      mt-5
                                      text-sm font-semibold
                                      text-blue-600
                                      dark:text-blue-400
                                      hover:text-blue-700
                                      dark:hover:text-blue-300">

                                {{ __('messages.view_details') }}

                                <span class="transition-transform
                                             group-hover:-translate-x-1">
                                    ←
                                </span>

                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

            {{-- زر جميع العقارات --}}
            <div class="text-center mt-10">

                <a href="{{ route('properties') }}"
                   class="inline-flex items-center gap-3
                          px-7 py-3
                          rounded-xl
                          bg-blue-600
                          hover:bg-blue-700
                          text-white
                          font-semibold
                          shadow-md
                          hover:shadow-lg
                          transition-all duration-300">

                    {{ __('messages.view_all_properties') }}

                    <span>←</span>

                </a>

            </div>

        </div>

    </section>

    {{-- =====================================================
        ABOUT / WHY US
    ====================================================== --}}
    <section class="py-20 lg:py-24
                    bg-slate-50
                    dark:bg-slate-900
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1
                        lg:grid-cols-2
                        gap-12 lg:gap-20
                        items-center">

                {{-- الصور --}}
                <div class="relative">

                    <div class="grid grid-cols-2 gap-4">

                        <img
                            src="{{ asset('images/3.jpg') }}"
                            alt="{{ __('messages.about_image_alt') }}"
                            class="w-full h-80
                                   object-cover
                                   rounded-3xl
                                   shadow-lg"
                        >

                        <div class="space-y-4 pt-10">

                            <img
                                src="{{ asset('images/4.jpg') }}"
                                alt="{{ __('messages.about_image_alt') }}"
                                class="w-full h-36
                                       object-cover
                                       rounded-3xl
                                       shadow-lg"
                            >

                            <img
                                src="{{ asset('images/5.jpg') }}"
                                alt="{{ __('messages.about_image_alt_2') }}"
                                class="w-full h-36
                                       object-cover
                                       rounded-3xl
                                       shadow-lg"
                            >

                        </div>

                    </div>

                    {{-- بطاقة صغيرة --}}
                    <div class="absolute
                                bottom-5 right-5
                                bg-white
                                dark:bg-slate-900
                                rounded-2xl
                                shadow-xl
                                border
                                border-slate-100
                                dark:border-slate-700
                                px-5 py-4">

                        <div class="text-2xl font-extrabold
                                    text-blue-600
                                    dark:text-blue-400">

                            +10

                        </div>

                        <div class="text-sm
                                    text-slate-600
                                    dark:text-slate-400">

                            {{ __('messages.years_experience') }}

                        </div>

                    </div>

                </div>

                {{-- النص --}}
                <div>

                    <span class="inline-block
                                 px-4 py-2
                                 rounded-full
                                 bg-blue-100
                                 dark:bg-blue-950
                                 text-blue-600
                                 dark:text-blue-400
                                 text-sm font-semibold">

                        {{ __('messages.why_us_badge') }}

                    </span>

                    <h2 class="mt-5
                               text-3xl sm:text-4xl
                               font-extrabold
                               text-slate-900
                               dark:text-white
                               leading-tight">

                        {{ __('messages.why_us_title') }}

                    </h2>

                    <p class="mt-5
                              text-lg
                              leading-8
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.why_us_text') }}

                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-8">

                        <div class="flex gap-3">

                            <div class="flex-shrink-0
                                        w-11 h-11
                                        rounded-xl
                                        bg-blue-100
                                        dark:bg-blue-950
                                        text-blue-600
                                        dark:text-blue-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <div>

                                <h3 class="font-bold
                                           text-slate-900
                                           dark:text-white">

                                    {{ __('messages.why_feature_1_title') }}

                                </h3>

                                <p class="text-sm mt-1
                                          text-slate-500
                                          dark:text-slate-400">

                                    {{ __('messages.why_feature_1_desc') }}

                                </p>

                            </div>

                        </div>

                        <div class="flex gap-3">

                            <div class="flex-shrink-0
                                        w-11 h-11
                                        rounded-xl
                                        bg-teal-100
                                        dark:bg-teal-950
                                        text-teal-600
                                        dark:text-teal-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <div>

                                <h3 class="font-bold
                                           text-slate-900
                                           dark:text-white">

                                    {{ __('messages.why_feature_2_title') }}

                                </h3>

                                <p class="text-sm mt-1
                                          text-slate-500
                                          dark:text-slate-400">

                                    {{ __('messages.why_feature_2_desc') }}

                                </p>

                            </div>

                        </div>

                        <div class="flex gap-3">

                            <div class="flex-shrink-0
                                        w-11 h-11
                                        rounded-xl
                                        bg-violet-100
                                        dark:bg-violet-950
                                        text-violet-600
                                        dark:text-violet-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <div>

                                <h3 class="font-bold
                                           text-slate-900
                                           dark:text-white">

                                    {{ __('messages.why_feature_3_title') }}

                                </h3>

                                <p class="text-sm mt-1
                                          text-slate-500
                                          dark:text-slate-400">

                                    {{ __('messages.why_feature_3_desc') }}

                                </p>

                            </div>

                        </div>

                        <div class="flex gap-3">

                            <div class="flex-shrink-0
                                        w-11 h-11
                                        rounded-xl
                                        bg-amber-100
                                        dark:bg-amber-950
                                        text-amber-600
                                        dark:text-amber-400
                                        flex items-center justify-center">

                                ✓

                            </div>

                            <div>

                                <h3 class="font-bold
                                           text-slate-900
                                           dark:text-white">

                                    {{ __('messages.why_feature_4_title') }}

                                </h3>

                                <p class="text-sm mt-1
                                          text-slate-500
                                          dark:text-slate-400">

                                    {{ __('messages.why_feature_4_desc') }}

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- =====================================================
        HOW IT WORKS
    ====================================================== --}}
    <section class="py-20 lg:py-24
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-6xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center">

                <span class="text-blue-600
                             dark:text-blue-400
                             font-semibold text-sm">

                    {{ __('messages.how_it_works_badge') }}

                </span>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.how_it_works_title') }}

                </h2>

                <p class="mt-4
                          text-slate-600
                          dark:text-slate-400">

                    {{ __('messages.how_it_works_subtitle') }}

                </p>

            </div>

            <div class="grid grid-cols-1
                        md:grid-cols-3
                        gap-8 mt-14">

                <div class="text-center">

                    <div class="relative mx-auto
                                w-20 h-20
                                rounded-2xl
                                bg-blue-50
                                dark:bg-blue-950
                                text-blue-600
                                dark:text-blue-400
                                flex items-center justify-center">

                        <span class="text-2xl font-extrabold">
                            01
                        </span>

                    </div>

                    <h3 class="mt-6
                               text-xl font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.step_1_title') }}

                    </h3>

                    <p class="mt-3
                              leading-7
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.step_1_desc') }}

                    </p>

                </div>

                <div class="text-center">

                    <div class="mx-auto
                                w-20 h-20
                                rounded-2xl
                                bg-teal-50
                                dark:bg-teal-950
                                text-teal-600
                                dark:text-teal-400
                                flex items-center justify-center">

                        <span class="text-2xl font-extrabold">
                            02
                        </span>

                    </div>

                    <h3 class="mt-6
                               text-xl font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.step_2_title') }}

                    </h3>

                    <p class="mt-3
                              leading-7
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.step_2_desc') }}

                    </p>

                </div>

                <div class="text-center">

                    <div class="mx-auto
                                w-20 h-20
                                rounded-2xl
                                bg-violet-50
                                dark:bg-violet-950
                                text-violet-600
                                dark:text-violet-400
                                flex items-center justify-center">

                        <span class="text-2xl font-extrabold">
                            03
                        </span>

                    </div>

                    <h3 class="mt-6
                               text-xl font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.step_3_title') }}

                    </h3>

                    <p class="mt-3
                              leading-7
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.step_3_desc') }}

                    </p>

                </div>

            </div>

        </div>

    </section>

    {{-- =====================================================
        CTA
    ====================================================== --}}
    <section class="py-8 sm:py-12
                    bg-white
                    dark:bg-slate-950">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden
                        rounded-3xl
                        min-h-[280px]
                        flex items-center">

                <img
                    src="{{ asset('images/dubai-hero.webp') }}"
                    alt="{{ __('messages.cta_image_alt') }}"
                    class="absolute inset-0
                           w-full h-full
                           object-cover"
                >

                <div class="absolute inset-0
                            bg-slate-950/65">
                </div>

                <div class="relative z-10
                            w-full
                            px-6 sm:px-10 lg:px-16
                            py-12
                            text-white">

                    <div class="max-w-2xl">

                        <span class="text-blue-300
                                     font-semibold">

                            {{ __('messages.cta_badge') }}

                        </span>

                        <h2 class="mt-3
                                   text-3xl sm:text-4xl
                                   font-extrabold">

                            {{ __('messages.cta_title') }}

                        </h2>

                        <p class="mt-4
                                  text-slate-200
                                  leading-7">

                            {{ __('messages.cta_text') }}

                        </p>

                        <a href="{{ route('properties') }}"
                           class="inline-flex items-center gap-3
                                  mt-7
                                  px-6 py-3
                                  rounded-xl
                                  bg-white
                                  text-blue-600
                                  font-bold
                                  hover:bg-blue-50
                                  transition-colors">

                            {{ __('messages.cta_button') }}

                            <span>←</span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- =====================================================
        CUSTOM CATEGORY CARD STYLES
    ====================================================== --}}
    <style>
        .category-card {
            min-height: 170px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1.25rem 0.75rem;
            border-radius: 1.25rem;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            backdrop-filter: blur(12px);
            transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
        }

        .dark .category-card {
            background: rgba(15, 23, 42, 0.94);
            border-color: rgba(51, 65, 85, 0.9);
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
        }

        .property-category:hover .category-card {
            transform: translateY(-9px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.14);
            border-color: rgba(59, 130, 246, 0.35);
        }

        .dark .property-category:hover .category-card {
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45);
            border-color: rgba(96, 165, 250, 0.45);
        }

        .category-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1rem;
            transition: transform 300ms ease, background-color 300ms ease;
        }

        .property-category:hover .category-icon {
            transform: scale(1.06);
        }

        .category-title {
            margin-top: 1rem;
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            transition: color 300ms ease;
        }

        .dark .category-title {
            color: #f8fafc;
        }

        .property-category:hover .category-title {
            color: #2563eb;
        }

        .dark .property-category:hover .category-title {
            color: #60a5fa;
        }

        .category-arrow {
            margin-top: 0.35rem;
            color: #2563eb;
            opacity: 0;
            transform: translateY(5px);
            transition: opacity 300ms ease, transform 300ms ease;
        }

        .property-category:hover .category-arrow {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 640px) {
            .category-card {
                min-height: 145px;
            }
            .category-icon {
                width: 52px;
                height: 52px;
            }
            .category-icon svg {
                width: 30px;
                height: 30px;
            }
            .category-title {
                font-size: 0.85rem;
            }
        }
    </style>

@endsection