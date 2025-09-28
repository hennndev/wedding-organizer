<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="p-4 bg-white shadow rounded-lg text-center">
            <h2 class="text-lg font-bold">Total Pesanan</h2>
            <p class="text-2xl text-primary-600">{{ $this->getStats()['total'] }}</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg text-center">
            <h2 class="text-lg font-bold">Request</h2>
            <p class="text-2xl text-yellow-600">{{ $this->getStats()['request'] }}</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg text-center">
            <h2 class="text-lg font-bold">Approved</h2>
            <p class="text-2xl text-green-600">{{ $this->getStats()['approved'] }}</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg text-center">
            <h2 class="text-lg font-bold">Ditolak</h2>
            <p class="text-2xl text-green-600">{{ $this->getStats()['reject'] }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="{{ route('filament.admin.resources.katalogs.index') }}"
           class="p-6 bg-primary-600 text-white rounded-lg shadow text-center hover:bg-primary-700">
            📦 Kelola Katalog
        </a>
        <a href="{{ route('filament.admin.resources.pemesanans.index') }}"
   class="p-6 bg-success-600 text-white rounded-lg shadow text-center hover:bg-success-700">
    🛒 Kelola Pemesanan
</a>
    </div>
</x-filament-panels::page>
