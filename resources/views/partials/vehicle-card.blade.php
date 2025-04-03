<div class="relative p-6 transition-all duration-300 bg-gray-50 rounded-xl hover:shadow-lg group">
    <div class="mb-4">
        <h5 class="mb-1 text-lg font-bold text-gray-900">
            {{ $vehicle->name }}
        </h5>
        <p class="text-gray-600">{{ $vehicle->type ? $vehicle->type->name : '-' }}</p>
        <a href="{{ route('front.detail', $vehicle->slug) }}" class="absolute inset-0">
            <span class="sr-only">Lihat detail {{ $vehicle->name }}</span>
        </a>
    </div>

    <img src="{{ $vehicle->thumbnail }}" class="object-cover w-full h-40 mb-4 rounded-lg" alt="{{ $vehicle->name }}"
        loading="lazy" width="300" height="160">

    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm text-gray-600">Mulai dari</p>
            <p class="text-lg font-bold text-red-500">
                Rp{{ number_format($vehicle->price, 0, ',', '.') }}/hari
            </p>
        </div>

        <div class="flex items-center text-yellow-400">
            <span class="mr-1 font-semibold text-gray-900">{{ $vehicle->star }}</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
        </div>
    </div>
</div>
