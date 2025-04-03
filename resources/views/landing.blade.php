<x-front-layout>
    @section('title')
        Home | {{ config('app.name') }}
    @endsection
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-white">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <div class="swiper-slide">
                        <div
                            class="container flex flex-col items-center gap-8 px-4 py-16 mx-auto md:py-24 lg:py-32 lg:flex-row">
                            <!-- Content (Left) -->
                            <div class="z-10 w-full space-y-6 lg:w-1/2">
                                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                                    {{ $slide->title }}
                                </h2>

                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-red-500" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $slide->description }}</span>
                                    </li>
                                    @if ($slide->disc)
                                        <li class="flex items-start">
                                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-red-500" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Dapatkan potongan hingga Rp. {{ number_format($slide->disc) }}</span>
                                        </li>
                                    @endif
                                    <li class="flex items-start">
                                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-red-500" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Promo berlaku sampai
                                            {{ \Carbon\Carbon::parse($slide->end_date)->format('d M Y') }}</span>
                                    </li>
                                </ul>

                                <button
                                    class="inline-flex items-center px-8 py-3 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                                    Redeem Promo
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Image (Right) -->
                            <div class="flex justify-center w-full lg:w-1/2">
                                <img src="{{ asset('storage/' . ($slide->photo ?? 'default.jpg')) }}"
                                    class="h-auto max-w-full rounded-lg shadow-xl" alt="Promo {{ $slide->title }}"
                                    data-aos="zoom-in" data-aos-delay="950">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation -->
            <div
                class="items-center justify-center hidden w-12 h-12 text-red-500 transition bg-white border-2 border-red-500 rounded-full shadow-lg swiper-button-next md:flex hover:bg-red-50">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div
                class="items-center justify-center hidden w-12 h-12 text-red-500 transition bg-white border-2 border-red-500 rounded-full shadow-lg swiper-button-prev md:flex hover:bg-red-50">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination !bottom-4"></div>
        </div>
    </section>

    <!-- Popular Cars Section - Updated to Match Testimonial Style -->
    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <header class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900">Paling Sering Dipesan</h2>
                <div class="flex justify-center mt-4">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
                <p class="mt-2 text-gray-600">Pilih mobil idaman kamu</p>
            </header>

            <!-- Cars Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($items as $item)
                    <!-- Card -->
                    <div class="relative p-6 transition-all duration-300 bg-gray-50 rounded-xl hover:shadow-lg group">
                        <div class="mb-4">
                            <h5 class="mb-1 text-lg font-bold text-gray-900">
                                {{ $item->name }}
                            </h5>
                            <p class="text-gray-600">{{ $item->type ? $item->type->name : '-' }}</p>
                            <a href="{{ route('front.detail', $item->slug) }}" class="absolute inset-0"></a>
                        </div>

                        <img src="{{ $item->thumbnail }}" class="object-cover w-full h-40 mb-4 rounded-lg"
                            alt="{{ $item->name }}">

                        <div class="flex items-center justify-between">
                            <!-- Price -->
                            <div>
                                <p class="text-sm text-gray-600">Mulai dari</p>
                                <p class="text-lg font-bold text-red-500">
                                    Rp{{ number_format($item->price, 0, ',', '.') }}/hari
                                </p>
                            </div>

                            <!-- Rating -->
                            <div class="flex items-center text-yellow-400">
                                <span class="mr-1 font-semibold text-gray-900">{{ $item->star }}</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Modern Services Section --}}
    <section class="py-20 bg-gray-50" id="services">
        <div class="container px-4 mx-auto">
            <!-- Header with decorative elements -->
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <span
                    class="inline-block px-3 py-1 mb-4 text-sm font-semibold text-red-600 bg-red-100 rounded-full">Layanan
                    Kami</span>
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Solusi Rental Mobil Premium</h2>
                <div class="mx-auto mt-4 h-1.5 w-20 bg-gradient-to-r from-red-500 to-red-300 rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600">
                    Nikmati kemudahan sewa mobil dengan pilihan lepas kunci atau plus driver. Mustika Rental memberikan
                    pengalaman berkendara yang nyaman dan aman.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service Card 1 -->
                <div
                    class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('storage/assets/service/jemput.jpg') }}" alt="Paket Jemput Bandara"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold text-white">Paket Jemput Bandara</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 w-5 h-5 mt-0.5 mr-3 text-red-500" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Antar-jemput bandara tepat waktu</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 w-5 h-5 mt-0.5 mr-3 text-red-500" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Driver profesional berpengalaman</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 w-5 h-5 mt-0.5 mr-3 text-red-500" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Armada nyaman dan bersih</span>
                            </li>
                        </ul>
                        <a href="{{ route('front.catalogue') }}"
                            class="inline-flex items-center px-6 py-3 mt-6 font-medium text-white transition-all bg-red-600 rounded-lg hover:bg-red-700 group">
                            Pesan Sekarang
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('storage/assets/service/rental.jpg') }}" alt="Rental Harian"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold text-white">Rental Harian</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="mb-6 text-gray-600">
                            Sewa mobil harian dengan pilihan lepas kunci atau plus driver untuk kebutuhan bisnis dan
                            liburan.
                        </p>
                        <a href="{{ route('front.catalogue') }}"
                            class="inline-flex items-center px-6 py-3 font-medium text-white transition-all bg-red-600 rounded-lg hover:bg-red-700 group">
                            Pesan Sekarang
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div
                    class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('storage/assets/service/wisata.jpg') }}" alt="Paket Wisata"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold text-white">Paket Wisata</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="mb-6 text-gray-600">
                            Jelajahi destinasi wisata dengan paket lengkap termasuk mobil dan driver profesional yang
                            memahami lokasi.
                        </p>
                        <a href="{{ route('front.catalogue') }}"
                            class="inline-flex items-center px-6 py-3 font-medium text-white transition-all bg-red-600 rounded-lg hover:bg-red-700 group">
                            Pesan Sekarang
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Combined Benefits & Testimonials Section --}}
    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <!-- Section Header -->
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Keunggulan Mustika Rental</h2>
                <div class="flex justify-center mt-4">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
            </div>

            <div class="flex flex-col items-start lg:flex-row lg:space-x-8">
                <!-- Benefits List (Left Column - 50%) -->
                <div class="w-full mb-12 lg:w-1/2 lg:mb-0">
                    <div class="space-y-6">
                        <!-- Benefit 1 -->
                        <div class="flex p-6 transition-all duration-300 rounded-lg bg-gray-50 hover:shadow-md">
                            <div class="flex-shrink-0 p-3 mr-4 text-white bg-red-500 rounded-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900">Proses Mudah</h4>
                                <p class="mt-1 text-gray-600">Pemesanan online cepat dengan konfirmasi instan, tanpa
                                    ribet.</p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="flex p-6 transition-all duration-300 rounded-lg bg-gray-50 hover:shadow-md">
                            <div class="flex-shrink-0 p-3 mr-4 text-white bg-red-500 rounded-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900">Harga Terbaik</h4>
                                <p class="mt-1 text-gray-600">Harga kompetitif dengan kualitas pelayanan premium.</p>
                            </div>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="flex p-6 transition-all duration-300 rounded-lg bg-gray-50 hover:shadow-md">
                            <div class="flex-shrink-0 p-3 mr-4 text-white bg-red-500 rounded-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900">Aman & Terpercaya</h4>
                                <p class="mt-1 text-gray-600">Armada terawat dan asuransi lengkap untuk keamanan Anda.
                                </p>
                            </div>
                        </div>

                        <!-- Benefit 4 -->
                        <div class="flex p-6 transition-all duration-300 rounded-lg bg-gray-50 hover:shadow-md">
                            <div class="flex-shrink-0 p-3 mr-4 text-white bg-red-500 rounded-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900">24/7 Support</h4>
                                <p class="mt-1 text-gray-600">Tim siap membantu kapan saja selama masa rental.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Carousel (Right Column - 50%) -->
                <div class="w-full lg:w-1/2">
                    <div class="h-full p-8 shadow-lg bg-gray-50 rounded-xl">
                        <div class="mb-6 text-center">
                            <h3 class="text-2xl font-bold text-gray-900">Apa Kata Pelanggan Kami?</h3>
                            <div class="flex justify-center mt-2">
                                <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                            </div>
                        </div>

                        <!-- Custom Carousel Container -->
                        <div class="relative overflow-hidden testimonial-carousel">
                            <div class="flex transition-transform duration-300 carousel-inner">
                                @foreach ($testimoni as $t)
                                    <div class="flex-shrink-0 w-full carousel-item">
                                        <div class="flex flex-col items-center p-6 text-center">
                                            <img src="{{ $t->foto ? asset('storage/' . $t->foto) : asset('storage/assets/default-profile.webp') }}"
                                                alt="{{ $t->nama }}"
                                                class="object-cover w-20 h-20 mb-4 rounded-full ring-2 ring-red-500">
                                            <h5 class="text-lg font-bold text-gray-900">{{ $t->nama }}</h5>
                                            <p class="mt-3 text-gray-600">"{{ $t->pesan }}"</p>
                                            <div class="flex mt-4 text-yellow-400">
                                                @for ($i = 0; $i < $t->rating; $i++)
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Custom Pagination Dots -->
                            <div class="flex justify-center mt-6 space-x-2 carousel-dots">
                                @foreach ($testimoni as $index => $t)
                                    <button
                                        class="w-3 h-3 rounded-full bg-gray-300 dot-button {{ $index === 0 ? 'bg-red-500' : '' }}"
                                        data-index="{{ $index }}"></button>
                                @endforeach
                            </div>

                            <!-- Navigation Arrows -->
                            <button class="absolute left-0 transform -translate-y-1/2 carousel-prev top-1/2">
                                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button class="absolute right-0 transform -translate-y-1/2 carousel-next top-1/2">
                                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Clients Section --}}
    <section class="py-16 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Dipercaya Oleh</h2>
                <p class="mt-2 text-gray-600">Perusahaan dan institusi ternama yang telah menggunakan layanan kami</p>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                <!-- Client Logo 1 -->
                <div
                    class="flex items-center justify-center p-4 transition-all duration-300 bg-white rounded-lg shadow-sm hover:shadow-md">
                    <img src="{{ asset('storage/assets/client/Telkom.webp') }}" alt="Client Logo" class="h-12"
                        loading="lazy">
                </div>

                <!-- Client Logo 2 -->
                <div
                    class="flex items-center justify-center p-4 transition-all duration-300 bg-white rounded-lg shadow-sm hover:shadow-md">
                    <img src="{{ asset('storage/assets/client/jasamarga.webp') }}" alt="Client Logo" class="h-12"
                        loading="lazy">
                </div>

                <!-- Client Logo 3 -->
                <div
                    class="flex items-center justify-center p-4 transition-all duration-300 bg-white rounded-lg shadow-sm hover:shadow-md">
                    <img src="{{ asset('storage/assets/client/wika.webp') }}" alt="Client Logo" class="h-12"
                        loading="lazy">
                </div>

                <!-- Client Logo 4 -->
                <div
                    class="flex items-center justify-center p-4 transition-all duration-300 bg-white rounded-lg shadow-sm hover:shadow-md">
                    <img src="{{ asset('storage/assets/client/bjb.webp') }}" alt="Client Logo" class="h-12"
                        loading="lazy">
                </div>

                <!-- Client Logo 5 -->
                <div
                    class="flex items-center justify-center p-4 transition-all duration-300 bg-white rounded-lg shadow-sm hover:shadow-md">
                    <img src="{{ asset('storage/assets/client/asus.webp') }}" alt="Client Logo" class="h-12"
                        loading="lazy">
                </div>

                <!-- Client Logo 6 -->
                <div
                    class="flex items-center justify-center p-4 transition-all duration-300 bg-white rounded-lg shadow-sm hover:shadow-md">
                    <img src="{{ asset('storage/assets/client/pupr.webp') }}" alt="Client Logo" class="h-12"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <span
                    class="inline-block px-3 py-1 mb-4 text-sm font-semibold text-red-600 bg-red-100 rounded-full">FAQ</span>
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Pertanyaan Umum</h2>
                <div class="mx-auto mt-4 h-1.5 w-20 bg-gradient-to-r from-red-500 to-red-300 rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan rental kami.
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 border border-gray-200 rounded-xl hover:border-red-300">
                        <button @click="open = !open" class="flex items-center justify-between w-full p-6 text-left">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $faq->question }}</h3>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300"
                                :class="open ? 'transform rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="px-6 pb-6 -mt-2 text-gray-600">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600">Masih ada pertanyaan?</p>
                <a href="{{ route('front.catalogue') }}"
                    class="inline-flex items-center mt-4 font-medium text-red-600 hover:text-red-700">
                    Hubungi Kami
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

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
    {{-- end CTA Section --}}

    {{-- Footer --}}
    <footer class="py-12 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('front.catalogue') }}" class="text-2xl font-bold text-gray-900">
                        <span class="text-red-600">Mustika</span> Rental
                    </a>
                    <p class="mt-2 text-gray-600">
                        Solusi rental mobil premium untuk kebutuhan perjalanan Anda.
                    </p>
                </div>

                <div class="flex space-x-6">
                    <a href="#" class="text-gray-600 hover:text-red-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-red-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-red-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="pt-8 mt-8 border-t border-gray-200">
                <p class="text-sm text-center text-gray-500">
                    &copy; {{ date('Y') }} Mustika Rental. All rights reserved.
                </p>
            </div>
        </div>
        </section>
        {{-- end Footer --}}
</x-front-layout>
