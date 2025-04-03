<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <img src="/svgs/MTR.png" alt="Mustika Rental" class="w-auto h-16 mx-auto">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">Reset Password</h2>
                <div class="flex justify-center mt-2">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
            </div>

            <div class="p-8 bg-white shadow-lg rounded-xl">
                <div class="mb-4 text-sm text-gray-600">
                    Lupa password Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan link
                    untuk reset password.
                </div>

                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.email') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" required autofocus
                                class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                placeholder="email@contoh.com" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Kirim Link Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
