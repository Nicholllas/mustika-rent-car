<x-app-layout>
    <x-slot name="title">Admin</x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <a href="#!" onclick="window.history.go(-1); return false;">←</a>
            Promotion &raquo; Sunting &raquo; {{ $promotion->title }}
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
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form class="w-full" action="{{ route('admin.promotions.update', $promotion->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label
                                class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">Judul*</label>
                            <input value="{{ old('title', $promotion->title) }}" name="title"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label
                                class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">Deskripsi*</label>
                            <input value="{{ old('description', $promotion->description) }}" name="description"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label
                                class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">Potongan*</label>
                            <input value="{{ old('disc', $promotion->disc) }}" name="disc"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                type="number">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">Tanggal
                                Mulai*</label>
                            <input value="{{ old('start_date', $promotion->start_date) }}" name="start_date"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                type="date" required>
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">Tanggal
                                Selesai*</label>
                            <input value="{{ old('end_date', $promotion->end_date) }}" name="end_date"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                type="date" required>
                        </div>
                    </div>

                    <!-- Input File untuk Upload Gambar Baru -->
                    <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
                        <div class="w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                                Ganti Foto*
                            </label>
                            <input type="file" name="photo"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                accept="image/png, image/jpeg, image/webp">

                            <!-- Menampilkan Foto Sebelumnya Jika Ada -->
                            @if (!empty($promotion->photo))
                                <div class="mt-4">
                                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                                        Foto Saat Ini
                                    </label>
                                    <div class="relative">
                                        <img src="{{ asset('storage/' . $promotion->photo) }}"
                                            class="w-full h-auto rounded shadow">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3 text-right">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5">
                                Simpan Promotion
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
