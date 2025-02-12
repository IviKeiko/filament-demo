{{--{{ dd($record) }}--}}


<x-filament::page>

    <h1 class="text-3xl font-semibold text-gray-900 mb-8 text-center">Restaurant Details</h1>


    <div class="bg-white shadow-lg  p-8 max-w-4xl mx-auto space-y-8 px-6 py-6">


        <div class="space-y-2 mb-4 ">
            <h2 class="text-3xl font-semibold text-gray-700  tracking-wide">
                <span class="text-indigo-600">{{ $record->restaurantName }}</span>
            </h2>
        </div>


        <div class="space-y-4 text-lg text-gray-700 mb-6">
            <p><strong>Address:</strong> {{ $record->restaurantAddress }}</p>
            <p><strong>City:</strong> {{ $record->city }}</p>
            <p><strong>Country:</strong> {{ $record->country }}</p>
        </div>

        <!-- Description Section -->
        @if($record->description)
            <div class="space-y-4 mt-6">
                <h3 class="text-xl font-medium text-gray-800">Description</h3>
                <p class="text-lg text-gray-600">{{ $record->description }}</p>
            </div>
        @else
            <p class="text-lg text-gray-600 mt-4">No description available</p>
        @endif

        <!-- Restaurant Image Section -->
        <div class="space-y-4 mt-6">
            <h3 class="text-xl font-medium text-gray-800">Restaurant Image</h3>
            @if($record->image_path)
                <div class="relative w-full h-80 bg-gray-100 overflow-hidden shadow-md">
                    <img src="{{ Storage::url($record->image_path) }}" alt="Restaurant Image" class="object-cover w-full h-full">
                </div>
            @else
                <p class="text-lg text-gray-600 mt-2">No image available</p>
            @endif
        </div>

    </div>
</x-filament::page>
