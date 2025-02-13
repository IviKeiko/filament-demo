<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom-primary {
            background-color: #4C6A92;
        }
        .bg-custom-secondary {
            background-color: #f4f7fa;
        }
        .text-custom-primary {
            color: #4C6A92;
        }
        .hover\:bg-custom-primary:hover {
            background-color: #3a526d;
        }

    </style>
</head>
<body class="bg-custom-secondary">
<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-custom-primary">Restaurant List</h1>
            <a href="{{ route('login') }}" class="bg-custom-primary text-white px-4 py-2 hover:bg-custom-primary hover:bg-opacity-90 transition duration-300">Login</a>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="container mx-auto px-6 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($locations as $location)
            <div class="bg-white shadow-lg  overflow-hidden">
                <!-- Restaurant Image -->
                @if ($location->image_path)
                    <img src="{{ Storage::url($location->image_path) }}" alt="{{ $location->restaurantName }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                        <p class="text-gray-500">No image available</p>
                    </div>
                @endif

                <!-- Restaurant Details -->
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-custom-primary">{{ $location->restaurantName }}</h2>
                    <p class="text-gray-600 mt-2">{{ $location->restaurantAddress }}</p>
                    <p class="text-gray-600">{{ $location->city }}, {{ $location->country }}</p>

                    <!-- Description -->
                    @if ($location->description)
                        <div class="mt-4">
                            <h3 class="text-lg font-medium text-custom-primary">Description</h3>
                            <p class="text-gray-600">{{ $location->description }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">
        <div class="pagination-container">
            <ul class="pagination flex justify-center space-x-2">

                <li class="previous">
                    <a href="{{ $locations->previousPageUrl() }}" class="bg-custom-primary text-white px-4 py-2 hover:bg-custom-primary hover:bg-opacity-90 transition duration-300">
                        Previous
                    </a>
                </li>
                <li class="next">
                    <a href="{{ $locations->nextPageUrl() }}" class="bg-custom-primary text-white px-4 py-2 hover:bg-custom-primary hover:bg-opacity-90 transition duration-300">
                       Next
                    </a>
                </li>
            </ul>
        </div>
    </div>

</main>
</body>
</html>
