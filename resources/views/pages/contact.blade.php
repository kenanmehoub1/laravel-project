@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')

    {{-- =====================================================
        PAGE HEADER
    ====================================================== --}}
    <section class="relative overflow-hidden
                    bg-slate-50
                    dark:bg-slate-950
                    transition-colors duration-300">

        {{-- Decorative Background --}}
        <div class="absolute -top-32 -right-32
                    w-96 h-96
                    rounded-full
                    bg-blue-100/60
                    dark:bg-blue-900/10
                    blur-3xl">
        </div>

        <div class="absolute -bottom-40 -left-32
                    w-96 h-96
                    rounded-full
                    bg-cyan-100/50
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
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m5-4a8 8 0 11-16 0c0 1.2.26 2.34.73 3.37L4 20l4.63-.73A8 8 0 0020 12z"/>
                    </svg>

                    {{ __('messages.contact_badge') }}

                </div>

                <h1 class="mt-6
                           text-4xl sm:text-5xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.contact_title') }}

                </h1>

                <p class="max-w-2xl mx-auto
                          mt-5
                          text-base sm:text-lg
                          leading-8
                          text-slate-600
                          dark:text-slate-300">

                    {{ __('messages.contact_description') }}

                </p>

            </div>

        </div>

    </section>


    {{-- =====================================================
        CONTACT INFORMATION
    ====================================================== --}}
    <section class="py-12 sm:py-16
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1
                        sm:grid-cols-2
                        lg:grid-cols-4
                        gap-5">

                {{-- Office --}}
                <div class="group
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            bg-white
                            dark:bg-slate-900
                            p-6
                            shadow-sm
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                flex items-center justify-center
                                rounded-xl
                                bg-blue-50
                                dark:bg-blue-950
                                text-blue-600
                                dark:text-blue-400">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
                            <circle
                                cx="12"
                                cy="11"
                                r="2.5"
                                stroke-width="1.8"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.office_label') }}

                    </h3>

                    <p class="mt-2
                              text-sm
                              leading-6
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.office_address') }}

                    </p>

                </div>

                {{-- Phone --}}
                <div class="group
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            bg-white
                            dark:bg-slate-900
                            p-6
                            shadow-sm
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                flex items-center justify-center
                                rounded-xl
                                bg-cyan-50
                                dark:bg-cyan-950
                                text-cyan-600
                                dark:text-cyan-400">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.515L10 8a2 2 0 01-.5 1.85l-1.27 1.27a16 16 0 006.65 6.65l1.27-1.27A2 2 0 0118 16l3.485.78A2 2 0 0123 18.72V21a2 2 0 01-2 2C10.507 23 1 13.493 1 3a2 2 0 012-2z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.phone_label') }}

                    </h3>

                    <p class="mt-2
                              text-sm
                              text-slate-600
                              dark:text-slate-400
                              direction-ltr">

                        {{ __('messages.phone') }}

                    </p>

                </div>

                {{-- Email --}}
                <div class="group
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            bg-white
                            dark:bg-slate-900
                            p-6
                            shadow-sm
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                flex items-center justify-center
                                rounded-xl
                                bg-violet-50
                                dark:bg-violet-950
                                text-violet-600
                                dark:text-violet-400">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.email_label') }}

                    </h3>

                    <p class="mt-2
                              text-sm
                              text-slate-600
                              dark:text-slate-400
                              break-all">

                        {{ __('messages.email') }}

                    </p>

                </div>

                {{-- Working Hours --}}
                <div class="group
                            rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            bg-white
                            dark:bg-slate-900
                            p-6
                            shadow-sm
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                flex items-center justify-center
                                rounded-xl
                                bg-amber-50
                                dark:bg-amber-950
                                text-amber-600
                                dark:text-amber-400">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                                stroke-width="1.8"/>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 7v5l3 2"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.working_hours_label') }}

                    </h3>

                    <p class="mt-2
                              text-sm
                              leading-6
                              text-slate-600
                              dark:text-slate-400">

                        {!! __('messages.working_hours_value') !!}

                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        CONTACT FORM + MAP
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-slate-50
                    dark:bg-slate-900
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1
                        lg:grid-cols-2
                        gap-10 lg:gap-16
                        items-start">

                {{-- =================================================
                    CONTACT FORM
                ================================================== --}}
                <div class="bg-white
                            dark:bg-slate-950
                            rounded-3xl
                            border border-slate-200
                            dark:border-slate-800
                            shadow-sm
                            p-6 sm:p-8 lg:p-10">

                    <div class="mb-8">

                        <span class="text-sm
                                     font-semibold
                                     text-blue-600
                                     dark:text-blue-400">

                            {{ __('messages.form_badge') }}

                        </span>

                        <h2 class="mt-2
                                   text-2xl sm:text-3xl
                                   font-extrabold
                                   text-slate-900
                                   dark:text-white">

                            {{ __('messages.form_title') }}

                        </h2>

                        <p class="mt-3
                                  text-sm sm:text-base
                                  leading-7
                                  text-slate-600
                                  dark:text-slate-400">

                            {{ __('messages.form_description') }}

                        </p>

                    </div>

                    <form>

                        {{-- Name + Email --}}
                        <div class="grid grid-cols-1
                                    sm:grid-cols-2
                                    gap-5">

                            {{-- Name --}}
                            <div>

                                <label
                                    for="name"
                                    class="block mb-2
                                           text-sm font-semibold
                                           text-slate-700
                                           dark:text-slate-300">

                                    {{ __('messages.name_label') }}

                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="{{ __('messages.name_placeholder') }}"
                                    class="w-full
                                           rounded-xl
                                           border border-slate-200
                                           dark:border-slate-700
                                           bg-white
                                           dark:bg-slate-900
                                           text-slate-900
                                           dark:text-white
                                           placeholder-slate-400
                                           px-4 py-3
                                           outline-none
                                           focus:ring-2
                                           focus:ring-blue-500/30
                                           focus:border-blue-500
                                           transition">
                            </div>

                            {{-- Email --}}
                            <div>

                                <label
                                    for="email"
                                    class="block mb-2
                                           text-sm font-semibold
                                           text-slate-700
                                           dark:text-slate-300">

                                    {{ __('messages.email_address') }}

                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="{{ __('messages.email_placeholder') }}"
                                    class="w-full
                                           rounded-xl
                                           border border-slate-200
                                           dark:border-slate-700
                                           bg-white
                                           dark:bg-slate-900
                                           text-slate-900
                                           dark:text-white
                                           placeholder-slate-400
                                           px-4 py-3
                                           outline-none
                                           focus:ring-2
                                           focus:ring-blue-500/30
                                           focus:border-blue-500
                                           transition">
                            </div>

                        </div>

                        {{-- Phone --}}
                        <div class="mt-5">

                            <label
                                for="phone"
                                class="block mb-2
                                       text-sm font-semibold
                                       text-slate-700
                                       dark:text-slate-300">

                                {{ __('messages.phone_number') }}

                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="{{ __('messages.phone_placeholder') }}"
                                class="w-full
                                       rounded-xl
                                       border border-slate-200
                                       dark:border-slate-700
                                       bg-white
                                       dark:bg-slate-900
                                       text-slate-900
                                       dark:text-white
                                       placeholder-slate-400
                                       px-4 py-3
                                       outline-none
                                       focus:ring-2
                                       focus:ring-blue-500/30
                                       focus:border-blue-500
                                       transition">

                        </div>

                        {{-- Inquiry Type --}}
                        <div class="mt-5">

                            <label
                                for="inquiry_type"
                                class="block mb-2
                                       text-sm font-semibold
                                       text-slate-700
                                       dark:text-slate-300">

                                {{ __('messages.inquiry_label') }}

                            </label>

                            <select
                                id="inquiry_type"
                                name="inquiry_type"
                                class="w-full
                                       rounded-xl
                                       border border-slate-200
                                       dark:border-slate-700
                                       bg-white
                                       dark:bg-slate-900
                                       text-slate-900
                                       dark:text-white
                                       px-4 py-3
                                       outline-none
                                       focus:ring-2
                                       focus:ring-blue-500/30
                                       focus:border-blue-500
                                       transition">

                                <option value="">
                                    {{ __('messages.choose_inquiry') }}
                                </option>

                                <option value="buy">
                                    {{ __('messages.inquiry_buy') }}
                                </option>

                                <option value="rent">
                                    {{ __('messages.inquiry_rent') }}
                                </option>

                                <option value="sell">
                                    {{ __('messages.inquiry_sell') }}
                                </option>

                                <option value="investment">
                                    {{ __('messages.inquiry_investment') }}
                                </option>

                                <option value="other">
                                    {{ __('messages.inquiry_other') }}
                                </option>

                            </select>

                        </div>

                        {{-- Subject --}}
                        <div class="mt-5">

                            <label
                                for="subject"
                                class="block mb-2
                                       text-sm font-semibold
                                       text-slate-700
                                       dark:text-slate-300">

                                {{ __('messages.subject_label') }}

                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="{{ __('messages.subject_placeholder') }}"
                                class="w-full
                                       rounded-xl
                                       border border-slate-200
                                       dark:border-slate-700
                                       bg-white
                                       dark:bg-slate-900
                                       text-slate-900
                                       dark:text-white
                                       placeholder-slate-400
                                       px-4 py-3
                                       outline-none
                                       focus:ring-2
                                       focus:ring-blue-500/30
                                       focus:border-blue-500
                                       transition">

                        </div>

                        {{-- Message --}}
                        <div class="mt-5">

                            <label
                                for="message"
                                class="block mb-2
                                       text-sm font-semibold
                                       text-slate-700
                                       dark:text-slate-300">

                                {{ __('messages.message_label') }}

                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                placeholder="{{ __('messages.message_placeholder') }}"
                                class="w-full
                                       rounded-xl
                                       border border-slate-200
                                       dark:border-slate-700
                                       bg-white
                                       dark:bg-slate-900
                                       text-slate-900
                                       dark:text-white
                                       placeholder-slate-400
                                       px-4 py-3
                                       outline-none
                                       resize-none
                                       focus:ring-2
                                       focus:ring-blue-500/30
                                       focus:border-blue-500
                                       transition"></textarea>

                        </div>

                        {{-- Submit --}}
                        <button
                            type="submit"
                            class="w-full
                                   mt-6
                                   flex items-center
                                   justify-center
                                   gap-3
                                   rounded-xl
                                   bg-blue-600
                                   hover:bg-blue-700
                                   dark:bg-blue-500
                                   dark:hover:bg-blue-600
                                   text-white
                                   font-bold
                                   px-6 py-3.5
                                   shadow-sm
                                   hover:shadow-md
                                   transition-all duration-300">

                            {{ __('messages.send_button') }}

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>

                        </button>

                    </form>

                </div>

                {{-- =================================================
                    MAP
                ================================================== --}}
                <div>

                    {{-- Map Title --}}
                    <div class="mb-5">

                        <span class="text-sm
                                     font-semibold
                                     text-blue-600
                                     dark:text-blue-400">

                            {{ __('messages.map_badge') }}

                        </span>

                        <h2 class="mt-2
                                   text-2xl sm:text-3xl
                                   font-extrabold
                                   text-slate-900
                                   dark:text-white">

                            {{ __('messages.map_title') }}

                        </h2>

                        <p class="mt-3
                                  text-sm sm:text-base
                                  text-slate-600
                                  dark:text-slate-400">

                            {{ __('messages.office_address') }}

                        </p>

                    </div>

                    {{-- Google Map --}}
                    <div class="w-full
                                h-[350px]
                                sm:h-[420px]
                                lg:h-[520px]
                                rounded-3xl
                                overflow-hidden
                                border border-slate-200
                                dark:border-slate-700
                                shadow-sm
                                bg-slate-200
                                dark:bg-slate-800">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40844.8631019108!2d55.30460794441098!3d25.19614099271566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2z2K_YqNmKIC0g2KfZhNil2YXYp9ix2KfYqiDYp9mE2LnYsdio2YrYqSDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2sfr!4v1788806436260!5m2!1sar!2sfr"
                            class="w-full h-full"
                            style="border:0;"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin">
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        WHY CONTACT US
    ====================================================== --}}
    <section class="py-16 sm:py-20
                    bg-white
                    dark:bg-slate-950
                    transition-colors duration-300">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <span class="text-sm font-semibold
                             text-blue-600
                             dark:text-blue-400">

                    {{ __('messages.why_contact_badge') }}

                </span>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-extrabold
                           text-slate-900
                           dark:text-white">

                    {{ __('messages.why_contact_title') }}

                </h2>

            </div>

            <div class="grid grid-cols-1
                        sm:grid-cols-2
                        lg:grid-cols-3
                        gap-6">

                {{-- Card 1 --}}
                <div class="rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-7
                            bg-white
                            dark:bg-slate-900
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                rounded-xl
                                bg-blue-50
                                dark:bg-blue-950
                                text-blue-600
                                dark:text-blue-400
                                flex items-center justify-center">

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               text-lg font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.why_feature_1_title') }}

                    </h3>

                    <p class="mt-2
                              leading-7
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.why_feature_1_desc') }}

                    </p>

                </div>

                {{-- Card 2 --}}
                <div class="rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-7
                            bg-white
                            dark:bg-slate-900
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                rounded-xl
                                bg-teal-50
                                dark:bg-teal-950
                                text-teal-600
                                dark:text-teal-400
                                flex items-center justify-center">

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               text-lg font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.why_feature_2_title') }}

                    </h3>

                    <p class="mt-2
                              leading-7
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.why_feature_2_desc') }}

                    </p>

                </div>

                {{-- Card 3 --}}
                <div class="rounded-2xl
                            border border-slate-200
                            dark:border-slate-800
                            p-7
                            bg-white
                            dark:bg-slate-900
                            hover:-translate-y-1
                            hover:shadow-lg
                            transition-all duration-300">

                    <div class="w-12 h-12
                                rounded-xl
                                bg-amber-50
                                dark:bg-amber-950
                                text-amber-600
                                dark:text-amber-400
                                flex items-center justify-center">

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5
                               text-lg font-bold
                               text-slate-900
                               dark:text-white">

                        {{ __('messages.why_feature_3_title') }}

                    </h3>

                    <p class="mt-2
                              leading-7
                              text-slate-600
                              dark:text-slate-400">

                        {{ __('messages.why_feature_3_desc') }}

                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
        FINAL CTA
    ====================================================== --}}
    <section class="py-8 sm:py-12
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

                {{-- Decorative Circles --}}
                <div class="absolute
                            -top-24 -left-24
                            w-72 h-72
                            rounded-full
                            bg-white/10">
                </div>

                <div class="absolute
                            -bottom-32 -right-20
                            w-80 h-80
                            rounded-full
                            bg-white/10">
                </div>

                <div class="relative z-10
                            text-center
                            max-w-3xl mx-auto">

                    <h2 class="text-3xl sm:text-4xl
                               font-extrabold
                               text-white">

                        {{ __('messages.cta_title') }}

                    </h2>

                    <p class="mt-4
                              text-blue-100
                              leading-7">

                        {{ __('messages.cta_text') }}

                    </p>

                    <a
                        href="{{ route('properties') }}"
                        class="inline-flex
                               items-center
                               gap-3
                               mt-7
                               px-7 py-3.5
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

    </section>

@endsection