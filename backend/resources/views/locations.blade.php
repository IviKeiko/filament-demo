<x-filament::page>
    <div class="mb-4">
        <input wire:model="search" type="text" placeholder="Search..." class="w-full p-2 border rounded">
    </div>

    <div class="space-y-4">
        @foreach ($this->locations as $location)
            <div class="p-4 bg-white rounded-lg shadow">
                <h2 class="text-xl font-bold">{{ $location->city }}, {{ $location->country }}</h2>
                <p class="text-gray-600">{{ $location->restaurantName }}</p>
                <p class="text-sm text-gray-500">{{ $location->restaurantAddress }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $this->locations->links() }}
    </div>
</x-filament::page>
