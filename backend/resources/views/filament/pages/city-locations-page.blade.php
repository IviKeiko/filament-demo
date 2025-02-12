<x-filament::page>
    <h1>All Locations</h1>

    @foreach ($locations as $location)
        <div class="space-y-4">
            <h2>{{ $location->restaurantName }}</h2>
            <p><strong>Address:</strong> {{ $location->restaurantAddress }}</p>
            <p><strong>City ID:</strong> {{ $location->city_id }}</p>
            <p><strong>Country:</strong> {{ $location->country }}</p>
        </div>
    @endforeach
</x-filament::page>
