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

                <!-- Navbar -->
{{--                <nav class="bg-gray-100 p-4">--}}
{{--                    <div class="container mx-auto flex justify-between items-center">--}}
{{--                        <div>--}}
{{--                            <!-- <img src="https://via.placeholder.com/150x50" alt="Estetus Realty Logo" class="h-10"> -->--}}
{{--                            <img src="{{ asset('Images/estelus realty logo.png') }}" alt="logo" class="block h-20 w-auto" />--}}
{{--                        </div>--}}
{{--                        <div class="hidden md:flex space-x-4">--}}
{{--                            <a href="#" class="px-4">Home</a>--}}
{{--                            <a href="#" class="px-4">Properties</a>--}}
{{--                            <a href="#" class="px-4">About Us</a>--}}
{{--                            <a href="#" class="px-4">Market Insights</a>--}}
{{--                            <a href="#" class="px-4">Agents</a>--}}
{{--                            <a href="#" class="bg-gray-300 px-4 py-2 rounded">Contact</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </nav>--}}

                <!-- Hero Section -->
                <section class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image:url('{{ asset('Images/Home page image.png') }}');">
                    <div class="text-center text-white px-6">
                        <h1 class="text-5xl font-semibold mb-8" style= "font-family: 'Libre Baskerville', serif;">Unlock Sri Lanka’s Hidden Investment Gems</h1>
                        <p class="mt-5 mb-4 text-2xl" style="font-family: 'Open Sans', sans-serif;">Effortless search. Personalized recommendations. Invest with confidence.</p>
                        <button class="mt-9 bg-gray-900 text-white py-5 px-7 text-2xl rounded">Explore</button>
                    </div>
                </section>

                <!-- Browse Properties -->
                <section class="container mx-auto min-h-screen py-12 text-center px-4">
                    <h2 class="text-3xl font-bold mb-8">Browse Properties</h2>
                    <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                        <select class="border border-gray-300 py-2 px-10 rounded">
                            <option>Select Location</option>
                            <option>Colombo</option>
                            <option>Gampaha</option>
                            <option>Kandy</option>
                            <option>Galle</option>
                        </select>
                        <select class="border border-gray-300 py-2 px-10 rounded">
                            <option>Property Type</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Land</option>
                            <option>Industrial</option>

                        </select>

                        <button class="mt-6 bg-gray-900 text-white py-2 px-4 rounded">Browse</button>

                    </div>
                </section>

                <!-- Latest Properties -->
                <section class="bg-custom py-12 min-h-screen">
                    <div class="container mx-auto text-center px-4">
                        <h2 class="text-3xl font-bold mb-8">Latest Properties</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="bg-white p-4 rounded shadow">
                                <div class="bg-gray-300 h-48 mb-4"></div>
                                <div>Property Title</div>
                            </div>
                            <div class="bg-white p-4 rounded shadow">
                                <div class="bg-gray-300 h-48 mb-4"></div>
                                <div>Property Title</div>
                            </div>
                            <div class="bg-white p-4 rounded shadow">
                                <div class="bg-gray-300 h-48 mb-4"></div>
                                <div>Property Title</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Customer Testimonials -->
                <section class="container mx-auto py-20 text-center px-4 min-h-screen">
                    <h2 class="text-3xl font-bold mb-8">Customer Testimonials</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-14">
                        <div>
                            <h3 class="font-semibold">Subheading</h3>
                            <p>Body text for whatever you’d like to type. Add main takeaway points, quotes, anecdotes, or even a very very short story.</p>
                        </div>
                        <div>
                            <h3 class="font-semibold">Subheading</h3>
                            <p>Body text for whatever you’d like to type. Add main takeaway points, quotes, anecdotes, or even a very very short story.</p>
                        </div>
                    </div>
                </section>

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
