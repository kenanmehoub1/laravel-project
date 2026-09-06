@extends('layouts.app')

@section('title', $property->title)

@section('content')

    @php
        /*
        |--------------------------------------------------------------------------
        | Prepare Gallery Images
        |--------------------------------------------------------------------------
        */

        $galleryImages = [];

        // Add main image first
        if (
            $property->main_image &&
            file_exists(storage_path('app/public/' . $property->main_image))
        ) {
            $galleryImages[] = $property->main_image;
        }

        // Add additional images
        if ($property->images && count($property->images) > 0) {

            foreach ($property->images as $image) {

                // Prevent duplicate main image
                if ($image != $property->main_image) {

                    if (file_exists(storage_path('app/public/' . $image))) {
                        $galleryImages[] = $image;
                    }

                }

            }

        }
    @endphp


    <div class="max-w-6xl mx-auto">


        {{-- =========================================================
             Breadcrumb
        ========================================================== --}}

        <nav
            class="text-sm
                   text-gray-500
                   dark:text-gray-400
                   mb-6
                   transition-colors
                   duration-300"
        >

            <a
                href="{{ route('home') }}"
                class="hover:text-blue-600
                       dark:hover:text-blue-400
                       transition"
            >
                {{ __('messages.home') }}
            </a>

            <span class="mx-2">/</span>

            <a
                href="{{ route('properties') }}"
                class="hover:text-blue-600
                       dark:hover:text-blue-400
                       transition"
            >
                {{ __('messages.properties') }}
            </a>

            <span class="mx-2">/</span>

            <span
                class="text-gray-800
                       dark:text-gray-200"
            >
                {{ $property->title }}
            </span>

        </nav>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">


            {{-- =========================================================
                 PROPERTY GALLERY
            ========================================================== --}}

            <div class="lg:col-span-2">

                @if(count($galleryImages) > 0)


                    {{-- =================================================
                         Main Slider
                    ================================================== --}}

                    <div
                        class="bg-white
                               dark:bg-gray-800
                               rounded-xl
                               shadow-md
                               border
                               border-gray-200
                               dark:border-gray-700
                               overflow-hidden
                               transition-colors
                               duration-300"
                    >

                        <div
                            id="propertyGallery"
                            class="relative
                                   h-96
                                   bg-gray-100
                                   dark:bg-gray-900
                                   group
                                   overflow-hidden"
                        >


                            {{-- Main Image --}}

                            <img
                                id="mainPropertyImage"
                                src="{{ asset('storage/' . $galleryImages[0]) }}"
                                alt="{{ $property->title }}"
                                onclick="openLightbox()"
                                class="w-full
                                       h-full
                                       object-cover
                                       cursor-zoom-in
                                       transition-all
                                       duration-300
                                       select-none"
                            >


                            {{-- =================================================
                                 Available / Sold Badge
                            ================================================== --}}

                            @if($property->is_available)

                                <span
                                    class="absolute
                                           top-4
                                           left-4
                                           bg-green-500/90
                                           text-white
                                           text-sm
                                           font-semibold
                                           px-4
                                           py-2
                                           rounded-lg
                                           shadow-lg
                                           z-10"
                                >
                                    ✅ {{ __('messages.available_badge') }}
                                </span>

                            @else

                                <span
                                    class="absolute
                                           top-4
                                           left-4
                                           bg-red-500/90
                                           text-white
                                           text-sm
                                           font-semibold
                                           px-4
                                           py-2
                                           rounded-lg
                                           shadow-lg
                                           z-10"
                                >
                                    ❌ {{ __('messages.sold_badge') }}
                                </span>

                            @endif


                            {{-- =================================================
                                 Market Type Badge
                            ================================================== --}}

                            @if($property->market_type)

                                <span
                                    class="absolute
                                           top-4
                                           right-4

                                           {{ $property->market_type == 'primary'
                                               ? 'bg-green-500/90'
                                               : 'bg-blue-500/90'
                                           }}

                                           text-white
                                           text-sm
                                           font-semibold
                                           px-4
                                           py-2
                                           rounded-lg
                                           shadow-lg
                                           z-10"
                                >

                                    {{ $property->market_type == 'primary'
                                        ? __('messages.primary_market')
                                        : __('messages.secondary_market')
                                    }}

                                </span>

                            @endif


                            {{-- =================================================
                                 Previous Arrow
                            ================================================== --}}

                            @if(count($galleryImages) > 1)

                                <button
                                    type="button"
                                    onclick="previousImage()"
                                    aria-label="Previous image"
                                    class="absolute
                                           left-3
                                           top-1/2
                                           -translate-y-1/2
                                           w-10
                                           h-10
                                           rounded-full
                                           bg-white/60
                                           dark:bg-gray-900/60
                                           hover:bg-white/90
                                           dark:hover:bg-gray-900/90
                                           text-gray-700
                                           dark:text-gray-200
                                           shadow-md
                                           flex
                                           items-center
                                           justify-center
                                           opacity-0
                                           group-hover:opacity-100
                                           transition-all
                                           duration-300
                                           hover:scale-105
                                           z-20"
                                >

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 19l-7-7 7-7"
                                        />

                                    </svg>

                                </button>


                                {{-- Next Arrow --}}

                                <button
                                    type="button"
                                    onclick="nextImage()"
                                    aria-label="Next image"
                                    class="absolute
                                           right-3
                                           top-1/2
                                           -translate-y-1/2
                                           w-10
                                           h-10
                                           rounded-full
                                           bg-white/60
                                           dark:bg-gray-900/60
                                           hover:bg-white/90
                                           dark:hover:bg-gray-900/90
                                           text-gray-700
                                           dark:text-gray-200
                                           shadow-md
                                           flex
                                           items-center
                                           justify-center
                                           opacity-0
                                           group-hover:opacity-100
                                           transition-all
                                           duration-300
                                           hover:scale-105
                                           z-20"
                                >

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 5l7 7-7 7"
                                        />

                                    </svg>

                                </button>

                            @endif


                            {{-- =================================================
                                 Image Counter
                            ================================================== --}}

                            @if(count($galleryImages) > 1)

                                <div
                                    id="imageCounter"
                                    class="absolute
                                           bottom-3
                                           left-1/2
                                           -translate-x-1/2
                                           bg-black/50
                                           text-white
                                           text-xs
                                           px-3
                                           py-1
                                           rounded-full
                                           z-10"
                                >
                                    1 / {{ count($galleryImages) }}
                                </div>

                            @endif


                            {{-- =================================================
                                 Zoom Hint
                            ================================================== --}}

                            <div
                                class="absolute
                                       bottom-3
                                       right-3
                                       bg-black/50
                                       text-white
                                       text-xs
                                       px-3
                                       py-1.5
                                       rounded-full
                                       opacity-0
                                       group-hover:opacity-100
                                       transition
                                       duration-300
                                       pointer-events-none"
                            >
                                Click to enlarge
                            </div>

                        </div>


                        {{-- =================================================
                             Thumbnails Slider
                        ================================================== --}}

                        @if(count($galleryImages) > 1)

                            <div
                                class="relative
                                       px-10
                                       py-3
                                       bg-white
                                       dark:bg-gray-800
                                       transition-colors
                                       duration-300"
                            >


                                {{-- Thumbnail Previous --}}

                                <button
                                    type="button"
                                    onclick="scrollThumbnails('left')"
                                    aria-label="Scroll thumbnails left"
                                    class="absolute
                                           left-1
                                           top-1/2
                                           -translate-y-1/2
                                           w-8
                                           h-8
                                           rounded-full
                                           bg-gray-100
                                           dark:bg-gray-700
                                           hover:bg-gray-200
                                           dark:hover:bg-gray-600
                                           text-gray-600
                                           dark:text-gray-200
                                           shadow-sm
                                           flex
                                           items-center
                                           justify-center
                                           transition
                                           z-10"
                                >

                                    <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 19l-7-7 7-7"
                                        />

                                    </svg>

                                </button>


                                {{-- Thumbnails Container --}}

                                <div
                                    id="thumbnailContainer"
                                    class="flex
                                           gap-3
                                           overflow-x-auto
                                           scroll-smooth
                                           snap-x
                                           snap-mandatory
                                           scrollbar-hide"
                                >

                                    @foreach($galleryImages as $index => $image)

                                        <button
                                            type="button"
                                            onclick="goToImage({{ $index }})"
                                            data-thumbnail="{{ $index }}"
                                            aria-label="View image {{ $index + 1 }}"
                                            class="thumbnail
                                                   flex-shrink-0
                                                   snap-start
                                                   w-24
                                                   h-20
                                                   rounded-lg
                                                   overflow-hidden
                                                   border-2

                                                   {{ $index == 0
                                                       ? 'border-blue-500 ring-2 ring-blue-100 dark:ring-blue-900'
                                                       : 'border-transparent'
                                                   }}

                                                   hover:border-blue-400
                                                   transition-all
                                                   duration-200"
                                        >

                                            <img
                                                src="{{ asset('storage/' . $image) }}"
                                                alt="{{ $property->title }}"
                                                class="w-full
                                                       h-full
                                                       object-cover"
                                            >

                                        </button>

                                    @endforeach

                                </div>


                                {{-- Thumbnail Next --}}

                                <button
                                    type="button"
                                    onclick="scrollThumbnails('right')"
                                    aria-label="Scroll thumbnails right"
                                    class="absolute
                                           right-1
                                           top-1/2
                                           -translate-y-1/2
                                           w-8
                                           h-8
                                           rounded-full
                                           bg-gray-100
                                           dark:bg-gray-700
                                           hover:bg-gray-200
                                           dark:hover:bg-gray-600
                                           text-gray-600
                                           dark:text-gray-200
                                           shadow-sm
                                           flex
                                           items-center
                                           justify-center
                                           transition
                                           z-10"
                                >

                                    <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 5l7 7-7 7"
                                        />

                                    </svg>

                                </button>

                            </div>

                        @endif

                    </div>


                @else


                    {{-- =================================================
                         No Image
                    ================================================== --}}

                    <div
                        class="bg-gray-200
                               dark:bg-gray-800
                               rounded-xl
                               h-96
                               flex
                               items-center
                               justify-center
                               border
                               border-gray-200
                               dark:border-gray-700"
                    >

                        <span
                            class="text-gray-400
                                   dark:text-gray-500
                                   text-6xl"
                        >
                            🏠
                        </span>

                    </div>

                @endif

            </div>


            {{-- =========================================================
                 PROPERTY INFO
            ========================================================== --}}

            <div class="lg:col-span-1">

                <div
                    class="bg-white
                           dark:bg-gray-800
                           rounded-xl
                           shadow-md
                           border
                           border-gray-200
                           dark:border-gray-700
                           p-6
                           sticky
                           top-6
                           transition-colors
                           duration-300"
                >


                    {{-- Title --}}

                    <h1
                        class="text-2xl
                               font-bold
                               text-gray-900
                               dark:text-white
                               mb-2"
                    >
                        {{ $property->title }}
                    </h1>


                    {{-- Location --}}

                    <p
                        class="text-gray-600
                               dark:text-gray-400
                               text-sm
                               flex
                               items-center
                               mb-4"
                    >

                        <svg
                            class="w-5
                                   h-5
                                   mr-2
                                   text-gray-400
                                   dark:text-gray-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                            />

                        </svg>

                        {{ $property->location ?? $property->city ?? 'Location not specified' }}

                    </p>


                    {{-- =================================================
                         Market Type
                    ================================================== --}}

                    @if($property->market_type)

                        <div class="mb-4">

                            <div
                                class="flex
                                       items-center
                                       justify-between
                                       bg-gray-50
                                       dark:bg-gray-700/50
                                       border
                                       border-gray-100
                                       dark:border-gray-700
                                       rounded-lg
                                       p-3"
                            >

                                <span
                                    class="text-sm
                                           text-gray-500
                                           dark:text-gray-400"
                                >
                                    Market Type
                                </span>


                                @if($property->market_type == 'primary')

                                    <span
                                        class="bg-green-100
                                               dark:bg-green-900/30
                                               text-green-700
                                               dark:text-green-400
                                               text-sm
                                               font-semibold
                                               px-3
                                               py-1
                                               rounded-full"
                                    >
                                        {{ __('messages.primary_market') }}
                                    </span>

                                @else

                                    <span
                                        class="bg-blue-100
                                               dark:bg-blue-900/30
                                               text-blue-700
                                               dark:text-blue-400
                                               text-sm
                                               font-semibold
                                               px-3
                                               py-1
                                               rounded-full"
                                    >
                                        {{ __('messages.secondary_market') }}
                                    </span>

                                @endif

                            </div>

                        </div>

                    @endif


                    {{-- =================================================
                         Price
                    ================================================== --}}

                    <div
                        class="bg-blue-50
                               dark:bg-blue-900/20
                               rounded-lg
                               p-4
                               mb-4"
                    >

                        <p
                            class="text-sm
                                   text-gray-600
                                   dark:text-gray-400"
                        >
                            {{ __('messages.price') }}
                        </p>

                        <p
                            class="text-3xl
                                   font-bold
                                   text-blue-600
                                   dark:text-blue-400"
                        >
                            ${{ number_format($property->price, 0) }}
                        </p>

                    </div>


                    {{-- =================================================
                         Property Details
                    ================================================== --}}

                    <div class="space-y-3 mb-4">

                        <h3
                            class="text-sm
                                   font-semibold
                                   text-gray-700
                                   dark:text-gray-300
                                   uppercase
                                   tracking-wider"
                        >
                            {{ __('messages.property_details') }}
                        </h3>


                        <div class="grid grid-cols-2 gap-3">


                            {{-- Bedrooms --}}

                            @if($property->bedrooms)

                                <div
                                    class="bg-gray-50
                                           dark:bg-gray-700/50
                                           rounded-lg
                                           p-3
                                           text-center"
                                >

                                    <p
                                        class="text-2xl
                                               font-bold
                                               text-gray-800
                                               dark:text-white"
                                    >
                                        {{ $property->bedrooms }}
                                    </p>

                                    <p
                                        class="text-xs
                                               text-gray-500
                                               dark:text-gray-400"
                                    >
                                        {{ __('messages.bedrooms') }}
                                    </p>

                                </div>

                            @endif


                            {{-- Bathrooms --}}

                            @if($property->bathrooms)

                                <div
                                    class="bg-gray-50
                                           dark:bg-gray-700/50
                                           rounded-lg
                                           p-3
                                           text-center"
                                >

                                    <p
                                        class="text-2xl
                                               font-bold
                                               text-gray-800
                                               dark:text-white"
                                    >
                                        {{ $property->bathrooms }}
                                    </p>

                                    <p
                                        class="text-xs
                                               text-gray-500
                                               dark:text-gray-400"
                                    >
                                        {{ __('messages.bathrooms') }}
                                    </p>

                                </div>

                            @endif


                            {{-- Area --}}

                            @if($property->area)

                                <div
                                    class="bg-gray-50
                                           dark:bg-gray-700/50
                                           rounded-lg
                                           p-3
                                           text-center"
                                >

                                    <p
                                        class="text-2xl
                                               font-bold
                                               text-gray-800
                                               dark:text-white"
                                    >
                                        {{ $property->area }}
                                    </p>

                                    <p
                                        class="text-xs
                                               text-gray-500
                                               dark:text-gray-400"
                                    >
                                        {{ __('messages.area') }} (m²)
                                    </p>

                                </div>

                            @endif


                            {{-- Price Per Meter --}}

                            @if($property->price_per_meter)

                                <div
                                    class="bg-gray-50
                                           dark:bg-gray-700/50
                                           rounded-lg
                                           p-3
                                           text-center"
                                >

                                    <p
                                        class="text-2xl
                                               font-bold
                                               text-gray-800
                                               dark:text-white"
                                    >
                                        ${{ number_format($property->price_per_meter, 0) }}
                                    </p>

                                    <p
                                        class="text-xs
                                               text-gray-500
                                               dark:text-gray-400"
                                    >
                                        {{ __('messages.price_per_meter') }}
                                    </p>

                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- =================================================
                         Additional Information
                    ================================================== --}}

                    <div
                        class="border-t
                               border-gray-200
                               dark:border-gray-700
                               pt-4
                               space-y-2
                               text-sm"
                    >

                        @if($property->building_age)

                            <div class="flex justify-between">

                                <span
                                    class="text-gray-500
                                           dark:text-gray-400"
                                >
                                    {{ __('messages.building_age') }}:
                                </span>

                                <span
                                    class="text-gray-800
                                           dark:text-gray-200
                                           font-medium"
                                >
                                    {{ $property->building_age }}
                                    {{ __('messages.years') }}
                                </span>

                            </div>

                        @endif


                        @if($property->floor_number && $property->total_floors)

                            <div class="flex justify-between">

                                <span
                                    class="text-gray-500
                                           dark:text-gray-400"
                                >
                                    {{ __('messages.floor') }}:
                                </span>

                                <span
                                    class="text-gray-800
                                           dark:text-gray-200
                                           font-medium"
                                >
                                    {{ $property->floor_number }}
                                    /
                                    {{ $property->total_floors }}
                                </span>

                            </div>

                        @endif


                        @if($property->furnishing_status)

                            <div class="flex justify-between">

                                <span
                                    class="text-gray-500
                                           dark:text-gray-400"
                                >
                                    {{ __('messages.furnishing') }}:
                                </span>

                                <span
                                    class="text-gray-800
                                           dark:text-gray-200
                                           font-medium
                                           capitalize"
                                >
                                    {{ str_replace('_', ' ', $property->furnishing_status) }}
                                </span>

                            </div>

                        @endif


                        @if($property->view)

                            <div class="flex justify-between">

                                <span
                                    class="text-gray-500
                                           dark:text-gray-400"
                                >
                                    {{ __('messages.view_label') }}:
                                </span>

                                <span
                                    class="text-gray-800
                                           dark:text-gray-200
                                           font-medium"
                                >
                                    {{ $property->view }}
                                </span>

                            </div>

                        @endif


                        @if($property->address)

                            <div
                                class="flex
                                       justify-between
                                       gap-4"
                            >

                                <span
                                    class="text-gray-500
                                           dark:text-gray-400"
                                >
                                    {{ __('messages.address') }}:
                                </span>

                                <span
                                    class="text-gray-800
                                           dark:text-gray-200
                                           font-medium
                                           text-right"
                                >
                                    {{ $property->address }}
                                </span>

                            </div>

                        @endif


                        @if($property->created_at)

                            <div class="flex justify-between">

                                <span
                                    class="text-gray-500
                                           dark:text-gray-400"
                                >
                                    {{ __('messages.listed_date') }}:
                                </span>

                                <span
                                    class="text-gray-800
                                           dark:text-gray-200
                                           font-medium"
                                >
                                    {{ $property->created_at->format('M d, Y') }}
                                </span>

                            </div>

                        @endif

                    </div>


                    {{-- =================================================
                         Description
                    ================================================== --}}

                    @if($property->description)

                        <div
                            class="border-t
                                   border-gray-200
                                   dark:border-gray-700
                                   pt-4
                                   mt-4"
                        >

                            <h3
                                class="text-sm
                                       font-semibold
                                       text-gray-700
                                       dark:text-gray-300
                                       uppercase
                                       tracking-wider
                                       mb-2"
                            >
                                {{ __('messages.description') }}
                            </h3>

                            <p
                                class="text-gray-600
                                       dark:text-gray-400
                                       text-sm
                                       leading-relaxed"
                            >
                                {{ $property->description }}
                            </p>

                        </div>

                    @endif


                    {{-- =================================================
                         Contact Agent
                    ================================================== --}}

                    <a
                        href="{{ route('contact') }}"
                        class="block
                               text-center
                               mt-6
                               bg-blue-600
                               hover:bg-blue-700
                               text-white
                               font-semibold
                               px-6
                               py-3
                               rounded-lg
                               transition
                               duration-300"
                    >
                        {{ __('messages.contact_agent') }}
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- ================================================================
         LIGHTBOX
    ================================================================= --}}

    @if(count($galleryImages) > 0)

        <div
            id="imageLightbox"
            class="fixed
                   inset-0
                   bg-black/95
                   z-[9999]
                   hidden
                   items-center
                   justify-center
                   p-4"
        >


            {{-- Close Button --}}

            <button
                type="button"
                onclick="closeLightbox()"
                aria-label="Close"
                class="absolute
                       top-5
                       right-5
                       w-10
                       h-10
                       rounded-full
                       bg-white/10
                       hover:bg-white/20
                       text-white
                       text-2xl
                       flex
                       items-center
                       justify-center
                       transition
                       z-30"
            >
                &times;
            </button>


            {{-- Fullscreen Image Container --}}

            <div
                id="lightboxImageContainer"
                class="w-full
                       h-full
                       flex
                       items-center
                       justify-center
                       overflow-auto
                       select-none"
            >

                <img
                    id="lightboxImage"
                    src="{{ asset('storage/' . $galleryImages[0]) }}"
                    alt="{{ $property->title }}"
                    class="max-w-[90vw]
                           max-h-[85vh]
                           object-contain
                           transition-transform
                           duration-200
                           cursor-zoom-in"
                >

            </div>


            {{-- Previous Button --}}

            @if(count($galleryImages) > 1)

                <button
                    type="button"
                    onclick="previousImage()"
                    aria-label="Previous image"
                    class="absolute
                           left-5
                           top-1/2
                           -translate-y-1/2
                           w-12
                           h-12
                           rounded-full
                           bg-white/10
                           hover:bg-white/20
                           text-white
                           flex
                           items-center
                           justify-center
                           transition
                           z-30"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        />

                    </svg>

                </button>


                {{-- Next Button --}}

                <button
                    type="button"
                    onclick="nextImage()"
                    aria-label="Next image"
                    class="absolute
                           right-5
                           top-1/2
                           -translate-y-1/2
                           w-12
                           h-12
                           rounded-full
                           bg-white/10
                           hover:bg-white/20
                           text-white
                           flex
                           items-center
                           justify-center
                           transition
                           z-30"
                >

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        />

                    </svg>

                </button>

            @endif


            {{-- Zoom Controls --}}

            <div
                class="absolute
                       bottom-5
                       left-5
                       flex
                       items-center
                       gap-2
                       z-30"
            >

                <button
                    type="button"
                    onclick="zoomOut()"
                    aria-label="Zoom out"
                    class="w-10
                           h-10
                           rounded-full
                           bg-white/10
                           hover:bg-white/20
                           text-white
                           text-xl
                           flex
                           items-center
                           justify-center
                           transition"
                >
                    −
                </button>


                <button
                    type="button"
                    onclick="zoomIn()"
                    aria-label="Zoom in"
                    class="w-10
                           h-10
                           rounded-full
                           bg-white/10
                           hover:bg-white/20
                           text-white
                           text-xl
                           flex
                           items-center
                           justify-center
                           transition"
                >
                    +
                </button>

            </div>


            {{-- Lightbox Counter --}}

            @if(count($galleryImages) > 1)

                <div
                    id="lightboxCounter"
                    class="absolute
                           bottom-5
                           left-1/2
                           -translate-x-1/2
                           bg-white/10
                           text-white
                           px-4
                           py-2
                           rounded-full
                           text-sm
                           z-30"
                >
                    1 / {{ count($galleryImages) }}
                </div>

            @endif

        </div>

    @endif


    {{-- ================================================================
         JAVASCRIPT
    ================================================================= --}}

    <script>

        /*
        |--------------------------------------------------------------------------
        | Gallery Images
        |--------------------------------------------------------------------------
        */

        const galleryImages = @json(
            collect($galleryImages)
                ->map(fn($image) => asset('storage/' . $image))
                ->values()
        );


        /*
        |--------------------------------------------------------------------------
        | Current Image
        |--------------------------------------------------------------------------
        */

        let currentImageIndex = 0;


        /*
        |--------------------------------------------------------------------------
        | Zoom
        |--------------------------------------------------------------------------
        */

        let zoomLevel = 1;


        /*
        |--------------------------------------------------------------------------
        | Update Gallery
        |--------------------------------------------------------------------------
        */

        function updateGallery() {

            if (!galleryImages.length) {
                return;
            }


            const imageUrl =
                galleryImages[currentImageIndex];


            const mainImage =
                document.getElementById(
                    'mainPropertyImage'
                );


            const lightboxImage =
                document.getElementById(
                    'lightboxImage'
                );


            /*
            |--------------------------------------------------------------------------
            | Main Image
            |--------------------------------------------------------------------------
            */

            if (mainImage) {

                mainImage.classList.add(
                    'opacity-0'
                );


                setTimeout(() => {

                    mainImage.src = imageUrl;

                    mainImage.classList.remove(
                        'opacity-0'
                    );

                }, 150);

            }


            /*
            |--------------------------------------------------------------------------
            | Lightbox Image
            |--------------------------------------------------------------------------
            */

            if (lightboxImage) {

                lightboxImage.src = imageUrl;

            }


            /*
            |--------------------------------------------------------------------------
            | Counters
            |--------------------------------------------------------------------------
            */

            const counter =
                document.getElementById(
                    'imageCounter'
                );


            if (counter) {

                counter.textContent =
                    `${currentImageIndex + 1} / ${galleryImages.length}`;

            }


            const lightboxCounter =
                document.getElementById(
                    'lightboxCounter'
                );


            if (lightboxCounter) {

                lightboxCounter.textContent =
                    `${currentImageIndex + 1} / ${galleryImages.length}`;

            }


            /*
            |--------------------------------------------------------------------------
            | Active Thumbnail
            |--------------------------------------------------------------------------
            */

            document
                .querySelectorAll('.thumbnail')
                .forEach((thumbnail, index) => {

                    if (index === currentImageIndex) {

                        thumbnail.classList.remove(
                            'border-transparent'
                        );


                        thumbnail.classList.add(
                            'border-blue-500',
                            'ring-2',
                            'ring-blue-100'
                        );

                    } else {

                        thumbnail.classList.remove(
                            'border-blue-500',
                            'ring-2',
                            'ring-blue-100'
                        );


                        thumbnail.classList.add(
                            'border-transparent'
                        );

                    }

                });


            /*
            |--------------------------------------------------------------------------
            | Scroll Active Thumbnail
            |--------------------------------------------------------------------------
            */

            const activeThumbnail =
                document.querySelector(
                    `[data-thumbnail="${currentImageIndex}"]`
                );


            if (activeThumbnail) {

                activeThumbnail.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center'
                });

            }

        }


        /*
        |--------------------------------------------------------------------------
        | Next Image
        |--------------------------------------------------------------------------
        */

        function nextImage() {

            if (!galleryImages.length) {
                return;
            }


            currentImageIndex =
                (currentImageIndex + 1)
                % galleryImages.length;


            updateGallery();

            resetZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Previous Image
        |--------------------------------------------------------------------------
        */

        function previousImage() {

            if (!galleryImages.length) {
                return;
            }


            currentImageIndex =
                (currentImageIndex - 1 + galleryImages.length)
                % galleryImages.length;


            updateGallery();

            resetZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Go To Image
        |--------------------------------------------------------------------------
        */

        function goToImage(index) {

            currentImageIndex = index;

            updateGallery();

            resetZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Open Lightbox
        |--------------------------------------------------------------------------
        */

        function openLightbox() {

            const lightbox =
                document.getElementById(
                    'imageLightbox'
                );


            if (!lightbox) {
                return;
            }


            lightbox.classList.remove(
                'hidden'
            );


            lightbox.classList.add(
                'flex'
            );


            document.body.classList.add(
                'overflow-hidden'
            );


            resetZoom();

            updateGallery();

        }


        /*
        |--------------------------------------------------------------------------
        | Close Lightbox
        |--------------------------------------------------------------------------
        */

        function closeLightbox() {

            const lightbox =
                document.getElementById(
                    'imageLightbox'
                );


            if (!lightbox) {
                return;
            }


            lightbox.classList.add(
                'hidden'
            );


            lightbox.classList.remove(
                'flex'
            );


            document.body.classList.remove(
                'overflow-hidden'
            );


            resetZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Zoom In
        |--------------------------------------------------------------------------
        */

        function zoomIn() {

            zoomLevel += 0.25;


            if (zoomLevel > 3) {

                zoomLevel = 3;

            }


            applyZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Zoom Out
        |--------------------------------------------------------------------------
        */

        function zoomOut() {

            zoomLevel -= 0.25;


            if (zoomLevel < 1) {

                zoomLevel = 1;

            }


            applyZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Reset Zoom
        |--------------------------------------------------------------------------
        */

        function resetZoom() {

            zoomLevel = 1;

            applyZoom();

        }


        /*
        |--------------------------------------------------------------------------
        | Apply Zoom
        |--------------------------------------------------------------------------
        */

        function applyZoom() {

            const lightboxImage =
                document.getElementById(
                    'lightboxImage'
                );


            if (!lightboxImage) {
                return;
            }


            lightboxImage.style.transform =
                `scale(${zoomLevel})`;


            if (zoomLevel > 1) {

                lightboxImage.classList.remove(
                    'cursor-zoom-in'
                );


                lightboxImage.classList.add(
                    'cursor-grab'
                );

            } else {

                lightboxImage.classList.remove(
                    'cursor-grab'
                );


                lightboxImage.classList.add(
                    'cursor-zoom-in'
                );

            }

        }


        /*
        |--------------------------------------------------------------------------
        | Thumbnail Horizontal Scroll
        |--------------------------------------------------------------------------
        */

        function scrollThumbnails(direction) {

            const container =
                document.getElementById(
                    'thumbnailContainer'
                );


            if (!container) {
                return;
            }


            const amount = 300;


            if (direction === 'left') {

                container.scrollBy({
                    left: -amount,
                    behavior: 'smooth'
                });

            } else {

                container.scrollBy({
                    left: amount,
                    behavior: 'smooth'
                });

            }

        }


        /*
        |--------------------------------------------------------------------------
        | Keyboard Controls
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'keydown',
            function(event) {

                const lightbox =
                    document.getElementById(
                        'imageLightbox'
                    );


                if (
                    !lightbox ||
                    lightbox.classList.contains('hidden')
                ) {
                    return;
                }


                if (event.key === 'ArrowRight') {

                    nextImage();

                }


                if (event.key === 'ArrowLeft') {

                    previousImage();

                }


                if (event.key === 'Escape') {

                    closeLightbox();

                }


                if (event.key === '+') {

                    zoomIn();

                }


                if (event.key === '-') {

                    zoomOut();

                }

            }
        );


        /*
        |--------------------------------------------------------------------------
        | Mouse Wheel Zoom
        |--------------------------------------------------------------------------
        */

        const lightboxImageContainer =
            document.getElementById(
                'lightboxImageContainer'
            );


        if (lightboxImageContainer) {

            lightboxImageContainer.addEventListener(
                'wheel',
                function(event) {

                    const lightbox =
                        document.getElementById(
                            'imageLightbox'
                        );


                    if (
                        lightbox &&
                        !lightbox.classList.contains('hidden')
                    ) {

                        event.preventDefault();


                        if (event.deltaY < 0) {

                            zoomIn();

                        } else {

                            zoomOut();

                        }

                    }

                },
                {
                    passive: false
                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Double Click Zoom
        |--------------------------------------------------------------------------
        */

        const lightboxImage =
            document.getElementById(
                'lightboxImage'
            );


        if (lightboxImage) {

            lightboxImage.addEventListener(
                'dblclick',
                function() {

                    if (zoomLevel === 1) {

                        zoomLevel = 2;

                    } else {

                        zoomLevel = 1;

                    }


                    applyZoom();

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Close Lightbox When Clicking Background
        |--------------------------------------------------------------------------
        */

        const lightbox =
            document.getElementById(
                'imageLightbox'
            );


        if (lightbox) {

            lightbox.addEventListener(
                'click',
                function(event) {

                    if (event.target === lightbox) {

                        closeLightbox();

                    }

                }
            );

        }

    </script>

@endsection