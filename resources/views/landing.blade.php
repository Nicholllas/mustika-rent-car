<x-front-layout>
    @section('title')
        Home | {{ config('app.name') }}
    @endsection
    <!-- Hero -->
    <section class="container relative pb-[100px] pt-[30px]">
        <div class="flex flex-col items-center justify-center gap-[30px]">
            <!-- Preview Image -->
            <div class="relative">
                <div class="absolute z-0 hidden lg:block">
                    <div class="font-extrabold text-[220px] text-darkGrey tracking-[-0.06em] leading-[101%]">
                        <div data-aos="fade-right" data-aos-delay="300">
                            NEW
                        </div>
                        <div data-aos="fade-left" data-aos-delay="600">
                            PORSCHE
                        </div>
                    </div>
                </div>
                <img src="../assets/images/porsche.webp" class="w-full max-w-[963px] z-10 relative" alt=""
                    data-aos="zoom-in" data-aos-delay="950">
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-around lg:gap-[60px] gap-7">
                <!-- Car Details -->
                <div class="flex items-center gap-y-12">
                    <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                        data-aos-delay="1400">
                        <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
                            380
                        </h6>
                        <p class="text-sm font-normal text-center md:text-base text-secondary">
                            Horse Power
                        </p>
                    </div>
                    <span class="vr" data-aos="fade-left" data-aos-delay="1600"></span>
                    <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                        data-aos-delay="1900">
                        <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
                            12S
                        </h6>
                        <p class="text-sm font-normal text-center md:text-base text-secondary">
                            Speed AT
                        </p>
                    </div>
                    <span class="vr" data-aos="fade-left" data-aos-delay="2100"></span>
                    <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                        data-aos-delay="2400">
                        <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
                            AWD
                        </h6>
                        <p class="text-sm font-normal text-center md:text-base text-secondary">
                            Drive
                        </p>
                    </div>
                    <span class="vr" data-aos="fade-left" data-aos-delay="2600"></span>
                    <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                        data-aos-delay="2900">
                        <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
                            A.I
                        </h6>
                        <p class="text-sm font-normal text-center md:text-base text-secondary">
                            Tracking
                        </p>
                    </div>
                </div>
                <!-- Button Primary -->
                <div class="p-1 rounded-full bg-primary group" data-aos="zoom-in" data-aos-delay="3400">
                    <a href="checkout.html" class="btn-primary">
                        <p>
                            Rent Now
                        </p>
                        <img src="../assets/svgs/ic-arrow-right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Cars -->
    <section class="bg-darkGrey">
        <div class="container relative py-[100px]">
            <header class="mb-[30px]">
                <h2 class="font-bold text-dark text-[26px] mb-1">
                    Paling sering dipesan
                </h2>
                <p class="text-base text-secondary">Pilih mobil idaman kamu</p>
            </header>

            <!-- Cars -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
                @foreach ($items as $item)
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                {{ $item->name }}
                            </h5>
                            <p class="text-sm font-normal text-secondary">{{ $item->type ? $item->type->name : '-' }}
                            </p>
                            <a href="{{ route('front.detail', $item->slug) }}" class="absolute inset-0"></a>
                        </div>
                        <img src="{{ $item->thumbnail }}" class="rounded-[18px] min-w-[216px] w-full h-[150px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-sm font-normal text-secondary">Mulai dari
                                <span
                                    class="text-base font-bold text-primary">Rp{{ number_format($item->price, 0, ',', '.') }}</span>/hari
                            </p>
                            <!-- Rating -->
                            <p class="text-dark text-xs font-semibold flex items-center gap-[2px]">
                                {{ $item->star }}
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Extra Benefits -->
    <section class="container relative pt-[100px]">
        <div class="flex items-center flex-col md:flex-row flex-wrap justify-center gap-8 lg:gap-[120px]">
            <img src="../assets/images/illustration-01.webp" class="w-full lg:max-w-[536px]" alt="">
            <div class="max-w-[268px] w-full">
                <div class="flex flex-col gap-[30px]">
                    <header>
                        <h2 class="font-bold text-dark text-[26px] mb-1">
                            Benefit Extra
                        </h2>
                        <p class="text-base text-secondary">Mustika Rental</p>
                    </header>
                    <!-- Benefits Item -->
                    <div class="flex items-center gap-4">
                        <div class="bg-dark rounded-[26px] p-[19px]">
                            <img src="../assets/svgs/ic-car.svg" alt="">
                        </div>
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                Layanan Antar
                            </h5>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-dark rounded-[26px] p-[19px]">
                            <img src="../assets/svgs/ic-card.svg" alt="">
                        </div>
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                Harga
                            </h5>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-dark rounded-[26px] p-[19px]">
                            <img src="../assets/svgs/ic-securityuser.svg" alt="">
                        </div>
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                Aman
                            </h5>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-dark rounded-[26px] p-[19px]">
                            <img src="../assets/svgs/ic-convert3dcube.svg" alt="">
                        </div>
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                Bisa Tukar Mobil
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- CTA Button -->
                <div class="mt-[50px]">
                    <!-- Button Primary -->
                    <div class="p-1 rounded-full bg-primary group">
                        <a href="#!" class="btn-primary">
                            <p>
                                Jelajahi Mobil
                            </p>
                            <img src="../assets/svgs/ic-arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
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
</x-front-layout>
