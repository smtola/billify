<nav class="bg-black fixed w-full z-20 top-0 start-0 transition duration-75 ease-in-out" id="header">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 xl:px-16">
        <a href="{{ route('home.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('assets/img/logos/logo.jpg') }}" class="h-8" alt="Billify">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white transition duration-300 ease-in-out" id="title">Billify.tech</span>
        </a>
        <div class="flex lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse">
            <div
                class="xl:inline-flex xl:items-center xl:order-2 space-x-1 xl:space-x-2 rtl:space-x-reverse pt-2 lg:pt-0 xl:pt-0">
                <button id="dropdownEn" type="button" data-dropdown-toggle="language-dropdown-en" data-dropdown-trigger="hover"
                    class="inline-flex cursor-pointer items-center lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:text-white lg:hover:translate-x-1 lg:mx-2 lg:px-5 lg:py-2 whitespace-nowrap focus:outline-none rounded-full transition delay-150 duration-300 ease-in-out">
                    <img class="rounded-full w-5 h-5 mt-[2px] lg:mt-0" src="{{ url('assets/img/icons/en-flag.png') }}" alt="english">
                    <span id="text-en" class="lg:mx-2 text-gray-500 sr-only lg:not-sr-only transition hover:text-black duration-300 ease-in-out">English</span>
                </button>
                <button id="dropdownKh" type="button" data-dropdown-toggle="language-dropdown-kh" data-dropdown-trigger="hover"
                    class="hidden cursor-pointer items-center lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:text-white lg:hover:translate-x-1 lg:mx-2 lg:px-5 lg:py-2 whitespace-nowrap focus:outline-none rounded-full transition delay-150 duration-300 ease-in-out">
                    <img class="rounded-full w-5 h-5 mt-[2px] lg:mt-0" src="{{ url('assets/img/icons/kh-flag.png') }}" alt="khmer">
                    <span id="text-kh" class="lg:mx-2 text-gray-500 sr-only lg:not-sr-only transition hover:text-black duration-300 ease-in-out">ភាសាខ្មែរ</span>
                </button>
                @include('components.menus-popup.languages-kh')
                @include('components.menus-popup.languages')
            </div>
            <button data-collapse-toggle="navbar-sticky" type="button" id="menu"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-300 rounded-lg lg:hidden hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky" >
            <ul
                class="flex flex-col pr-4 py-2 lg:p-0 mt-4 font-medium lg:space-x-2 xl:space-x-8 rtl:space-x-reverse lg:flex-row md:mt-1">
                <li>
                    <a href="{{ route('home.index') }}" id="text-li-1"
                        class="block py-2 lg:px-3 text-gray-300 hover:text-white lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:rounded-3xl transition delay-100 duration-300 ease-in-out"
                        aria-current="page">@lang('messages.home')</a>
                </li>
                <li x-data="{ open: false }">
                    <a  @click="open = true" id="text-li-2"
                        class="inline-flex cursor-pointer py-2 lg:px-3 text-gray-300 hover:text-white lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:rounded-3xl transition delay-100 duration-300 ease-in-out"
                        aria-current="page">@lang('messages.solutions')
                        <svg class="w-2.5 h-2.5 mt-2 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </a>
                    <div class="my-2" >
                        @include('components.menus-popup.solutions')
                    </div>
                </li>
                <li x-data="{ open: false }">
                    <a  @click="open = true" id="text-li-3"
                        class="inline-flex cursor-pointer py-2 lg:px-3 text-gray-300 hover:text-white lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:rounded-3xl transition delay-100 duration-300 ease-in-out ">@lang('messages.products')
                        <svg class="w-2.5 h-2.5 mt-2 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </a>
                    <div class="my-2">
                        @include('components.menus-popup.products')
                    </div>
                </li>
                <li x-data="{ open: false }">
                    <a  @click="open = true" id="text-li-4"
                        class="inline-flex cursor-pointer py-2 lg:px-3 text-gray-300 hover:text-white lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:rounded-3xl transition delay-100 duration-300 ease-in-out ">@lang('messages.resources')
                        <svg class="w-2.5 h-2.5 mt-2 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </a>
                    <div class="my-2">
                        @include('components.menus-popup.resources')
                    </div>
                </li>
                <li>
                    <a href="{{ route('plans.index') }}" id="text-li-5"
                        class="block py-2 lg:px-3 text-gray-300 hover:text-white lg:hover:bg-opacity-25 lg:hover:bg-indigo-600 lg:rounded-3xl transition delay-100 duration-300 ease-in-out ">@lang('messages.pricing')</a>
                </li>
                <li>
                    <a data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
                        class="lg:animate-bounce animate-pulse block cursor-pointer py-2 lg:px-3 text-indigo-500 lg:text-gray-200 hover:text-gray-300 lg:bg-gradient-to-r lg:from-indigo-700 lg:to-blue-300 lg:rounded-3xl transition delay-5000 duration-2000 ease-in-out">@lang('messages.contact-sales')</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>



