@extends('layouts.app')

@section('title', __('messages.properties'))

@section('content')

    {{-- =========================================================
         Page Header
    ========================================================== --}}

    <div class="mb-8">

        <h1
            class="text-3xl
                   font-bold
                   text-gray-900
                   dark:text-white
                   transition-colors
                   duration-300"
        >
            {{ __('messages.properties_title') }}
        </h1>

        <p
            class="text-gray-600
                   dark:text-gray-400
                   mt-2
                   transition-colors
                   duration-300"
        >
            {{ __('messages.properties_subtitle') }}
        </p>

    </div>


    {{-- =========================================================
         Filter Bar
    ========================================================== --}}

    <div
        class="bg-white
               dark:bg-gray-800
               p-4
               rounded-lg
               shadow-md
               border
               border-gray-200
               dark:border-gray-700
               mb-8
               transition-colors
               duration-300"
    >

        <form action="{{ route('properties') }}" method="GET">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                {{-- =================================================
                     Market Type
                ================================================== --}}

                <select
                    name="market_type"
                    class="w-full
                           px-4
                           py-2
                           border
                           border-gray-300
                           dark:border-gray-600
                           rounded-lg
                           bg-white
                           dark:bg-gray-700
                           text-gray-700
                           dark:text-gray-200
                           focus:ring-2
                           focus:ring-blue-500
                           focus:border-blue-500
                           transition-colors
                           duration-300"
                >

                    <option value="">
                        All Market Types
                    </option>

                    <option
                        value="primary"
                        {{ request('market_type') == 'primary' ? 'selected' : '' }}
                    >
                        Primary Market
                    </option>

                    <option
                        value="secondary"
                        {{ request('market_type') == 'secondary' ? 'selected' : '' }}
                    >
                        Secondary Market
                    </option>

                </select>


                {{-- =================================================
                     Price
                ================================================== --}}

                <select
                    name="price"
                    class="w-full
                           px-4
                           py-2
                           border
                           border-gray-300
                           dark:border-gray-600
                           rounded-lg
                           bg-white
                           dark:bg-gray-700
                           text-gray-700
                           dark:text-gray-200
                           focus:ring-2
                           focus:ring-blue-500
                           focus:border-blue-500
                           transition-colors
                           duration-300"
                >

                    <option value="">
                        Sort by Price
                    </option>

                    <option
                        value="low_to_high"
                        {{ request('price') == 'low_to_high' ? 'selected' : '' }}
                    >
                        Price: Low to High
                    </option>

                    <option
                        value="high_to_low"
                        {{ request('price') == 'high_to_low' ? 'selected' : '' }}
                    >
                        Price: High to Low
                    </option>

                </select>


                {{-- =================================================
                     City
                ================================================== --}}

                <select
                    name="city"
                    class="w-full
                           px-4
                           py-2
                           border
                           border-gray-300
                           dark:border-gray-600
                           rounded-lg
                           bg-white
                           dark:bg-gray-700
                           text-gray-700
                           dark:text-gray-200
                           focus:ring-2
                           focus:ring-blue-500
                           focus:border-blue-500
                           transition-colors
                           duration-300"
                >

                    <option value="">
                        All Cities
                    </option>

                    <option
                        value="Dubai"
                        {{ request('city') == 'Dubai' ? 'selected' : '' }}
                    >
                        Dubai
                    </option>

                    <option
                        value="Abu Dhabi"
                        {{ request('city') == 'Abu Dhabi' ? 'selected' : '' }}
                    >
                        Abu Dhabi
                    </option>

                    <option
                        value="Sharjah"
                        {{ request('city') == 'Sharjah' ? 'selected' : '' }}
                    >
                        Sharjah
                    </option>

                    <option
                        value="Ajman"
                        {{ request('city') == 'Ajman' ? 'selected' : '' }}
                    >
                        Ajman
                    </option>

                    <option
                        value="Umm Al Quwain"
                        {{ request('city') == 'Umm Al Quwain' ? 'selected' : '' }}
                    >
                        Umm Al Quwain
                    </option>

                    <option
                        value="Ras Al Khaimah"
                        {{ request('city') == 'Ras Al Khaimah' ? 'selected' : '' }}
                    >
                        Ras Al Khaimah
                    </option>

                    <option
                        value="Fujairah"
                        {{ request('city') == 'Fujairah' ? 'selected' : '' }}
                    >
                        Fujairah
                    </option>

                </select>


                {{-- =================================================
                     Search Button
                ================================================== --}}

                <button
                    type="submit"
                    class="bg-blue-600
                           hover:bg-blue-700
                           text-white
                           font-semibold
                           px-6
                           py-2
                           rounded-lg
                           transition
                           duration-300"
                >
                    {{ __('messages.search') }}
                </button>

            </div>

        </form>

    </div>


    {{-- =========================================================
         Properties Grid
    ========================================================== --}}

    @if($properties->count() > 0)

        <div
            class="grid
                   grid-cols-1
                   md:grid-cols-2
                   lg:grid-cols-3
                   gap-6"
        >

            @foreach($properties as $property)

                {{-- =================================================
                     Property Card
                ================================================== --}}

                <div
                    class="bg-white
                           dark:bg-gray-800
                           rounded-lg
                           shadow-md
                           border
                           border-gray-200
                           dark:border-gray-700
                           overflow-hidden
                           hover:shadow-lg
                           dark:hover:shadow-gray-950/40
                           transition-all
                           duration-300"
                >

                    {{-- =================================================
                         Property Image
                    ================================================== --}}

                    <div
                        class="h-48
                               bg-gray-200
                               dark:bg-gray-700
                               relative"
                    >

                        @if(
                            $property->main_image &&
                            file_exists(
                                storage_path(
                                    'app/public/' . $property->main_image
                                )
                            )
                        )

                            <img
                                src="{{ asset('storage/' . $property->main_image) }}"
                                alt="{{ $property->title }}"
                                class="w-full
                                       h-full
                                       object-cover"
                            >

                        @else

                            <div
                                class="w-full
                                       h-full
                                       flex
                                       items-center
                                       justify-center
                                       bg-gray-200
                                       dark:bg-gray-700"
                            >

                                <span
                                    class="text-gray-400
                                           dark:text-gray-500
                                           text-4xl"
                                >
                                    🏠
                                </span>

                            </div>

                        @endif


                        {{-- =================================================
                             Market Type Badge
                        ================================================== --}}

                        @if($property->market_type)

                            <span
                                class="absolute
                                       top-2
                                       right-2
                                       {{ $property->market_type == 'primary'
                                            ? 'bg-green-500'
                                            : 'bg-blue-500'
                                       }}
                                       text-white
                                       text-xs
                                       font-semibold
                                       px-3
                                       py-1
                                       rounded-full
                                       shadow"
                            >

                                {{ $property->market_type == 'primary'
                                    ? __('messages.primary_market')
                                    : __('messages.secondary_market')
                                }}

                            </span>

                        @endif

                    </div>


                    {{-- =================================================
                         Property Details
                    ================================================== --}}

                    <div class="p-4">


                        {{-- Property Title --}}

                        <h3
                            class="text-lg
                                   font-semibold
                                   text-gray-800
                                   dark:text-white
                                   truncate
                                   transition-colors
                                   duration-300"
                        >
                            {{ $property->title }}
                        </h3>


                        {{-- =================================================
                             Location
                        ================================================== --}}

                        <p
                            class="text-gray-500
                                   dark:text-gray-400
                                   text-sm
                                   flex
                                   items-center
                                   mt-1
                                   transition-colors
                                   duration-300"
                        >

                            <svg
                                class="w-4
                                       h-4
                                       mr-1
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
                             Price + Property Stats
                        ================================================== --}}

                        <div
                            class="flex
                                   justify-between
                                   items-center
                                   mt-3"
                        >

                            {{-- Price --}}

                            <span
                                class="text-blue-600
                                       dark:text-blue-400
                                       font-bold
                                       text-xl"
                            >
                                ${{ number_format($property->price, 0) }}
                            </span>


                            {{-- Property Stats --}}

                            <div
                                class="flex
                                       items-center
                                       space-x-2
                                       text-sm
                                       text-gray-500
                                       dark:text-gray-400"
                            >

                                @if($property->bedrooms)

                                    <span>
                                        {{ $property->bedrooms }}
                                        {{ __('messages.beds') }}
                                    </span>

                                @endif


                                @if($property->bathrooms)

                                    <span>
                                        |
                                        {{ $property->bathrooms }}
                                        {{ __('messages.baths') }}
                                    </span>

                                @endif


                                @if($property->area)

                                    <span>
                                        |
                                        {{ $property->area }} m²
                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- =================================================
                             Availability + Listed Date
                        ================================================== --}}

                        <div class="mt-3">

                            @if($property->is_available)

                                <span
                                    class="inline-block
                                           bg-green-100
                                           dark:bg-green-900/30
                                           text-green-800
                                           dark:text-green-400
                                           text-xs
                                           font-semibold
                                           px-2
                                           py-1
                                           rounded-full"
                                >
                                    ✅ {{ __('messages.available') }}
                                </span>

                            @else

                                <span
                                    class="inline-block
                                           bg-red-100
                                           dark:bg-red-900/30
                                           text-red-800
                                           dark:text-red-400
                                           text-xs
                                           font-semibold
                                           px-2
                                           py-1
                                           rounded-full"
                                >
                                    ❌ {{ __('messages.sold') }}
                                </span>

                            @endif


                            @if($property->created_at)

                                <span
                                    class="text-gray-400
                                           dark:text-gray-500
                                           text-xs
                                           ml-2"
                                >
                                    {{ __('messages.listed') }}
                                    {{ $property->created_at->diffForHumans() }}
                                </span>

                            @endif

                        </div>


                        {{-- =================================================
                             View Details Button
                        ================================================== --}}

                        <a
                            href="{{ route('property.show', $property->id) }}"
                            class="block
                                   text-center
                                   mt-4
                                   bg-blue-600
                                   hover:bg-blue-700
                                   text-white
                                   font-medium
                                   px-4
                                   py-2
                                   rounded-lg
                                   transition
                                   duration-300"
                        >
                            {{ __('messages.view_details') }}
                        </a>

                    </div>

                </div>

            @endforeach

        </div>


    @else


        {{-- =========================================================
             No Properties Found
        ========================================================== --}}

        <div
            class="text-center
                   py-16
                   bg-white
                   dark:bg-gray-800
                   rounded-lg
                   shadow-md
                   border
                   border-gray-200
                   dark:border-gray-700
                   transition-colors
                   duration-300"
        >

            <div class="text-6xl mb-4">
                🏚️
            </div>


            <h3
                class="text-xl
                       font-semibold
                       text-gray-800
                       dark:text-white"
            >
                {{ __('messages.no_properties_found') }}
            </h3>


            <p
                class="text-gray-500
                       dark:text-gray-400
                       mt-2"
            >
                {{ __('messages.no_properties_desc') }}
            </p>


            <a
                href="{{ route('properties') }}"
                class="inline-block
                       mt-4
                       bg-blue-600
                       hover:bg-blue-700
                       text-white
                       font-medium
                       px-6
                       py-2
                       rounded-lg
                       transition
                       duration-300"
            >
                {{ __('messages.reset_filters') }}
            </a>

        </div>

    @endif

@endsection