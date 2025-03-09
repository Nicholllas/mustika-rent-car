<x-guest-layout>
    <div class="bg-gray-50 dark:bg-gray-800">
        <div class="flex min-h-[80vh] flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="text-center sm:mx-auto sm:w-full sm:max-w-md">
                <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">Sign in</h1>
            </div>
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 pt-8 pb-4 bg-white dark:bg-gray-700 sm:rounded-lg sm:px-10 sm:pb-6 sm:shadow">
                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Email
                                address / Username</label>
                            <div class="mt-1">
                                <x-input id="email"
                                    class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                    type="email" name="email" :value="old('email')" required autofocus
                                    autocomplete="username" />
                            </div>
                        </div>
                        <div>
                            <label for="password"
                                class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
                            <div class="mt-1">
                                <x-input id="password"
                                    class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                    type="password" name="password" required autocomplete="current-password" />
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <x-checkbox id="remember_me" name="remember"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-400" />
                                <label for="remember_me"
                                    class="block ml-2 text-sm text-gray-900 dark:text-white">Remember me</label>
                            </div>
                            <div class="text-sm">
                                @if (Route::has('password.request'))
                                    <a class="font-medium text-indigo-400 hover:text-indigo-500"
                                        href="{{ route('password.request') }}">Forgot your password?</a>
                                @endif
                            </div>
                        </div>
                        <div>
                            <x-button
                                class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-700 dark:border-transparent dark:hover:bg-indigo-600 dark:focus:ring-indigo-400">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                Sign In
                            </x-button>
                        </div>
                    </form>
                    <div class="m-auto mt-6 w-fit md:mt-8">
                        <span class="m-auto dark:text-gray-400">Don't have an account?
                            <a class="font-semibold text-indigo-600 dark:text-indigo-100"
                                href="{{ route('register') }}">Create Account</a>
                        </span>
                    </div>
                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 text-gray-500 bg-white dark:bg-gray-700 dark:text-white">Or sign up
                                    with</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-3 mt-6">
                            <button
                                class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-600">
                                Google
                            </button>
                            <button
                                class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-600">
                                GitHub
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
