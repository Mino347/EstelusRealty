<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">
            <div class="p-6">

                <!-- Description Section -->
                <div class="mb-6">
                    <p class="text-gray-700 text-lg font-semibold mb-2">Description</p>
                    <p class="text-gray-900">{{ $house->Description }}</p>
                </div>

                <!-- Location Section -->
                <div class="mb-6">
                    <p class="text-gray-700 text-lg font-semibold mb-2">Location</p>
                    <p class="text-gray-900">{{ $house->Location }}</p>
                </div>

                <!-- Created at Section -->
                <div class="mb-6">
                    <p class="text-gray-700 text-lg font-semibold mb-2">Created at</p>
                    <p class="text-gray-900">{{ $house->created_at->format('F j, Y, g:i a') }}</p>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex justify-start space-x-4">
                    <a href="{{ route('houses.edit', $house->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('houses.destroy', $house->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this house?')"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
