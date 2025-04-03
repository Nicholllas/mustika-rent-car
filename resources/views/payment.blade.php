<x-front-layout>
    <section class="py-12 bg-gray-50">
        <div class="container px-4 mx-auto">
            <header class="mb-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900">Siap Berangkat? Lanjutkan Pembayaran!</h2>
                <div class="flex justify-center mt-2">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
                <p class="mt-2 text-gray-600">Silakan lakukan pembayaran sesuai dengan total yang tertera.</p>
            </header>

            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <!-- Payment Form -->
                <form action="{{ route('front.payment.update', $booking->id) }}" method="POST"
                    class="w-full p-8 bg-white shadow-sm rounded-xl lg:max-w-2xl" id="checkoutForm">
                    @csrf
                    @method('post')

                    <div class="space-y-6">
                        <!-- Order Summary -->
                        <div class="space-y-4">
                            <h5 class="text-xl font-semibold text-gray-900">
                                Ringkasan Pesanan
                            </h5>

                            <div class="space-y-3">
                                <!-- Car -->
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Mobil yang Dipilih</p>
                                    <p class="font-medium text-gray-900">
                                        {{ $booking->item->brand->name }} {{ $booking->item->name }}
                                    </p>
                                </div>

                                <!-- Duration -->
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Durasi</p>
                                    <p class="font-medium text-gray-900">
                                        {{ $booking->start_date->diffInDays($booking->end_date) }} hari
                                    </p>
                                </div>

                                <!-- Service -->
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Layanan</p>
                                    <p class="font-medium text-gray-900">Pengantaran</p>
                                </div>

                                <!-- Price -->
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Harga</p>
                                    <p class="font-medium text-gray-900">
                                        Rp{{ number_format($booking->item->price, 0, ',', '.') }} per hari
                                    </p>
                                </div>

                                <!-- Tax -->
                                <div class="flex justify-between">
                                    <p class="text-gray-600">PPN (11%)</p>
                                    <p class="font-medium text-gray-900">
                                        Rp{{ number_format($booking->item->price * $booking->start_date->diffInDays($booking->end_date) * (11 / 100), 0, ',', '.') }}
                                    </p>
                                </div>

                                <!-- Total -->
                                <div class="flex justify-between pt-3 border-t border-gray-200">
                                    <p class="text-gray-600">Total Pembayaran</p>
                                    <p class="text-lg font-bold text-red-500">
                                        Rp{{ number_format($booking->total_price, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="space-y-4">
                            <h5 class="text-xl font-semibold text-gray-900">
                                Metode Pembayaran
                            </h5>

                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <!-- COD (Disabled) -->
                                <div class="relative">
                                    <input type="radio" value="cod" name="payment_method" id="cod"
                                        class="absolute w-0 h-0 opacity-0 peer" disabled>
                                    <label for="cod"
                                        class="block p-4 border-2 border-gray-200 opacity-50 cursor-not-allowed rounded-xl peer-checked:border-red-500 peer-checked:bg-red-50">
                                        <div class="flex items-center gap-3">
                                            <img src="/svgs/logo-mastercard.svg" alt="Mastercard" class="h-8">
                                            <span class="font-medium text-gray-700">CASH ON DELIVERY</span>
                                        </div>
                                    </label>
                                </div>

                                <!-- Transfer -->
                                <div class="relative">
                                    <input type="radio" value="transfer" name="payment_method" id="transfer"
                                        class="absolute w-0 h-0 opacity-0 peer" required>
                                    <label for="transfer"
                                        class="block p-4 transition border-2 border-gray-200 cursor-pointer rounded-xl hover:border-red-300 peer-checked:border-red-500 peer-checked:bg-red-50 peer-checked:shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <img src="/svgs/logo-midtrans.svg" alt="Midtrans" class="h-8">
                                            <span class="font-medium text-gray-700">TRANSFER</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="flex items-center justify-center w-full px-6 py-3 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                                Lanjutkan
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Car Image -->
                <div class="flex-1 hidden max-w-md lg:block">
                    <img src="{{ $booking->item->thumbnail }}" class="w-full rounded-lg"
                        alt="{{ $booking->item->name }}">
                </div>
            </div>
        </div>
    </section>

    <script>
        // Add visual feedback when payment method is selected
        document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
            radio.addEventListener('change', function() {
                // Remove all selected styles first
                document.querySelectorAll('input[name="payment_method"] + label').forEach(label => {
                    label.classList.remove('border-red-500', 'bg-red-50', 'shadow-sm');
                });

                // Add selected style to the chosen one
                if (this.checked) {
                    const label = this.nextElementSibling;
                    label.classList.add('border-red-500', 'bg-red-50', 'shadow-sm');
                }
            });
        });
    </script>
</x-front-layout>
