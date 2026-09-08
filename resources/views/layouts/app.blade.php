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
                   py-8"
        >

            {{-- =================================================
                 Footer Grid
            ================================================== --}}

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Column 1: Brand --}}

                <div>

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

                    <p
                        class="mt-3
                               text-sm
                               text-gray-500
                               dark:text-gray-400
                               leading-relaxed"
                    >
                        {{ __('messages.footer_description') ?? 'منصتك العقارية الموثوقة للعثور على العقار المثالي في دبي.' }}
                    </p>

                </div>


                {{-- Column 2: Quick Links --}}

                <div>

                    <h3
                        class="text-sm
                               font-semibold
                               text-gray-700
                               dark:text-gray-300
                               uppercase
                               tracking-wider"
                    >
                        {{ __('messages.quick_links') ?? 'روابط سريعة' }}
                    </h3>

                    <ul class="mt-4 space-y-2">

                        <li>
                            <a
                                href="{{ route('properties') }}"
                                class="text-sm
                                       text-gray-500
                                       dark:text-gray-400
                                       hover:text-blue-600
                                       dark:hover:text-blue-400
                                       transition"
                            >
                                {{ __('messages.properties') }}
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('about') }}"
                                class="text-sm
                                       text-gray-500
                                       dark:text-gray-400
                                       hover:text-blue-600
                                       dark:hover:text-blue-400
                                       transition"
                            >
                                {{ __('messages.about') }}
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('contact') }}"
                                class="text-sm
                                       text-gray-500
                                       dark:text-gray-400
                                       hover:text-blue-600
                                       dark:hover:text-blue-400
                                       transition"
                            >
                                {{ __('messages.contact') }}
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Column 3: Social Media --}}

                <div>

                    <h3
                        class="text-sm
                               font-semibold
                               text-gray-700
                               dark:text-gray-300
                               uppercase
                               tracking-wider"
                    >
                        {{ __('messages.follow_us') ?? 'تابعنا' }}
                    </h3>

                    <div class="mt-4 flex gap-3">

                        {{-- Facebook --}}

                        <a
                            href="https://facebook.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook"
                            class="w-11
                                   h-11
                                   rounded-full
                                   bg-[#1877F2]
                                   hover:bg-[#1877F2]/80
                                   text-white
                                   flex
                                   items-center
                                   justify-center
                                   transition-all
                                   duration-300
                                   hover:scale-110
                                   hover:shadow-lg"
                        >

                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                                />

                            </svg>

                        </a>


                        {{-- Instagram --}}

                        <a
                            href="https://instagram.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram"
                            class="w-11
                                   h-11
                                   rounded-full
                                   bg-gradient-to-br
                                   from-[#F58529]
                                   via-[#DD2A7B]
                                   to-[#8134AF]
                                   text-white
                                   flex
                                   items-center
                                   justify-center
                                   transition-all
                                   duration-300
                                   hover:scale-110
                                   hover:shadow-lg"
                        >

                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
                                />

                            </svg>

                        </a>


                        {{-- YouTube --}}

                        <a
                            href="https://youtube.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="YouTube"
                            class="w-11
                                   h-11
                                   rounded-full
                                   bg-[#FF0000]
                                   hover:bg-[#FF0000]/80
                                   text-white
                                   flex
                                   items-center
                                   justify-center
                                   transition-all
                                   duration-300
                                   hover:scale-110
                                   hover:shadow-lg"
                        >

                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                                />

                            </svg>

                        </a>


                        {{-- X (Twitter) --}}

                        <a
                            href="https://x.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X (Twitter)"
                            class="w-11
                                   h-11
                                   rounded-full
                                   bg-black
                                   dark:bg-gray-700
                                   hover:bg-black/80
                                   dark:hover:bg-gray-600
                                   text-white
                                   flex
                                   items-center
                                   justify-center
                                   transition-all
                                   duration-300
                                   hover:scale-110
                                   hover:shadow-lg"
                        >

                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 Footer Bottom
            ================================================== --}}

            <div
                class="mt-8
                       pt-6
                       border-t
                       border-gray-200
                       dark:border-gray-700
                       text-center
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
    {{-- =========================================================
         Floating WhatsApp Button
    ========================================================== --}}

    <a
        href="https://wa.me/971501234567?text={{ urlencode(__('messages.whatsapp_message')) }}"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="WhatsApp"
        class="fixed
               bottom-6
               right-6
               z-50
               bg-[#25D366]
               hover:bg-[#1ebe5a]
               text-white
               rounded-full
               shadow-lg
               hover:shadow-xl
               transition-all
               duration-300
               hover:scale-105
               w-14
               h-14
               md:w-16
               md:h-16
               flex
               items-center
               justify-center
               focus:outline-none
               focus:ring-4
               focus:ring-[#25D366]/40"
    >

        {{-- WhatsApp Icon --}}

        <svg
            class="w-7 h-7 md:w-8 md:h-8"
            fill="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
        >

            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
            />

        </svg>

    </a>

    @stack('scripts')

</body>
</html>