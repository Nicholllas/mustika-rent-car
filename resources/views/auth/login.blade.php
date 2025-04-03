<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <img src="/svgs/MTR.png" alt="Mustika Rental" class="w-auto h-16 mx-auto">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">Masuk ke Akun Anda</h2>
                <div class="flex justify-center mt-2">
                    <div class="w-16 h-1 bg-red-500 rounded-full"></div>
                </div>
            </div>

            <div class="p-8 bg-white shadow-lg rounded-xl">
                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email /
                                Username</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required
                                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="email@contoh.com" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember" type="checkbox"
                                    class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                <label for="remember_me" class="block ml-2 text-sm text-gray-900">
                                    Ingat saya
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-sm">
                                    <a href="{{ route('password.request') }}"
                                        class="font-medium text-red-600 hover:text-red-500">
                                        Lupa password?
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg group hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-red-500 group-hover:text-red-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            Masuk
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="font-medium text-red-600 hover:text-red-500">
                            Daftar sekarang
                        </a>
                    </p>
                </div>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 text-gray-500 bg-white">
                                Atau masuk dengan
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-6">
                        <a href="#"
                            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50">
                            <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5 mr-2"
                                alt="Google">
                            Google
                        </a>
                        <a href="#"
                            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50">
                            <img src="https://www.svgrepo.com/show/512317/github-142.svg" class="w-5 h-5 mr-2"
                                alt="GitHub">
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
