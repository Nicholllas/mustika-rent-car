<x-front-layout>
    @section('title')
        Profil Perusahaan | {{ config('app.name') }}
    @endsection

    {{-- Modern Hero Section --}}
    <div class="relative w-full h-[70vh] min-h-[500px] overflow-hidden bg-gray-900">
        <!-- Gradient overlay -->
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-black/80 to-black/40"></div>

        <!-- Background image with parallax effect -->
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('storage/assets/heroprofile.webp') }}" alt="Background Mustika Rental"
                class="object-cover w-full h-full scale-110 animate-zoomInOut" loading="lazy"
                style="animation: zoomInOut 20s infinite alternate;">
        </div>

        <!-- Hero content -->
        <div class="relative z-20 flex items-center justify-center w-full h-full px-4">
            <div class="max-w-4xl px-6 py-8 text-center text-white bg-black/30 backdrop-blur-sm rounded-xl">
                <h1 class="text-4xl font-bold leading-tight sm:text-5xl md:text-6xl animate-fadeIn">
                    Profil <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-300">Mustika
                        Rental</span>
                </h1>
                <p class="mt-4 text-xl text-gray-300 sm:text-2xl">Solusi Rental Mobil Premium dengan Pelayanan Terbaik
                </p>
                <div class="mt-8">
                    <a href="{{ route('front.catalogue') }}"
                        class="inline-flex items-center px-8 py-3 text-lg font-medium text-white transition-all duration-300 bg-red-600 rounded-full hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/30">
                        Lihat Armada Kami
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute z-20 transform -translate-x-1/2 bottom-8 left-1/2 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </div>
    {{-- end hero section --}}

    {{-- About Us section --}}
    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center lg:flex-row">
                <!-- Image with modern frame -->
                <div class="relative mb-12 lg:mb-0 lg:w-1/2 lg:pr-12">
                    <div class="relative overflow-hidden shadow-2xl rounded-xl">
                        <img src="{{ asset('storage/assets/aboutus.webp') }}" alt="About Mustika Rental"
                            class="object-cover w-full h-auto transition-transform duration-500 hover:scale-105"
                            loading="lazy">
                    </div>
                    <div
                        class="absolute w-64 h-64 -bottom-6 -right-6 -z-10 bg-gradient-to-r from-red-500 to-red-300 rounded-xl opacity-20">
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:w-1/2">
                    <div class="mb-8">
                        <span
                            class="inline-block px-3 py-1 text-sm font-semibold text-red-600 bg-red-100 rounded-full">Tentang
                            Kami</span>
                        <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl">Mustika Rental - Solusi
                            Transportasi Premium</h2>
                        <div class="mt-4 h-1.5 w-20 bg-gradient-to-r from-red-500 to-red-300 rounded-full"></div>
                    </div>

                    <p class="mb-6 text-lg text-gray-600">
                        Sejak berdiri, Mustika Rental telah menjadi pilihan utama bagi mereka yang mengutamakan kualitas
                        dan kenyamanan dalam perjalanan. Kami menawarkan pengalaman rental mobil yang berbeda dengan
                        armada terawat dan pelayanan profesional.
                    </p>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div class="p-6 bg-gray-50 rounded-xl">
                            <div class="flex items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mr-4 text-white bg-red-500 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">1000+ Pelanggan</h3>
                            </div>
                            <p class="text-gray-600">Melayani ribuan pelanggan puas setiap tahunnya</p>
                        </div>

                        <div class="p-6 bg-gray-50 rounded-xl">
                            <div class="flex items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mr-4 text-white bg-red-500 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">50+ Armada</h3>
                            </div>
                            <p class="text-gray-600">Berbagai pilihan mobil dari ekonomi hingga premium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end About Us section --}}

    {{-- Visi Misi Section --}}
    <section class="py-20 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <span class="inline-block px-3 py-1 text-sm font-semibold text-red-600 bg-red-100 rounded-full">Visi &
                    Misi</span>
                <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl">Komitmen Kami Untuk Anda</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Landasan yang memandu setiap langkah kami dalam memberikan layanan terbaik di industri rental mobil.
                </p>
            </div>

            <div class="grid gap-12 md:grid-cols-2">
                <!-- Visi Card -->
                <div class="relative p-8 transition-shadow duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-300 rounded-t-xl">
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="flex items-center justify-center w-16 h-16 mr-6 text-white bg-red-500 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Visi</h3>
                    </div>
                    <p class="text-lg text-gray-600">
                        Menjadi penyedia layanan rental mobil terdepan di Indonesia dengan inovasi terus-menerus dalam
                        kenyamanan, keamanan, dan kepuasan pelanggan.
                    </p>
                </div>

                <!-- Misi Card -->
                <div class="relative p-8 transition-shadow duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-300 rounded-t-xl">
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="flex items-center justify-center w-16 h-16 mr-6 text-white bg-red-500 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Misi</h3>
                    </div>
                    <ul class="space-y-4 text-lg text-gray-600">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="flex-shrink-0 w-5 h-5 mt-1 mr-3 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Menyediakan armada terawat dengan standar tinggi</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="flex-shrink-0 w-5 h-5 mt-1 mr-3 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Memberikan pelayanan profesional dan responsif</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="flex-shrink-0 w-5 h-5 mt-1 mr-3 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Mengutamakan keselamatan dan kenyamanan pelanggan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- end Visi Misi Section --}}

    {{-- Kebijakan Section --}}
    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <span
                    class="inline-block px-3 py-1 text-sm font-semibold text-red-600 bg-red-100 rounded-full">Kebijakan</span>
                <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl">Transparansi dan Kepercayaan</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Kebijakan kami dirancang untuk melindungi kedua belah pihak dan memastikan pengalaman rental yang
                    lancar.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <!-- Kebijakan 1 -->
                <div
                    class="p-8 transition-all duration-300 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-transparent">
                    <div class="flex items-center justify-center w-16 h-16 mb-6 text-white bg-red-500 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-gray-900">Pembatalan</h3>
                    <p class="text-gray-600">
                        Pembatalan gratis hingga 24 jam sebelum waktu sewa. Setelah itu, dikenakan biaya 50% dari total
                        harga sewa.
                    </p>
                </div>

                <!-- Kebijakan 2 -->
                <div
                    class="p-8 transition-all duration-300 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-transparent">
                    <div class="flex items-center justify-center w-16 h-16 mb-6 text-white bg-red-500 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-gray-900">Pengembalian</h3>
                    <p class="text-gray-600">
                        Mobil harus dikembalikan dalam kondisi sama seperti saat disewa. Pengecekan kondisi dilakukan
                        bersama.
                    </p>
                </div>

                <!-- Kebijakan 3 -->
                <div
                    class="p-8 transition-all duration-300 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-transparent">
                    <div class="flex items-center justify-center w-16 h-16 mb-6 text-white bg-red-500 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-gray-900">Keterlambatan</h3>
                    <p class="text-gray-600">
                        Denda 10% dari harga sewa per jam dengan maksimal 100% dari harga sewa harian untuk
                        keterlambatan.
                    </p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center font-medium text-red-600 hover:text-red-700">
                    Lihat Kebijakan Lengkap
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- end Kebijakan Section --}}

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
