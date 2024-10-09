<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Form Container -->
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Create New Category</h2>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <!-- Title Field -->
                    <div class="mb-6">
                        <label for="Title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" name="Title" id="Title" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900" placeholder="Enter category title" required>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-6">
                        <label for="Description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="Description" id="Description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900" placeholder="Enter category description" required></textarea>
                    </div>



                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition ease-in-out duration-150">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
