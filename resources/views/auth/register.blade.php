<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <img src="/svgs/MTR.png" alt="Mustika Rental" class="w-auto h-16 mx-auto">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">Buat Akun Baru</h2>
                <div class="flex justify-center mt-2">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
            </div>

            <div class="p-8 bg-white shadow-lg rounded-xl">
                <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <div class="mt-1">
                                <input id="name" name="name" type="text" autocomplete="name" required
                                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="Nama lengkap Anda" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required
                                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="email@contoh.com" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="new-password"
                                    required
                                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                            <div class="mt-1">
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                    autocomplete="new-password" required
                                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="••••••••">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="text-sm">
                            <a href="{{ route('login') }}" class="font-medium text-red-600 hover:text-red-500">
                                Sudah punya akun? Masuk disini
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg group hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-red-500 group-hover:text-red-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
