<x-guest-layout>
    <div class="bg-gray-50 dark:bg-gray-800">
        <div class="flex min-h-[80vh] flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="text-center sm:mx-auto sm:w-full sm:max-w-md">
                <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                    Sign Up
                </h1>
            </div>
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 pt-8 pb-4 bg-white dark:bg-gray-700 sm:rounded-lg sm:px-10 sm:pb-6 sm:shadow">
                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Full
                                Name</label>
                            <input id="name" type="text" name="name" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300">
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-white">Email</label>
                            <input id="email" type="email" name="email" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300">
                        </div>
                        <div>
                            <label for="password"
                                class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
                            <input id="password" type="password" name="password" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300">
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-white">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300">
                        </div>
                        <div class="flex items-center justify-between">
                            <a class="text-sm font-medium text-indigo-400 hover:text-indigo-500"
                                href="{{ route('login') }}">
                                Already have an account? Sign In
                            </a>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
