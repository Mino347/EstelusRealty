<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Edit House') }} {{ $house->Title }}--}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('propertytype.update', $propertytype->id) }}"
                          method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="Title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                            <input type="text" name="Title" id="Title" value="{{ $propertytype->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="Description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea name="Description" id="Description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $propertytype->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Property Type

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
