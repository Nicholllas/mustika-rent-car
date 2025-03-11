<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- favicon --}}
    <link rel="icon" sizes="any" href="{{ url('/assets/favicon/favicon-32x32.png') }}">

    <!-- load swiper -->
    <link rel="stylesheet" sizes="any" href="{{ url('/css/swiper.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Libraries -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/front.css'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <main>
        <nav class="container relative my-4 lg:my-10">
            <div class="flex flex-col justify-between w-full lg:flex-row lg:items-center">
                <!-- Logo & Toggler Button here -->
                <div class="flex items-center justify-between">
                    <!-- LOGO -->
                    <a href="{{ route('front.index') }}" class="flex items-center">
                        <img src="/svgs/MTR.png" alt="stream" class="w-130 h-25 custom-image" />
                        <span class="ml-2 text-xl font-bold">Mustika Rental</span>
                    </a>

                    <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
                    <div class="block lg:hidden">
                        <button class="p-1 outline-none mobileMenuButton" id="navbarToggler" data-target="#navigation">
                            <svg class="text-dark w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 8h16M4 16h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Nav Menu -->
                <div class="hidden w-full lg:block" id="navigation">
                    <div
                        class="flex flex-col items-baseline gap-4 mt-6 lg:justify-between lg:flex-row lg:items-center lg:mt-0">
                        <div
                            class="flex flex-col w-full ml-auto lg:w-auto gap-4 lg:gap-[50px] lg:items-center lg:flex-row">
                            <a href="{{ route('front.index') }}" class="nav-link-item">Beranda</a>
                            <a href="{{ route('front.catalogue') }}" class="nav-link-item">Katalog</a>
                            {{-- <a href="#!" class="nav-link-item">Testimoni</a> --}}
                            {{-- <a href="#!" class="nav-link-item">Contact Us</a> --}}
                            {{-- <a href="#!" class="nav-link-item">Peta</a> --}}
                        </div>
                        @auth
                            <div class="flex flex-col w-full ml-auto lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                                {{-- Logout --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="btn-secondary"
                                        onclick="event.preventDefault();
                  this.closest('form').submit();">
                                        Log Out
                                    </a>
                                </form>
                            </div>
                        @else
                            <div class="flex flex-col w-full ml-auto lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                                <a href="{{ route('login') }}" class="text-white bg-red-500 btn-secondary hover:bg-red-600">
                                    Log In
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        {{ $slot }}
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 300,
            easing: 'ease-out'
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".mySwiper", {
                loop: true, // Agar slide bisa berputar
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>

    <script src="{{ url('js/script.js') }}"></script>
    <script src="{{ url('js/faqs.js') }}"></script>

</body>

</html>
