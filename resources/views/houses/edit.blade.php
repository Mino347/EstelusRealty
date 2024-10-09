<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit House</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">
            <div class="p-6">

                <h2 class="text-lg font-bold mb-6">Edit House</h2>

                <form action="{{ route('houses.update', $house->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="Title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                        <input type="text" name="Title" id="Title" value="{{ $house->Title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-4">
                        <label for="Description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea name="Description" id="Description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $house->Description }}</textarea>
                    </div>

                    <!-- Location Field -->
                    <div class="mb-4">
                        <label for="Location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                        <input type="text" name="Location" id="Location" value="{{ $house->Location }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update House</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
