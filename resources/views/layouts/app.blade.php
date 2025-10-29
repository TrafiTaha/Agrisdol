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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50/30 relative">
            <!-- Background Pattern -->
            <div class="fixed inset-0 pattern-dots opacity-20 pointer-events-none"></div>

            <!-- Floating Background Elements -->
            <div class="fixed inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-20 right-20 w-96 h-96 bg-green-400/10 rounded-full blur-3xl animate-float"></div>
                <div class="absolute bottom-20 left-20 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-float" style="animation-delay: 3s;"></div>
            </div>

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="relative bg-white/80 backdrop-blur-md shadow-sm border-b border-white/20 mt-16">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="relative">
                {{ $slot }}
            </main>

            <!-- Modern Enhanced Footer -->
            <footer class="relative bg-gradient-to-r from-green-700 via-green-800 to-blue-700 text-white py-16 mt-20 overflow-hidden">
                <!-- Animated Background Elements -->
                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
                    <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-green-400/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
                </div>

                <!-- Subtle Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute inset-0 pattern-grid"></div>
                </div>

                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                        <!-- Company Info -->
                        <div class="md:col-span-2">
                            <div class="mb-6">
                                <span class="text-4xl font-black bg-gradient-to-r from-white to-green-200 bg-clip-text text-transparent">
                                    AgrisSol
                                </span>
                            </div>
                            <p class="text-white/80 mb-6 leading-relaxed max-w-md">
                                Leading agricultural innovation in Tunisia. Empowering farmers with cutting-edge technology and sustainable solutions for a better tomorrow.
                            </p>
                            <!-- Social Links -->
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 group">
                                    <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 group">
                                    <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 group">
                                    <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div>
                            <h3 class="text-lg font-bold mb-4 text-white">Quick Links</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="{{ route('about') }}" class="group inline-flex items-center text-white/80 hover:text-white transition-colors duration-300">
                                        <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}" class="group inline-flex items-center text-white/80 hover:text-white transition-colors duration-300">
                                        <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('portfolio') }}" class="group inline-flex items-center text-white/80 hover:text-white transition-colors duration-300">
                                        <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="group inline-flex items-center text-white/80 hover:text-white transition-colors duration-300">
                                        <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div>
                            <h3 class="text-lg font-bold mb-4 text-white">Contact Info</h3>
                            <ul class="space-y-3 text-white/80 text-sm">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Sidi Bouzid, Tunisia</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>info@agrisol.tn</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>+216 71 123 456</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bottom Bar -->
                    <div class="border-t border-white/10 pt-8">
                        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                            <p class="text-white/70 text-sm text-center md:text-left">
                                &copy; {{ date('Y') }} AgrisSol. All rights reserved. | Leading Agricultural Innovation in Tunisia
                            </p>
                            <div class="flex space-x-6 text-sm">
                                <a href="#" class="text-white/70 hover:text-white transition-colors duration-300">Privacy Policy</a>
                                <a href="#" class="text-white/70 hover:text-white transition-colors duration-300">Terms of Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
