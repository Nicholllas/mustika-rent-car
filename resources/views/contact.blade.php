<x-front-layout>
    @section('title')
        Kontak Kami | {{ config('app.name') }}
    @endsection

    {{-- Modern Hero Section --}}
    <div class="relative w-full h-[50vh] min-h-[400px] overflow-hidden bg-gray-900">
        <!-- Gradient overlay -->
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-black/80 to-black/40"></div>

        <!-- Background image with parallax effect -->
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('storage/assets/herocontact.webp') }}" alt="Background Mustika Rental"
                class="object-cover w-full h-full scale-110 animate-zoomInOut" loading="lazy"
                style="animation: zoomInOut 20s infinite alternate;">
        </div>

        <!-- Hero content -->
        <div class="relative z-20 flex items-center justify-center w-full h-full px-4">
            <div class="max-w-4xl px-6 py-8 text-center text-white bg-black/30 backdrop-blur-sm rounded-xl">
                <h1 class="text-4xl font-bold leading-tight sm:text-5xl md:text-6xl animate-fadeIn">
                    Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-300">Mustika
                        Rental</span>
                </h1>
                <p class="mt-4 text-xl text-gray-300 sm:text-2xl">Kami siap membantu kebutuhan rental mobil Anda</p>
            </div>
        </div>
    </div>
    {{-- end hero section --}}

    {{-- Contact Section --}}
    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <span
                    class="inline-block px-3 py-1 text-sm font-semibold text-red-600 bg-red-100 rounded-full">Kontak</span>
                <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl">Hubungi Kami</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Tim customer service kami siap membantu Anda 24/7 melalui berbagai saluran komunikasi.
                </p>
            </div>

            <div class="grid gap-12 lg:grid-cols-2">
                <!-- Contact Cards -->
                <div class="space-y-6">
                    <!-- Phone/WhatsApp Card -->
                    <div
                        class="flex p-6 transition-all duration-300 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-transparent">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-16 h-16 mr-6 text-white bg-red-500 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900">Telepon & WhatsApp</h3>
                            <p class="mb-3 text-gray-600">Hubungi kami untuk informasi cepat melalui telepon atau
                                WhatsApp.</p>
                            <div class="flex flex-wrap gap-3">
                                <a href="tel:+6281234567890"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-300 bg-green-600 rounded-lg hover:bg-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.479 5.092 1.479 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                    WhatsApp
                                </a>
                                <a href="tel:+6281234567890"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    Telepon
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div
                        class="flex p-6 transition-all duration-300 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-transparent">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-16 h-16 mr-6 text-white bg-red-500 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900">Email</h3>
                            <p class="mb-3 text-gray-600">Kirim pertanyaan detail atau permintaan khusus melalui email.
                            </p>
                            <a href="mailto:info@mustikarental.com"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-300 bg-gray-800 rounded-lg hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                info@mustikarental.com
                            </a>
                        </div>
                    </div>

                    <!-- Social Media Card -->
                    <div
                        class="flex p-6 transition-all duration-300 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-transparent">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-16 h-16 mr-6 text-white bg-red-500 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900">Media Sosial</h3>
                            <p class="mb-3 text-gray-600">Ikuti kami di media sosial untuk update terbaru dan promo
                                spesial.</p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="p-2 text-gray-700 transition-all duration-300 bg-gray-100 rounded-full hover:bg-blue-600 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="p-2 text-gray-700 transition-all duration-300 bg-gray-100 rounded-full hover:bg-pink-600 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="p-2 text-gray-700 transition-all duration-300 bg-gray-100 rounded-full hover:bg-blue-400 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Section -->
                <div class="overflow-hidden shadow-xl rounded-xl">
                    <div class="bg-gray-200 h-96"> <!-- Sesuaikan tinggi di sini -->
                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.553191569135!2d107.02746127457164!3d-6.322265393667227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d3b656221d5%3A0xa848f72342e28d23!2sRental%20Mobil%20Mustika%20Jaya!5e0!3m2!1sid!2sid!4v1743665491147!5m2!1sid!2sid"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="Lokasi Mustika Rental Bekasi"></iframe>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-gray-900">Lokasi Kantor Kami</h3>
                        <p class="mt-2 text-gray-600">
                            Jl. Contoh No. 123, Kota Bandung, Jawa Barat 40123<br>
                            Buka Senin - Minggu: 08.00 - 17.00 WIB
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end Contact Section --}}

    {{-- Contact Form Section --}}
    <section class="py-20 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="p-8 bg-white shadow-lg rounded-xl">
                    <div class="mb-8 text-center">
                        <span
                            class="inline-block px-3 py-1 text-sm font-semibold text-red-600 bg-red-100 rounded-full">Pesan</span>
                        <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl">Kirim Pesan kepada Kami</h2>
                        <p class="mt-4 text-lg text-gray-600">
                            Punya pertanyaan atau permintaan khusus? Isi form berikut dan tim kami akan segera
                            merespons.
                        </p>
                    </div>

                    <form class="space-y-6">
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama
                                    Lengkap</label>
                                <input type="text" id="name" name="name" required
                                    class="block w-full px-4 py-3 mt-1 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" required
                                    class="block w-full px-4 py-3 mt-1 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                            <input type="text" id="subject" name="subject" required
                                class="block w-full px-4 py-3 mt-1 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="message" name="message" rows="5" required
                                class="block w-full px-4 py-3 mt-1 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-8 py-3 text-lg font-medium text-white transition-all duration-300 bg-red-600 rounded-lg hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/30">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- end Contact Form Section --}}

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
                    <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl">Butuh Bantuan Cepat?</h2>
                    <p class="text-lg text-gray-300">
                        Hubungi customer service kami sekarang juga untuk informasi lebih lanjut tentang layanan rental
                        mobil kami.
                    </p>
                </div>

                <div class="flex flex-col w-full sm:flex-row sm:space-x-4 lg:w-auto">
                    <a href="{{ route('front.catalogue') }}"
                        class="px-8 py-4 mb-4 text-lg font-medium text-center text-white transition-all duration-300 bg-red-600 rounded-lg sm:mb-0 hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/30">
                        Lihat Armada
                    </a>
                    <a href="tel:+6281234567890"
                        class="px-8 py-4 text-lg font-medium text-center text-white transition-all duration-300 bg-transparent border-2 border-white rounded-lg hover:bg-white hover:text-gray-900">
                        Telepon Sekarang
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
                    <a href="{{ route('front.index') }}" class="text-2xl font-bold text-gray-900">
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
    </footer>
    {{-- end Footer --}}
</x-front-layout>
