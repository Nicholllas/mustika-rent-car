<x-front-layout>
    @section('title')
        Katalog | {{ config('app.name') }}
    @endsection

    @section('styles')
        @parent
        <link rel="preload" href="{{ asset('assets/sliders/9.png') }}" as="image">
        <link rel="preload" href="{{ asset('assets/sliders/11.png') }}" as="image">
    @endsection

    {{-- Carousel Section --}}
    @php
        $slides = [
            ['image' => 'assets/sliders/9.png', 'alt' => 'Promo 1'],
            ['image' => 'assets/sliders/11.png', 'alt' => 'Promo 2'],
            ['image' => 'assets/sliders/9.png', 'alt' => 'Promo 3'],
        ];
    @endphp

    <section class="bg-white">
        <div class="container relative py-[10px]">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @foreach ($slides as $slide)
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($slide['image']) }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="{{ $slide['alt'] }}" loading="lazy">
                        </div>
                    @endforeach
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                    @foreach ($slides as $index => $slide)
                        <button type="button" class="w-3 h-3 rounded-full"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"
                            data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- Brand Sections -->
    @php
        $brands = [
            'Toyota' => [
                'items' => $toyota ?? [],
                'paginated' => $toyota_paginated ?? false,
            ],
            'Honda' => [
                'items' => $honda ?? [],
                'paginated' => $honda_paginated ?? false,
            ],
            'Mitsubishi' => [
                'items' => $mitsubishi ?? [],
                'paginated' => $mitsubishi_paginated ?? false,
            ],
            'Daihatsu' => [
                'items' => $daihatsu ?? [],
                'paginated' => $daihatsu_paginated ?? false,
            ],
            'Suzuki' => [
                'items' => $suzuki ?? [],
                'paginated' => $suzuki_paginated ?? false,
            ],
            'Isuzu' => [
                'items' => $isuzu ?? [],
                'paginated' => $isuzu_paginated ?? false,
            ],
            'EV' => [
                'items' => $ev ?? [],
                'paginated' => $ev_paginated ?? false,
            ],
            'Bus' => [
                'items' => $bus ?? [],
                'paginated' => $bus_paginated ?? false,
            ],
        ];
    @endphp

    @foreach ($brands as $brandName => $brandData)
        @if (count($brandData['items']) > 0)
            <section class="py-12 bg-white">
                <div class="container px-4 mx-auto">
                    <header class="mb-8 text-center">
                        <h2 class="text-3xl font-bold text-gray-900">{{ $brandName }}</h2>
                        <div class="flex justify-center mt-2">
                            <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                        </div>
                        <p class="mt-2 text-gray-600">Armada Kami</p>
                    </header>

                    <!-- Vehicles Grid -->
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                        @foreach ($brandData['items'] as $vehicle)
                            @include('partials.vehicle-card', ['vehicle' => $vehicle])
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    @if ($brandData['paginated'] && $brandData['items'] instanceof \Illuminate\Pagination\AbstractPaginator)
                        <div class="mt-8">
                            {{ $brandData['items']->links() }}
                        </div>
                    @endif
                </div>
            </section>
        @endif
    @endforeach

    {{-- CTA Section --}}
    <section class="relative py-20 overflow-hidden bg-gradient-to-br from-gray-900 to-gray-800">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div
                class="absolute top-0 left-0 w-64 h-64 bg-red-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute bottom-0 left-0 w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="relative z-10 px-4 mx-auto max-w-7xl">
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <div class="max-w-xl mb-10 lg:mb-0">
                    <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl">Siap Memulai Perjalanan Anda?</h2>
                    <p class="text-lg text-gray-300">
                        Pesan sekarang dan dapatkan pengalaman berkendara terbaik dengan armada premium kami. Tim
                        profesional kami siap melayani kebutuhan rental mobil Anda.
                    </p>
                </div>

                <div class="flex flex-col w-full sm:flex-row sm:space-x-4 lg:w-auto">
                    <a href="{{ route('front.catalogue') }}"
                        class="px-8 py-4 mb-4 text-lg font-medium text-center text-white transition-all duration-300 bg-red-600 rounded-lg sm:mb-0 hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/30">
                        Pesan Sekarang
                    </a>
                    <a href="tel:+6281234567890"
                        class="px-8 py-4 text-lg font-medium text-center text-white transition-all duration-300 bg-transparent border-2 border-white rounded-lg hover:bg-white hover:text-gray-900">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('partials.footer')

    @section('scripts')
        @parent
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousel = document.getElementById('default-carousel');

                if (!carousel) return; // Exit if carousel doesn't exist

                const items = carousel.querySelectorAll('[data-carousel-item]');
                const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
                const prevButton = carousel.querySelector('[data-carousel-prev]');
                const nextButton = carousel.querySelector('[data-carousel-next]');

                if (!items.length || !prevButton || !nextButton) return;

                let currentIndex = 0;

                function updateCarousel() {
                    // First hide all items
                    items.forEach(item => {
                        item.style.display = 'none';
                    });

                    // Then show current item
                    if (items[currentIndex]) {
                        items[currentIndex].style.display = 'block';
                    }

                    // Update indicators
                    indicators.forEach((indicator, index) => {
                        indicator.setAttribute('aria-current', index === currentIndex);
                    });
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % items.length;
                    updateCarousel();
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + items.length) % items.length;
                    updateCarousel();
                }

                // Initialize
                updateCarousel();

                // Event listeners
                nextButton.addEventListener('click', nextSlide);
                prevButton.addEventListener('click', prevSlide);

                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        currentIndex = index;
                        updateCarousel();
                    });
                });

                // Optional: Auto-rotate
                // let interval = setInterval(nextSlide, 5000);
                // carousel.addEventListener('mouseenter', () => clearInterval(interval));
                // carousel.addEventListener('mouseleave', () => {
                //     interval = setInterval(nextSlide, 5000);
                // });
            });
        </script>
    @endsection
</x-front-layout>
