{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Houses') }}--}}
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="mt-4">
                    <a href="{{ route('houses.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
                </div>

                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Location</th>
{{--                        <th class="px-4 py-2">Created at</th>--}}
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($houses as $house)
                        <tr>
                            <td class="border px-4 py-2">{{ $house->id }}</td>
                            <td class="border px-4 py-2">{{ $house->Title }}</td>
                            <td class="border px-4 py-2">{{ $house->Description }}</td>
                            <td class="border px-4 py-2">{{ $house->Location }}</td>
{{--                            <td class="border px-4 py-2">{{ $house->created_at }}</td>--}}
                            <td class="border px-4 py-2">
                                <a href="{{ route('houses.show', $house->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                                <a href="{{ route('houses.edit', $house->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <form action="{{ route('houses.destroy', $house->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Are you sure?')"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
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
{{--</x-app-layout>--}}
