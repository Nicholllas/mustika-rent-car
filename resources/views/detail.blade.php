<x-front-layout>
    @section('title')
        Detail {{ $item->name }}
    @endsection

    <!-- Main Content -->
    <section class="py-12 bg-gray-50">
        <div class="container px-4 mx-auto">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-4">
                    <li class="inline-flex items-center">
                        <a href="{{ route('front.index') }}"
                            class="inline-flex items-center text-gray-600 hover:text-red-500">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#" class="ml-4 text-gray-600 hover:text-red-500">
                                {{ $item->brand->name }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-4 font-medium text-gray-900">Detail</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <!-- Car Gallery -->
                <div class="lg:col-span-2">
                    <div class="p-6 bg-white shadow-sm rounded-xl" id="gallery">
                        <img :src="thumbnails[activeThumbnail].url" :key="thumbnails[activeThumbnail].id"
                            class="w-full rounded-lg h-auto md:h-[500px] object-cover" alt="{{ $item->name }}">

                        <div class="grid grid-cols-4 gap-4 mt-4">
                            <div v-for="(thumbnail, index) in thumbnails" :key="thumbnail.id">
                                <button @click="changeActive(index)" class="focus:outline-none">
                                    <img :src="thumbnail.url" alt=""
                                        class="object-cover w-full h-20 transition-all border-2 rounded-lg"
                                        :class="{
                                            'border-red-500': index == activeThumbnail,
                                            'border-transparent': index !=
                                                activeThumbnail
                                        }">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Details -->
                <div class="lg:col-span-1">
                    <div class="flex flex-col h-full p-6 bg-white shadow-sm rounded-xl">
                        <div class="mb-6">
                            <h1 class="mb-2 text-2xl font-bold text-gray-900">
                                {{ $item->brand->name }} {{ $item->name }}
                            </h1>
                            <p class="mb-3 text-gray-600">
                                {{ $item->type->name }}
                            </p>
                            <div class="flex items-center">
                                <div class="flex mr-2 text-yellow-400">
                                    @for ($i = 0; $i < floor($item->star); $i++)
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>
                                <span class="font-medium text-gray-900">({{ $item->review }})</span>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="pt-4 mb-6 border-t border-gray-200">
                            <h3 class="mb-4 text-lg font-semibold text-gray-900">Fitur Utama</h3>
                            <ul class="space-y-3">
                                @php
                                    $features = explode(',', $item->features);
                                @endphp
                                @foreach ($features as $feature)
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-gray-700">{{ trim($feature) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Price & CTA -->
                        <div class="pt-4 mt-auto border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xl font-bold text-red-500">
                                        Rp{{ number_format($item->price, 0, ',', '.') }}
                                    </p>
                                    <p class="text-gray-600">/hari</p>
                                </div>
                                <a href="{{ route('front.checkout', $item->slug) }}"
                                    class="flex items-center px-6 py-3 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                                    Sewa Sekarang
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Cars -->
    <section class="py-12 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Pilihan Mobil Lainnya</h2>
                <div class="flex justify-center mt-2">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
                <p class="mt-2 text-gray-600">Pilih mobil yang kamu suka</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($similiarItems as $similiarItem)
                    <div class="p-6 transition duration-300 bg-white shadow-sm rounded-xl hover:shadow-md">
                        <div class="relative mb-4">
                            <img src="{{ $similiarItem->thumbnail }}" class="object-cover w-full h-48 mb-4 rounded-lg"
                                alt="{{ $similiarItem->name }}">
                            <a href="{{ route('front.detail', $similiarItem->slug) }}" class="absolute inset-0"></a>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-gray-900">{{ $similiarItem->name }}</h3>
                        <p class="mb-3 text-gray-600">{{ $similiarItem->type ? $similiarItem->type->name : '-' }}</p>

                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-bold text-red-500">
                                    Rp{{ number_format($similiarItem->price, 0, ',', '.') }}
                                </p>
                                <p class="text-sm text-gray-600">/hari</p>
                            </div>
                            <div class="flex items-center text-yellow-400">
                                <span class="mr-1 font-medium text-gray-900">{{ $similiarItem->star }}</span>
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

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    activeThumbnail: 0,
                    thumbnails: [
                        @foreach (json_decode($item->photos) as $key => $photo)
                            {
                                id: {{ $key }},
                                url: "{{ Storage::url($photo) }}"
                            },
                        @endforeach
                    ],
                }
            },
            methods: {
                changeActive(id) {
                    this.activeThumbnail = id;
                }
            }
        }).mount('#gallery')
    </script>
</x-front-layout>
