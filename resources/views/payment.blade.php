<x-front-layout>
    <!-- Main Content -->
    <section class="bg-darkGrey relative py-[70px]">
        <div class="container">
            <header class="mb-[30px]">
                <h2 class="font-bold text-dark text-[26px] mb-1">
                    Siap Berangkat? Lanjutkan Pembayaran!
                </h2>
                <p class="text-base text-secondary">Silakan lakukan pembayaran sesuai dengan total yang tertera.</p>
            </header>

            <div class="flex items-center gap-5 lg:justify-between">
                <!-- Form Card -->
                <form action="{{ route('front.payment.update', $booking->id) }}" method="POST"
                    class="bg-white p-[30px] pb-10 rounded-3xl max-w-[490px] w-full" id="checkoutForm">
                    @csrf
                    @method('post')
                    <div class="flex flex-col gap-[30px]">
                        <div class="flex flex-col gap-4">
                            <h5 class="text-lg font-semibold">
                                Ringkasan Pesanan
                            </h5>
                            <!-- Items -->
                            <div class="flex items-center justify-between">
                                <p class="text-base font-normal">
                                    Mobil yang Dipilih
                                </p>
                                <p class="text-base font-semibold">
                                    {{ $booking->item->brand->name }} {{ $booking->item->name }}
                                </p>
                            </div>
                            <!-- Items -->
                            <div class="flex items-center justify-between">
                                <p class="text-base font-normal">
                                    Durasi
                                </p>
                                <p class="text-base font-semibold">
                                    {{ $booking->start_date->diffInDays($booking->end_date) }} hari
                                </p>
                            </div>
                            <!-- Items -->
                            <div class="flex items-center justify-between">
                                <p class="text-base font-normal">
                                    Layanan
                                </p>
                                <p class="text-base font-semibold">
                                    Pengantaran
                                </p>
                            </div>
                            <!-- Items -->
                            <div class="flex items-center justify-between">
                                <p class="text-base font-normal">
                                    Harga
                                </p>
                                <p class="text-base font-semibold">
                                    Rp{{ number_format($booking->item->price, 0, ',', '.') }} per hari
                                </p>
                            </div>
                            <!-- Items -->
                            <div class="flex items-center justify-between">
                                <p class="text-base font-normal">
                                    PPN (11%)
                                </p>
                                <p class="text-base font-semibold">
                                    Rp{{ number_format($booking->item->price * $booking->start_date->diffInDays($booking->end_date) * (11 / 100), 0, ',', '.') }}
                                </p>
                            </div>
                            <!-- Items -->
                            <div class="flex items-center justify-between">
                                <p class="text-base font-normal">
                                    Total Pembayaran
                                </p>
                                <p class="text-base font-semibold">
                                    Rp{{ number_format($booking->total_price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h5 class="text-lg font-semibold">
                                Metode Pembayaran
                            </h5>
                            <div class="grid md:grid-cols-2 gap-4 md:gap-[30px] items-center">
                                <!-- COD (Disabled) -->
                                <div class="relative opacity-50 boxPayment">
                                    <input type="radio" value="cod" name="payment_method" id="cod"
                                        class="absolute inset-0 z-50 opacity-0 cursor-pointer" disabled>
                                    <label for="cod"
                                        class="flex items-center justify-center gap-4 border border-grey rounded-[20px] p-5 min-h-[80px]">
                                        <img src="/svgs/logo-mastercard.svg" alt="">
                                        <p class="text-base font-semibold">
                                            CASH ON DELIVERY
                                        </p>
                                    </label>
                                </div>

                                <!-- Transfer (Bisa Diklik) -->
                                <div class="relative boxPayment">
                                    <input type="radio" value="transfer" name="payment_method" id="transfer"
                                        class="absolute inset-0 z-50 opacity-0 cursor-pointer">
                                    <label for="transfer"
                                        class="flex items-center justify-center gap-4 border border-grey rounded-[20px] p-5 min-h-[80px]">
                                        <img src="/svgs/logo-midtrans.svg" alt="">
                                        <p class="text-base font-semibold">
                                            TRANSFER
                                        </p>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <!-- CTA Button -->
                        <div class="col-span-2 mt-5">
                            <!-- Button Primary -->
                            <div class="p-1 rounded-full bg-primary group">
                                <a href="#!" class="btn-primary" id="checkoutButton">
                                    <p>
                                        Lanjutkan
                                    </p>
                                    <img src="/svgs/ic-arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <img src="/images/porsche_small.webp" class="max-w-[50%] hidden lg:block -mr-[200px]" alt="">
            </div>
        </div>
    </section>
    <script>
        // on checkoutButton click, submit the form
        $('#checkoutButton').click(function() {
            $('#checkoutForm').submit();
        });
    </script>
</x-front-layout>
