<x-app-layout>
    <x-slot name="title">Admin</x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <a href="#!" onclick="window.history.go(-1); return false;">
                ←
            </a>
            {!! __('Faq &raquo; Buat') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                            Ada kesalahan!
                        </div>
                        <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form class="w-full" action="{{ route('admin.faqs.store') }}" method="post"
                    encfaq="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">
                                Pertanyaan*
                            </label>
                            <input value="{{ old('question') }}" name="question"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" faq="text" placeholder="Pertanyaan" required>
                            <div class="mt-2 text-sm text-gray-500">
                                Contoh: Bagaimana cara menyewa mobil di tempat ini? dsb. Wajib diisi. Maksimal 255
                                karakter.
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="answer">
                                Jawaban*
                            </label>
                            <textarea name="answer" id="answer"
                                class="w-full bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500"
                                required>{{ old('answer') }}</textarea>

                            <div class="mt-2 text-sm text-gray-500">
                                Contoh: Anda dapat menyewa mobil dengan menghubungi kami melalui WhatsApp, telepon, atau
                                datang langsung ke kantor kami.
                                Pastikan untuk membawa KTP/SIM dan memenuhi syarat penyewaan. dsb. Wajib diisi.
                            </div>
                        </div>
                    </div>


                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">
                                Status*
                            </label>
                            <input value="{{ old('status') }}" name="status"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" faq="text" placeholder="Status" required>
                            <div class="mt-2 text-sm text-gray-500">
                                Contoh: 1 atau 0. Wajib diisi dan hanya menerima value 1 atau 0.
                                <br>
                                0 = FAQ Tidak Aktif dan tidak ditampilkan pada halaman depan
                                <br>
                                1 = FAQ Aktif dan ditampilkan pada halaman depan
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3 text-right">
                            <button faq="submit"
                                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Simpan Faq
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
