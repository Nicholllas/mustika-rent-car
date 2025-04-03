<x-front-layout>
    @section('title')
        Checkout | {{ config('app.name') }}
    @endsection

    <section class="py-12 bg-gray-50">
        <div class="container px-4 mx-auto">
            <header class="mb-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900">Checkout & Drive Faster</h2>
                <div class="flex justify-center mt-2">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
                <p class="mt-2 text-gray-600">We will help you get ready today</p>
            </header>

            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <!-- Form Card -->
                <form action="{{ route('front.checkout.store', $item->slug) }}"
                    class="w-full p-8 bg-white shadow-sm rounded-xl lg:max-w-2xl" x-data="app" method="POST"
                    id="checkoutForm" x-cloak>
                    @csrf
                    @method('post')

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Full Name -->
                        <div class="col-span-2">
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-700">
                                Full Name
                            </label>
                            <input type="text" name="name" id="fullname" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                placeholder="Insert Full Name" value="{{ Auth::user()->name }}">
                        </div>

                        <!-- Hidden Date Fields -->
                        <div class="hidden col-span-2">
                            <input type="text" name="start_date" id="dateFrom" required class="hidden" readonly
                                x-model="dateFromYmd">
                            <input type="text" name="end_date" id="dateUntil" required class="hidden" readonly
                                x-model="dateToYmd">
                        </div>

                        <!-- Date Range Picker -->
                        <div class="relative grid grid-cols-1 col-span-2 gap-6 md:grid-cols-2"
                            @keydown.escape="closeDatepicker()" @click.outside="closeDatepicker()">
                            <!-- Date From -->
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">
                                    From
                                </label>
                                <input readonly type="text"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="Select Date" @click="endToShow = 'from'; init(); showDatepicker = true"
                                    x-model="outputDateFromValue">
                            </div>
                            <!-- Date Until -->
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">
                                    Until
                                </label>
                                <input readonly type="text"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="Select Date" @click="endToShow = 'to'; init(); showDatepicker = true"
                                    x-model="outputDateToValue">
                            </div>

                            <!-- Date Picker Dropdown -->
                            <div class="absolute z-50 w-full p-5 mt-2 bg-white border border-gray-200 shadow-lg rounded-xl"
                                x-show="showDatepicker" x-transition>
                                <div class="flex flex-col items-center">
                                    <div class="w-full mb-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <button type="button"
                                                class="p-1 text-gray-500 transition rounded-full hover:bg-gray-100"
                                                @click="if (month == 0) {year--; month=11;} else {month--;} getNoOfDays()">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <span x-text="MONTH_NAMES[month]"
                                                class="text-base font-semibold text-gray-900"></span>
                                            <span x-text="year" class="text-base font-semibold text-gray-900"></span>
                                            <button type="button"
                                                class="p-1 text-gray-500 transition rounded-full hover:bg-gray-100"
                                                @click="if (month == 11) {year++; month=0;} else {month++;}; getNoOfDays()">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap w-full mb-2 -mx-1">
                                        <template x-for="(day, index) in DAYS" :key="index">
                                            <div style="width: 14.26%" class="px-1">
                                                <div x-text="day"
                                                    class="text-xs font-medium text-center text-gray-700"></div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="flex flex-wrap -mx-1">
                                        <template x-for="blankday in blankdays">
                                            <div style="width: 14.28%"
                                                class="p-1 text-sm text-center border border-transparent"></div>
                                        </template>
                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                            <div style="width: 14.28%">
                                                <div @click="getDateValue(date, false)"
                                                    @mouseover="getDateValue(date, true)" x-text="date"
                                                    class="p-1 text-sm leading-loose text-center transition duration-100 ease-in-out cursor-pointer"
                                                    :class="{
                                                        'font-bold': isToday(date) == true,
                                                        'bg-red-500 text-white rounded-l-full': isDateFrom(date) ==
                                                            true,
                                                        'bg-red-500 text-white rounded-r-full': isDateTo(date) == true,
                                                        'bg-red-100': isInRange(date) == true
                                                    }">
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Address -->
                        <div class="col-span-2">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-700">
                                Delivery Address
                            </label>
                            <input type="text" name="address" id="address" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                placeholder="Where should we deliver your car?">
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-700">
                                City
                            </label>
                            <input type="text" name="city" id="city" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                placeholder="City Name">
                        </div>

                        <!-- Post Code -->
                        <div>
                            <label for="postCode" class="block mb-2 text-sm font-medium text-gray-700">
                                Postal Code
                            </label>
                            <input type="number" name="zip" id="postCode" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                placeholder="Postal code">
                        </div>

                        <!-- CTA Button -->
                        <div class="col-span-2 mt-4">
                            <button type="submit"
                                class="flex items-center justify-center w-full px-6 py-3 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-600">
                                Continue
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
                    <img src="{{ $item->thumbnail }}" class="w-full rounded-lg" alt="{{ $item->name }}">
                </div>
            </div>
        </div>
    </section>

    <script src="/js/dateRangePicker.js"></script>
    <script>
        // Submit form when clicking Continue button
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            // You can add any validation here if needed
        });
    </script>
</x-front-layout>
