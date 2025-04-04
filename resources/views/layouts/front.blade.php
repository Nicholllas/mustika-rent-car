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

    <!-- Favicon -->
    <link rel="icon" sizes="any" href="{{ url('/assets/favicon/favicon-32x32.png') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" />

    <!-- Custom Styles -->
    @vite(['resources/css/front.css'])
    @livewireStyles
</head>

<body>

    <!-- Header and Navigation -->
    <header id="navbar" class="sticky top-0 z-50 w-full bg-white shadow-sm">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="{{ route('front.index') }}" class="flex items-center">
                    <img src="/svgs/MTR.png" alt="Mustika Rental" class="h-8 md:h-10">
                    <span class="ml-3 text-xl font-bold text-gray-900">Mustika Rental</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="items-center hidden space-x-8 lg:flex">
                    <div class="flex space-x-8">
                        <a href="{{ route('front.index') }}"
                            class="font-medium text-gray-900 transition duration-300 hover:text-red-500">Beranda</a>
                        <a href="{{ route('front.profile') }}"
                            class="font-medium text-gray-900 transition duration-300 hover:text-red-500">Profil</a>
                        <a href="{{ route('front.catalogue') }}"
                            class="font-medium text-gray-900 transition duration-300 hover:text-red-500">Katalog</a>
                        <a href="{{ route('front.contact') }}"
                            class="font-medium text-gray-900 transition duration-300 hover:text-red-500">Kontak</a>
                    </div>

                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="ml-8">
                            @csrf
                            <button type="submit"
                                class="px-6 py-2 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-6 py-2 ml-8 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                            Log In
                        </a>
                    @endauth
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="text-gray-900 lg:hidden focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden py-4 border-t border-gray-200 lg:hidden">
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('front.index') }}"
                        class="font-medium text-gray-900 hover:text-red-500">Beranda</a>
                    <a href="{{ route('front.profile') }}"
                        class="font-medium text-gray-900 hover:text-red-500">Profil</a>
                    <a href="{{ route('front.catalogue') }}"
                        class="font-medium text-gray-900 hover:text-red-500">Katalog</a>

                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="pt-4">
                            @csrf
                            <button type="submit"
                                class="w-full px-4 py-2 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 mt-4 text-center text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                            Log In
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>



    <!-- Main Content Area -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer>
        <!-- Footer content goes here -->
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ url('js/faqs.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.13.5/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            once: true,
            duration: 300,
            easing: 'ease-out'
        });
    </script>

    <!-- Swiper Hero Section-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".heroSwiper", {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className +
                            ' !w-3 !h-3 !mx-1 !bg-gray-300 !opacity-100 hover:!bg-red-300"></span>';
                    },
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel-inner');
            const items = document.querySelectorAll('.carousel-item');
            const dots = document.querySelectorAll('.dot-button');
            const prevBtn = document.querySelector('.carousel-prev');
            const nextBtn = document.querySelector('.carousel-next');

            let currentIndex = 0;
            const itemCount = items.length;

            // Update carousel position
            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

                // Update active dot
                dots.forEach((dot, index) => {
                    dot.classList.toggle('bg-red-500', index === currentIndex);
                    dot.classList.toggle('bg-gray-300', index !== currentIndex);
                });
            }

            // Next slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % itemCount;
                updateCarousel();
            }

            // Previous slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + itemCount) % itemCount;
                updateCarousel();
            }

            // Auto-rotate (optional)
            let autoSlide = setInterval(nextSlide, 5000);

            // Pause on hover
            document.querySelector('.testimonial-carousel').addEventListener('mouseenter', () => {
                clearInterval(autoSlide);
            });

            document.querySelector('.testimonial-carousel').addEventListener('mouseleave', () => {
                autoSlide = setInterval(nextSlide, 5000);
            });

            // Dot navigation
            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    currentIndex = parseInt(dot.dataset.index);
                    updateCarousel();
                });
            });

            // Button navigation
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            // Initialize
            updateCarousel();
        });
    </script>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
