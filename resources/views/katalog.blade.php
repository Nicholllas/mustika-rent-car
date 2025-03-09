<x-front-layout>
    @section('title')
        Katalog | {{ config('app.name') }}
    @endsection

    {{-- Carousel --}}
    <section class="bg-white">
        <div class="container relative py-[10px]">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/sliders/9.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Test">
                    </div>
                    <!-- Item 2 -->
                    <div class="duration-700 ease-in-out " data-carousel-item>
                        <img src="{{ asset('assets/sliders/11.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/sliders/9.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
    <!-- TOYOTA -->
    <section class="bg-white mt-10 lg:mt-[25px]">
        <div class="container relative py-[10px]">
            <header class="mb-[30px]">
                <h2 class="font-bold text-dark text-[26px] mb-1">
                    Toyota
                </h2>
                <p class="text-base text-secondary">Armada Kami</p>
            </header>

            <!-- Cars -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
                @foreach ($toyota as $t)
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                {{ $t->name }}
                            </h5>
                            <p class="text-sm font-normal text-secondary">{{ $t->type ? $t->type->name : '-' }}
                            </p>
                            <a href="{{ route('front.detail', $t->slug) }}" class="absolute inset-0"></a>
                        </div>
                        <img src="{{ $t->thumbnail }}" class="rounded-[18px] min-w-[216px] w-full h-[150px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-sm font-normal text-secondary">Mulai dari
                                <span
                                    class="text-base font-bold text-primary">Rp{{ number_format($t->price, 0, ',', '.') }}</span>/hari
                            </p>
                            <!-- Rating -->
                            <p class="text-dark text-xs font-semibold flex items-center gap-[2px]">
                                {{ $t->star }}
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- HONDA -->
    <section class="bg-white">
        <div class="container relative py-[10px]">
            <header class="mb-[30px]">
                <h2 class="font-bold text-dark text-[26px] mb-1">
                    Honda
                </h2>
                <p class="text-base text-secondary">Armada Kami</p>
            </header>

            <!-- Cars -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
                @foreach ($honda as $h)
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                {{ $h->name }}
                            </h5>
                            <p class="text-sm font-normal text-secondary">{{ $h->type ? $h->type->name : '-' }}
                            </p>
                            <a href="{{ route('front.detail', $h->slug) }}" class="absolute inset-0"></a>
                        </div>
                        <img src="{{ $h->thumbnail }}" class="rounded-[18px] min-w-[216px] w-full h-[150px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-sm font-normal text-secondary">Mulai dari
                                <span
                                    class="text-base font-bold text-primary">Rp{{ number_format($h->price, 0, ',', '.') }}</span>/hari
                            </p>
                            <!-- Rating -->
                            <p class="text-dark text-xs font-semibold flex items-center gap-[2px]">
                                {{ $h->star }}
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>



    {{-- <!-- FAQ -->
    <section class="container relative py-[100px]">
        <header class="text-center mb-[50px]">
            <h2 class="font-bold text-dark text-[26px] mb-1">
                Pertanyaan yang sering diajukan
            </h2>
            <p class="text-base text-secondary">Pelajari lebih lanjut tentang mustika rental</p>
        </header>

        <!-- Questions -->
        <div class="grid md:grid-cols-2 gap-x-[50px] gap-y-6 max-w-[910px] w-full mx-auto">
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq1">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        What if I crash the car?
                    </p>
                    <img src="../assets/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq1-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
        </div>
    </section> --}}

    <!-- Instant Booking -->
    <section class="relative bg-[#060523] mt-10 lg:mt-[25px]">
        <div class="container py-20">
            <div class="flex flex-col">
                <header class="mb-[50px] max-w-[360px] w-full">
                    <h2 class="font-bold text-white text-[25px] mb-4">
                        Mobil Nyaman, Harga Terbaik <br>
                        Perjalanan Bebas Khawatir Dimulai di Sini!
                    </h2>
                    <p class="text-base text-subtlePars">Nikmati pemesanan instan dan wujudkan perjalanan impian Anda
                        dengan mudah.</p>
                </header>
                <!-- Button Primary -->
                <div class="p-1 rounded-full bg-primary group w-max">
                    <a href="#" class="btn-primary flex items-center justify-between w-[250px] px-4 py-2">
                        <p>
                            Pesan Sekarang
                        </p>
                        <img src="../assets/svgs/ic-arrow-right.svg" alt="">
                    </a>
                </div>

            </div>
            <div class="absolute bottom-[-30px] right-0 lg:w-[764px] max-h-[332px] hidden lg:block">
                <img src="../assets/images/porsche_small.webp" alt="">
            </div>
        </div>
    </section>


    <footer class="py-10 md:pt-[100px] md:pb-[70px] container">
        <p class="text-base text-center text-secondary">
            All Rights Reserved. Copyright NCS Production 2023.
        </p>
    </footer>
    <script>
        document.getElementById('default-carousel').carousel();
        // Example event listeners for carousel buttons
        $('[data-carousel-prev]').on('click', function() {
            // Handle previous button click
            $(defaultCarousel).carousel('prev');
        });

        $('[data-carousel-next]').on('click', function() {
            // Handle next button click
            $(defaultCarousel).carousel('next');
        });
    </script>
</x-front-layout>
