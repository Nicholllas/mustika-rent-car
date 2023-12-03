<x-front-layout>
    @section('title')
        Home | {{ config('app.name') }}
    @endsection
    <!-- TOYOTA -->
    <section class="bg-white">
        <div class="container relative py-[10px]">
            <header class="mb-[30px]">
                <h2 class="font-bold text-dark text-[26px] mb-1">
                    Toyota
                </h2>
                <p class="text-base text-secondary">Pilih mobil idaman kamu</p>
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
                            <p class="text-sm font-normal text-secondary">
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
                <p class="text-base text-secondary">Pilih mobil idaman kamu</p>
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
                            <p class="text-sm font-normal text-secondary">
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



    <!-- FAQ -->
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
    </section>

    <!-- Instant Booking -->
    <section class="relative bg-[#060523]">
        <div class="container py-20">
            <div class="flex flex-col">
                <header class="mb-[50px] max-w-[360px] w-full">
                    <h2 class="font-bold text-white text-[25px] mb-4">
                        Mobil Nyaman Harga Bersahabat<br>
                        Perjalanan Tanpa Khawatir Dimulai Dari Sini
                    </h2>
                    <p class="text-base text-subtlePars">Get an instant booking to catch up whatever your
                        really want to achieve today, yes.</p>
                </header>
                <!-- Button Primary -->
                <div class="p-1 rounded-full bg-primary group w-max">
                    <a href="#" class="btn-primary">
                        <p>
                            Book Now
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
</x-front-layout>
