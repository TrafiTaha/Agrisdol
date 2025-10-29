<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Modern Gradient Background with Mesh -->
        <div class="min-h-screen relative overflow-hidden">
            <!-- Animated Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-blue-50 to-green-50"></div>

            <!-- Gradient Mesh Overlay -->
            <div class="absolute inset-0 gradient-mesh"></div>

            <!-- Animated Floating Orbs -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-20 left-10 w-72 h-72 bg-green-400/20 rounded-full blur-3xl animate-float"></div>
                <div class="absolute top-40 right-20 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
                <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-green-300/20 rounded-full blur-3xl animate-float" style="animation-delay: 4s;"></div>
            </div>

            <!-- Pattern Overlay -->
            <div class="absolute inset-0 pattern-dots opacity-30"></div>

            <!-- Content Container -->
            <div class="relative flex flex-col sm:justify-center items-center min-h-screen pt-6 sm:pt-0 px-4">
                <!-- Logo Section -->
                <div class="mb-8 animate-fade-in-down">
                    <a href="{{ route('home') }}" class="group relative inline-block">
                        <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-blue-400 rounded-2xl opacity-0 group-hover:opacity-20 blur-xl transition-opacity duration-300"></div>
                        <span class="relative text-4xl font-black bg-gradient-to-r from-green-600 via-green-700 to-blue-600 bg-clip-text text-transparent group-hover:scale-105 transition-transform duration-300 inline-block">
                            AgrisSol
                        </span>
                    </a>
                </div>

                <!-- Card Container -->
                <div class="w-full sm:max-w-md animate-scale-in">
                    <div class="card-glass p-8 sm:p-10">
                        {{ $slot }}
                    </div>
                </div>

                <!-- Back to Home Link -->
                <div class="mt-6 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-green-600 transition-colors duration-300 group">
                        <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>

        <!-- Modern Footer -->
        <footer class="relative bg-gradient-to-r from-green-700 via-green-800 to-blue-700 text-white py-12 overflow-hidden">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <!-- Footer Logo -->
                    <div class="mb-6">
                        <span class="text-3xl font-black bg-gradient-to-r from-white to-green-200 bg-clip-text text-transparent">
                            AgrisSol
                        </span>
                    </div>

                    <!-- Footer Links -->
                    <div class="flex flex-wrap justify-center gap-6 mb-6">
                        <a href="{{ route('about') }}" class="group relative text-white/90 hover:text-white transition-colors duration-300">
                            <span class="relative">About</span>
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-300 group-hover:w-full transition-all duration-300"></span>
                        </a>
                        <a href="{{ route('services') }}" class="group relative text-white/90 hover:text-white transition-colors duration-300">
                            <span class="relative">Services</span>
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-300 group-hover:w-full transition-all duration-300"></span>
                        </a>
                        <a href="{{ route('contact') }}" class="group relative text-white/90 hover:text-white transition-colors duration-300">
                            <span class="relative">Contact</span>
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-300 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </div>

                    <!-- Copyright -->
                    <div class="border-t border-white/10 pt-6">
                        <p class="text-white/70 text-sm">
                            &copy; {{ date('Y') }} AgrisSol. All rights reserved. | Leading Agricultural Innovation in Tunisia
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
