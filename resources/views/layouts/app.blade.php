<!DOCTYPE html>
<html
    lang="{{ app()->getLocale() }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
>
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', __('messages.home'))
    </title>


    {{-- =========================================================
         Dark Mode - Apply Before Page Loads
    ========================================================== --}}

    <script>
        (function () {

            const savedTheme = localStorage.getItem('theme');

            const systemDark =
                window.matchMedia &&
                window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (
                savedTheme === 'dark' ||
                (!savedTheme && systemDark)
            ) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

        })();
    </script>


    {{-- =========================================================
         Tailwind CSS
    ========================================================== --}}

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class'
        };
    </script>


    @stack('styles')

</head>


<body
    class="bg-gray-50
           text-gray-900
           dark:bg-gray-900
           dark:text-gray-100
           font-sans
           antialiased
           transition-colors
           duration-300"
>


    {{-- =========================================================
         Navigation Bar
    ========================================================== --}}

    <nav
        class="bg-white
               dark:bg-gray-800
               shadow-md
               border-b
               border-gray-200
               dark:border-gray-700
               transition-colors
               duration-300"
    >

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex justify-between items-center h-16">


                {{-- =================================================
                     Logo
                ================================================== --}}

                <div class="flex-shrink-0">

                    <a
                        href="{{ route('home') }}"
                        class="text-xl
                               font-bold
                               text-blue-600
                               hover:text-blue-800
                               dark:text-blue-400
                               dark:hover:text-blue-300
                               transition"
                    >
                        🏠 RealEstate
                    </a>

                </div>


                {{-- =================================================
                     Desktop Navigation
                ================================================== --}}

                <div class="hidden md:flex items-center gap-8">


                    {{-- Home --}}

                    <a
                        href="{{ route('home') }}"
                        class="text-gray-700
                               dark:text-gray-200
                               hover:text-blue-600
                               dark:hover:text-blue-400
                               font-medium
                               transition

                               {{ request()->routeIs('home')
                                   ? 'text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 dark:border-blue-400'
                                   : '' }}"
                    >
                        {{ __('messages.home') }}
                    </a>


                    {{-- Properties --}}

                    <a
                        href="{{ route('properties') }}"
                        class="text-gray-700
                               dark:text-gray-200
                               hover:text-blue-600
                               dark:hover:text-blue-400
                               font-medium
                               transition

                               {{ request()->routeIs('properties')
                                   ? 'text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 dark:border-blue-400'
                                   : '' }}"
                    >
                        {{ __('messages.properties') }}
                    </a>


                    {{-- Contact --}}

                    <a
                        href="{{ route('contact') }}"
                        class="text-gray-700
                               dark:text-gray-200
                               hover:text-blue-600
                               dark:hover:text-blue-400
                               font-medium
                               transition

                               {{ request()->routeIs('contact')
                                   ? 'text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 dark:border-blue-400'
                                   : '' }}"
                    >
                        {{ __('messages.contact') }}
                    </a>


                    {{-- About --}}

                    <a
                        href="{{ route('about') }}"
                        class="text-gray-700
                               dark:text-gray-200
                               hover:text-blue-600
                               dark:hover:text-blue-400
                               font-medium
                               transition

                               {{ request()->routeIs('about')
                                   ? 'text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 dark:border-blue-400'
                                   : '' }}"
                    >
                        {{ __('messages.about') }}
                    </a>


                    {{-- =================================================
                         Dark Mode Toggle
                    ================================================== --}}

                    <button
                        id="theme-toggle"
                        type="button"
                        onclick="toggleTheme()"
                        aria-label="Toggle dark mode"
                        class="w-10
                               h-10
                               rounded-lg
                               flex
                               items-center
                               justify-center
                               text-gray-700
                               dark:text-gray-200
                               bg-gray-100
                               dark:bg-gray-700
                               hover:bg-gray-200
                               dark:hover:bg-gray-600
                               transition
                               focus:outline-none
                               focus:ring-2
                               focus:ring-blue-500"
                    >

                        <span
                            id="theme-icon"
                            class="text-lg"
                        >
                            🌙
                        </span>

                    </button>


                    {{-- =================================================
                         Language Switcher
                    ================================================== --}}

                    <div class="relative">


                        {{-- Language Button --}}

                        <button
                            id="language-button"
                            type="button"
                            onclick="toggleDropdown()"
                            class="flex
                                   items-center
                                   gap-2
                                   px-3
                                   py-2
                                   rounded-lg
                                   text-sm
                                   font-medium
                                   text-gray-700
                                   dark:text-gray-200
                                   bg-gray-100
                                   dark:bg-gray-700
                                   hover:bg-gray-200
                                   dark:hover:bg-gray-600
                                   transition
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-blue-500"
                        >

                            {{-- Globe Icon --}}

                            <span class="text-base">
                                🌐
                            </span>


                            {{-- Current Language --}}

                            <span>
                                {{ app()->getLocale() == 'ar' ? 'العربية' : 'English' }}
                            </span>


                            {{-- Arrow --}}

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
                                    d="M19 9l-7 7-7-7"
                                />

                            </svg>

                        </button>


                        {{-- =================================================
                             Language Dropdown
                        ================================================== --}}

                        <div
                            id="language-dropdown"
                            class="hidden
                                   absolute
                                   top-full
                                   mt-2
                                   w-40
                                   bg-white
                                   dark:bg-gray-800
                                   rounded-lg
                                   shadow-lg
                                   border
                                   border-gray-200
                                   dark:border-gray-700
                                   overflow-hidden
                                   z-50

                                   {{ app()->getLocale() == 'ar'
                                        ? 'left-0'
                                        : 'right-0' }}"
                        >


                            {{-- English --}}

                            <a
                                href="{{ route('language.switch', 'en') }}"
                                class="flex
                                       items-center
                                       gap-2
                                       px-4
                                       py-3
                                       text-sm
                                       transition

                                       {{ app()->getLocale() == 'en'
                                            ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-semibold'
                                            : 'text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }}"
                            >

                                <span>
                                    🇬🇧
                                </span>

                                <span>
                                    English
                                </span>

                            </a>


                            {{-- Arabic --}}

                            <a
                                href="{{ route('language.switch', 'ar') }}"
                                class="flex
                                       items-center
                                       gap-2
                                       px-4
                                       py-3
                                       text-sm
                                       transition

                                       {{ app()->getLocale() == 'ar'
                                            ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-semibold'
                                            : 'text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }}"
                            >

                                <span>
                                    🇸🇦
                                </span>

                                <span>
                                    العربية
                                </span>

                            </a>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     Mobile Menu Button
                ================================================== --}}

                <div class="md:hidden flex items-center gap-2">


                    {{-- Mobile Dark Mode Button --}}

                    <button
                        id="mobile-theme-toggle"
                        type="button"
                        onclick="toggleTheme()"
                        aria-label="Toggle dark mode"
                        class="w-10
                               h-10
                               rounded-lg
                               flex
                               items-center
                               justify-center
                               text-gray-700
                               dark:text-gray-200
                               bg-gray-100
                               dark:bg-gray-700
                               hover:bg-gray-200
                               dark:hover:bg-gray-600
                               transition
                               focus:outline-none
                               focus:ring-2
                               focus:ring-blue-500"
                    >

                        <span
                            id="mobile-theme-icon"
                            class="text-lg"
                        >
                            🌙
                        </span>

                    </button>


                    {{-- Mobile Menu Button --}}

                    <button
                        id="mobile-menu-button"
                        type="button"
                        class="text-gray-700
                               dark:text-gray-200
                               hover:text-blue-600
                               dark:hover:text-blue-400
                               focus:outline-none"
                    >

                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />

                        </svg>

                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
             Mobile Menu
        ========================================================== --}}

        <div
            id="mobile-menu"
            class="hidden
                   md:hidden
                   bg-white
                   dark:bg-gray-800
                   border-t
                   border-gray-200
                   dark:border-gray-700
                   transition-colors
                   duration-300"
        >

            <div class="px-4 py-3 space-y-2">


                {{-- Home --}}

                <a
                    href="{{ route('home') }}"
                    class="block
                           text-gray-700
                           dark:text-gray-200
                           hover:text-blue-600
                           dark:hover:text-blue-400
                           font-medium
                           py-2"
                >
                    {{ __('messages.home') }}
                </a>


                {{-- Properties --}}

                <a
                    href="{{ route('properties') }}"
                    class="block
                           text-gray-700
                           dark:text-gray-200
                           hover:text-blue-600
                           dark:hover:text-blue-400
                           font-medium
                           py-2"
                >
                    {{ __('messages.properties') }}
                </a>


                {{-- Contact --}}

                <a
                    href="{{ route('contact') }}"
                    class="block
                           text-gray-700
                           dark:text-gray-200
                           hover:text-blue-600
                           dark:hover:text-blue-400
                           font-medium
                           py-2"
                >
                    {{ __('messages.contact') }}
                </a>


                {{-- About --}}

                <a
                    href="{{ route('about') }}"
                    class="block
                           text-gray-700
                           dark:text-gray-200
                           hover:text-blue-600
                           dark:hover:text-blue-400
                           font-medium
                           py-2"
                >
                    {{ __('messages.about') }}
                </a>


                {{-- =================================================
                     Mobile Languages
                ================================================== --}}

                <div
                    class="border-t
                           border-gray-200
                           dark:border-gray-700
                           pt-3
                           mt-3"
                >

                    <p
                        class="text-xs
                               text-gray-400
                               dark:text-gray-500
                               mb-2"
                    >
                        Language
                    </p>


                    {{-- English --}}

                    <a
                        href="{{ route('language.switch', 'en') }}"
                        class="flex
                               items-center
                               gap-2
                               px-3
                               py-2
                               rounded-lg
                               transition

                               {{ app()->getLocale() == 'en'
                                    ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-semibold'
                                    : 'text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }}"
                    >

                        <span>
                            🇬🇧
                        </span>

                        <span>
                            English
                        </span>

                    </a>


                    {{-- Arabic --}}

                    <a
                        href="{{ route('language.switch', 'ar') }}"
                        class="flex
                               items-center
                               gap-2
                               px-3
                               py-2
                               rounded-lg
                               transition

                               {{ app()->getLocale() == 'ar'
                                    ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-semibold'
                                    : 'text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }}"
                    >

                        <span>
                            🇸🇦
                        </span>

                        <span>
                            العربية
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </nav>


    {{-- =========================================================
         Main Content
    ========================================================== --}}

    <main
        class="max-w-7xl
               mx-auto
               px-4
               sm:px-6
               lg:px-8
               py-8"
    >

        @yield('content')

    </main>


    {{-- =========================================================
         Footer
    ========================================================== --}}

    <footer
        class="bg-white
               dark:bg-gray-800
               border-t
               border-gray-200
               dark:border-gray-700
               mt-12
               transition-colors
               duration-300"
    >

        <div
            class="max-w-7xl
                   mx-auto
                   px-4
                   sm:px-6
                   lg:px-8
                   py-6"
        >

            <div
                class="text-center
                       text-gray-500
                       dark:text-gray-400
                       text-sm"
            >

                &copy; {{ date('Y') }} RealEstate.

                {{ __('messages.all_rights_reserved') }}

            </div>

        </div>

    </footer>


    {{-- =========================================================
         JavaScript
    ========================================================== --}}

    <script>


        // =========================================================
        // Dark Mode
        // =========================================================

        function updateThemeIcons() {

            const isDark =
                document.documentElement.classList.contains('dark');


            const themeIcon =
                document.getElementById('theme-icon');

            const mobileThemeIcon =
                document.getElementById('mobile-theme-icon');


            if (themeIcon) {

                themeIcon.textContent =
                    isDark ? '☀️' : '🌙';

            }


            if (mobileThemeIcon) {

                mobileThemeIcon.textContent =
                    isDark ? '☀️' : '🌙';

            }

        }


        function toggleTheme() {

            const html =
                document.documentElement;


            const isDark =
                html.classList.toggle('dark');


            if (isDark) {

                localStorage.setItem('theme', 'dark');

            } else {

                localStorage.setItem('theme', 'light');

            }


            updateThemeIcons();

        }


        // Update icons when page loads

        updateThemeIcons();



        // =========================================================
        // Language Dropdown
        // =========================================================

        function toggleDropdown() {

            const dropdown =
                document.getElementById('language-dropdown');


            if (dropdown) {

                dropdown.classList.toggle('hidden');

            }

        }


        // Close language dropdown when clicking outside

        document.addEventListener(
            'click',
            function (event) {

                const dropdown =
                    document.getElementById(
                        'language-dropdown'
                    );


                const button =
                    document.getElementById(
                        'language-button'
                    );


                if (dropdown && button) {

                    const clickedInside =
                        button.contains(event.target) ||
                        dropdown.contains(event.target);


                    if (!clickedInside) {

                        dropdown.classList.add('hidden');

                    }

                }

            }
        );



        // =========================================================
        // Mobile Menu
        // =========================================================

        const mobileMenuButton =
            document.getElementById(
                'mobile-menu-button'
            );


        const mobileMenu =
            document.getElementById(
                'mobile-menu'
            );


        if (mobileMenuButton && mobileMenu) {

            mobileMenuButton.addEventListener(
                'click',
                function () {

                    mobileMenu.classList.toggle(
                        'hidden'
                    );

                }
            );

        }

    </script>


    @stack('scripts')

</body>
</html>