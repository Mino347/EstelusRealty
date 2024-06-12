<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $house->Title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <p class="text-gray-700 text-sm font-bold mb-2">Description</p>
                        <p>{{ $house->Description }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-700 text-sm font-bold mb-2">Location</p>
                        <p>{{ $house->Location }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-700 text-sm font-bold mb-2">Created at</p>
                        <p>{{ $house->created_at }}</p>
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('houses.edit', $house->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('houses.destroy', $house->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Are you sure?')"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
