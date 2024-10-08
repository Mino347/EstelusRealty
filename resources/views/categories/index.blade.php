{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Categories') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Side Panel -->
<div class="flex min-h-screen">

    @include('admin.sidepanel')

    <div class="py-12 flex-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="mt-4">
                    <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Category</a>
                </div>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
{{--                            <th class="px-4 py-2">Created At</th>--}}
{{--                            <th class="px-4 py-2">Updated At</th>--}}
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="border px-4 py-2">{{ $category->id }}</td>
                                <td class="border px-4 py-2">{{ $category->title }}</td>
                                <td class="border px-4 py-2">{{ $category->description }}</td>
{{--                                <td class="border px-4 py-2">{{ $category->created_at }}</td>--}}
{{--                                <td class="border px-4 py-2">{{ $category->updated_at }}</td>--}}
                                <td class="border px-4 py-2">
                                    <a href="{{ route('categories.show', $category->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>
