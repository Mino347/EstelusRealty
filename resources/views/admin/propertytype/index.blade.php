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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="px-6 py-4">
                    <div class="mb-4">
                         <a href="{{ route('propertytype.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Create</a>
                    </div>

                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="px-5 py-3 border-b-2 border-gray-200 text-gray-600 font-semibold text-sm">ID</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 text-gray-600 font-semibold text-sm">Title</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 text-gray-600 font-semibold text-sm">Description</th>
{{--                            <th class="px-5 py-3 border-b-2 border-gray-200 text-gray-600 font-semibold text-sm">Created At</th>--}}
                            <th class="px-5 py-3 border-b-2 border-gray-200 text-gray-600 font-semibold text-sm">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($propertytypes as $propertytype)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-4 border-b border-gray-200 text-gray-700">{{ $propertytype->id }}</td>
                                <td class="px-5 py-4 border-b border-gray-200 text-gray-700">{{ $propertytype->title }}</td>
                                <td class="px-5 py-4 border-b border-gray-200 text-gray-700">{{ $propertytype->description }}</td>
{{--                                <td class="px-5 py-4 border-b border-gray-200 text-gray-700">{{ $propertytype->created_at }}</td>--}}
                                <td class="px-5 py-4 border-b border-gray-200 text-gray-700">
                                    {{-- Uncomment the below buttons for actions --}}

{{--                                    <a href="{{ route('propertytype.show', $propertytype->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg mr-2">View</a>--}}
                                  <a href="{{ route('propertytype.edit', $propertytype->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg mr-2">Edit</a>
                                    <form action="{{ route('propertytype.destroy', $propertytype->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="px-5 py-4">
                        {{-- Add pagination here if needed --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
