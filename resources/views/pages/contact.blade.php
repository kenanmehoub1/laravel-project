@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')
    <div class="max-w-3xl mx-auto">

        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ __('messages.contact_title') }}
            </h1>

            <p class="text-gray-600 dark:text-gray-300 mt-2">
                {{ __('messages.contact_subtitle') }}
            </p>
        </div>


        <!-- Contact Form -->
        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 transition-colors duration-300">

            <form>

                <!-- Name & Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <!-- Name -->
                    <div>
                        <label
                            for="name"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"
                        >
                            {{ __('messages.full_name') }}
                        </label>

                        <input
                            type="text"
                            id="name"
                            class="w-full px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700 rounded-lg placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            placeholder="John Doe"
                        >
                    </div>


                    <!-- Email -->
                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"
                        >
                            {{ __('messages.email_address') }}
                        </label>

                        <input
                            type="email"
                            id="email"
                            class="w-full px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700 rounded-lg placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            placeholder="john@example.com"
                        >
                    </div>

                </div>


                <!-- Subject -->
                <div class="mt-4">
                    <label
                        for="subject"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"
                    >
                        {{ __('messages.subject') }}
                    </label>

                    <input
                        type="text"
                        id="subject"
                        class="w-full px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700 rounded-lg placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        placeholder="Property Inquiry"
                    >
                </div>


                <!-- Message -->
                <div class="mt-4">
                    <label
                        for="message"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"
                    >
                        {{ __('messages.message') }}
                    </label>

                    <textarea
                        id="message"
                        rows="5"
                        class="w-full px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700 rounded-lg placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        placeholder="Your message here..."
                    ></textarea>
                </div>


                <!-- Submit Button -->
                <button
                    type="submit"
                    class="mt-6 w-full bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg transition duration-300"
                >
                    {{ __('messages.send_message') }}
                </button>

            </form>
        </div>


        <!-- Contact Information -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">

            <!-- Address -->
            <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 text-center transition-colors duration-300">
                <div class="text-2xl mb-2">📍</div>

                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    {{ __('messages.our_address') }}
                </p>
            </div>


            <!-- Email -->
            <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 text-center transition-colors duration-300">
                <div class="text-2xl mb-2">📧</div>

                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    {{ __('messages.our_email') }}
                </p>
            </div>


            <!-- Phone -->
            <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-md border border-gray-200 dark:border-gray-800 text-center transition-colors duration-300">
                <div class="text-2xl mb-2">📞</div>

                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    {{ __('messages.our_phone') }}
                </p>
            </div>

        </div>

    </div>
@endsection