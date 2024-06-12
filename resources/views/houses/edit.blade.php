<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit House') }} {{ $house->Title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('houses.update', $house->id) }}"
                          method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="Title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                            <input type="text" name="Title" id="Title" value="{{ $house->Title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="Description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea name="Description" id="Description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $house->Description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="Location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                            <input type="text" name="Location" id="Location" value="{{ $house->Location }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update House</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
