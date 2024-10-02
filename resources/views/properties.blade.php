<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('home') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}


{{--    <div class="py-8">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl">--}}
{{--                <x-welcome />--}}

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Estelus Realty</title>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

                    <style>
                        .bg-custom {
                            background-color: #DFD5C7;
                        }
                        /*.bg-custom-color {*/
                        /*    background-color: #AFAA67;*/
                        /*}*/
                    </style>

                </head>
                <body class="font-sans">

                <div class="container mx-auto py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="image1.jpg" alt="Dorchester Commerce Center">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Dorchester Commerce Center</h3>
                                <p class="text-sm text-gray-500">Summerville, SC</p>
                                <span class="inline-block mt-2 px-2 py-1 bg-gray-200 text-xs text-gray-700 rounded">Industrial</span>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="image2.jpg" alt="Highpoint Commerce Center">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Highpoint Commerce Center</h3>
                                <p class="text-sm text-gray-500">Largo, FL</p>
                                <span class="inline-block mt-2 px-2 py-1 bg-gray-200 text-xs text-gray-700 rounded">Industrial</span>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="image3.jpg" alt="Highland Townhomes">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Highland Townhomes</h3>
                                <p class="text-sm text-gray-500">North Charleston, SC</p>
                                <span class="inline-block mt-2 px-2 py-1 bg-gray-200 text-xs text-gray-700 rounded">Build-for-rent</span>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="image4.jpg" alt="Blue Jay Commons">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Blue Jay Commons</h3>
                                <p class="text-sm text-gray-500">Rincon, GA</p>
                                <span class="inline-block mt-2 px-2 py-1 bg-gray-200 text-xs text-gray-700 rounded">Build-for-rent</span>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="image5.jpg" alt="215 Interchange">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">215 Interchange</h3>
                                <p class="text-sm text-gray-500">Las Vegas, NV</p>
                                <span class="inline-block mt-2 px-2 py-1 bg-gray-200 text-xs text-gray-700 rounded">Industrial</span>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="image6.jpg" alt="Industrial">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Industrial</h3>
                                <p class="text-sm text-gray-500">Litchfield Park, AZ</p>
                                <span class="inline-block mt-2 px-2 py-1 bg-gray-200 text-xs text-gray-700 rounded">Industrial</span>
                            </div>
                        </div>




                    </div>
                </div>

                <!-- Footer -->
                <footer class="bg-gray-800 text-white h-96 py-12 px-4">
                    <div class="container mx-auto text-center px-4">
                        <div class="mb-4">
                            <img src="{{ asset('Images/estelus-realty-high-resolution-logo-white-transparent.png') }}" alt="logo" class="block h-20 w-auto" />
                        </div>
                        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="#" class="text-gray-600">Topic</a>
                            <a href="#" class="text-gray-600">Topic</a>
                            <a href="#" class="text-gray-600">Topic</a>
                            <a href="#" class="text-gray-600">Topic</a>
                            <a href="#" class="text-gray-600">Topic</a>
                        </div>
                        <div class="mt-4 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="#" class="text-gray-600">Page</a>
                            <a href="#" class="text-gray-600">Page</a>
                            <a href="#" class="text-gray-600">Page</a>
                            <a href="#" class="text-gray-600">Page</a>
                        </div>
                    </div>
                </footer>
                </body>
                </html>


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
