<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Services') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden min-h-screen flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" alt="Agricultural Services Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-br from-green-900/70 via-green-800/60 to-blue-900/70"></div>
        </div>

        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating particles -->
            <div class="absolute top-20 left-10 w-2 h-2 bg-white/20 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-1 h-1 bg-white/30 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-3 h-3 bg-white/10 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/3 right-1/3 w-1.5 h-1.5 bg-white/25 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>

            <!-- Gradient orbs -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-green-400/20 to-transparent rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-blue-400/20 to-transparent rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
        </div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse">
                        <circle cx="25" cy="25" r="1" fill="currentColor"/>
                        <circle cx="75" cy="75" r="1" fill="currentColor"/>
                        <circle cx="50" cy="10" r="0.5" fill="currentColor"/>
                        <circle cx="10" cy="50" r="0.5" fill="currentColor"/>
                        <circle cx="90" cy="30" r="0.5" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grain)"/>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium text-white animate-fade-in">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        Premium Agricultural Solutions
                    </span>
                </div>

                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 animate-fade-in bg-gradient-to-r from-white via-green-100 to-white bg-clip-text text-transparent leading-tight">
                    Agricultural
                    <span class="block text-5xl md:text-6xl lg:text-7xl font-bold bg-gradient-to-r from-green-200 to-blue-200 bg-clip-text text-transparent">
                        Services
                    </span>
                </h1>

                <p class="text-xl md:text-2xl lg:text-3xl mb-12 max-w-5xl mx-auto opacity-90 leading-relaxed font-light animate-fade-in" style="animation-delay: 0.3s;">
                    Comprehensive agricultural solutions tailored for Tunisian farmers, combining traditional wisdom with cutting-edge technology.
                </p>

                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fade-in" style="animation-delay: 0.6s;">
                    <a href="#services" class="group relative bg-white text-green-700 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all duration-500 transform hover:scale-105 hover:shadow-2xl overflow-hidden">
                        <span class="relative z-10">Explore Services</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-green-50 to-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-green-400/20 to-blue-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </a>

                    <a href="{{ route('contact') }}" class="group border-2 border-white/30 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/50 transition-all duration-500 backdrop-blur-sm">
                        <span class="flex items-center">
                            Get Started
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Scroll indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div id="services" class="py-32 bg-gradient-to-br from-slate-50 via-white to-blue-50/30 relative overflow-hidden">
        <!-- Advanced Background Elements -->
        <div class="absolute inset-0">
            <!-- Animated gradient mesh -->
            <div class="absolute inset-0 bg-gradient-to-br from-green-50/40 via-transparent to-blue-50/40 animate-pulse"></div>

            <!-- Floating geometric shapes -->
            <div class="absolute top-20 left-10 w-32 h-32 border border-green-200/30 rounded-full animate-spin" style="animation-duration: 20s;"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-gradient-to-br from-blue-100/50 to-purple-100/50 rounded-lg rotate-45 animate-bounce" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-32 left-1/4 w-20 h-20 border-2 border-yellow-200/40 rounded-full animate-pulse" style="animation-delay: 4s;"></div>
            <div class="absolute top-1/3 right-1/3 w-16 h-16 bg-gradient-to-br from-cyan-100/60 to-green-100/60 rounded-full animate-ping" style="animation-delay: 1s;"></div>

            <!-- Subtle particle effects -->
            <div class="absolute top-1/4 left-1/5 w-2 h-2 bg-green-400/30 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-3/4 right-1/4 w-1.5 h-1.5 bg-blue-400/40 rounded-full animate-bounce" style="animation-delay: 3s;"></div>
            <div class="absolute bottom-1/4 left-3/4 w-1 h-1 bg-purple-400/50 rounded-full animate-pulse" style="animation-delay: 5s;"></div>
        </div>

        <!-- Interactive background grid -->
        <div class="absolute inset-0 opacity-[0.015]">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(0,0,0,0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Enhanced Header Section -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-r from-green-100/80 to-blue-100/80 backdrop-blur-sm border border-white/50 shadow-lg mb-8 animate-fade-in">
                    <svg class="w-5 h-5 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700 tracking-wide">EXPERT AGRICULTURAL SOLUTIONS</span>
                </div>

                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 animate-fade-in bg-gradient-to-r from-gray-900 via-green-800 to-gray-900 bg-clip-text text-transparent leading-tight" style="animation-delay: 0.2s;">
                    What We
                    <span class="block bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                        Offer
                    </span>
                </h2>

                <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed font-light animate-fade-in" style="animation-delay: 0.4s;">
                    Discover our comprehensive range of agricultural services designed to maximize your farm's potential and ensure sustainable success
                </p>

                <!-- Stats Section -->
                <div class="flex flex-wrap justify-center gap-8 mt-12 animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-1">500+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wide">Happy Farmers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-1">50+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wide">Expert Consultants</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-1">10K+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wide">Acres Optimized</div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">

                <!-- Precision Farming -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-green-700 transition-colors duration-300">Precision Farming</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Data-driven farming solutions using IoT sensors, GPS technology, and AI analytics to optimize crop yields and resource usage.
                        </p>
                        <div class="relative overflow-hidden rounded-xl mb-6 group-hover:shadow-xl transition-shadow duration-300">
                            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Precision Farming" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Soil moisture monitoring</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>GPS-guided planting</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Yield prediction models</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Resource optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Sustainable Agriculture -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-700 transition-colors duration-300">Sustainable Agriculture</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Environmentally friendly farming practices that preserve soil health, reduce water usage, and promote biodiversity.
                        </p>
                        <div class="relative overflow-hidden rounded-xl mb-6 group-hover:shadow-xl transition-shadow duration-300">
                            <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Sustainable Agriculture" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Organic farming methods</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Water conservation techniques</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Soil health management</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Biodiversity enhancement</li>
                        </ul>
                    </div>
                </div>

                <!-- Crop Consulting -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Crop Consulting</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Expert agricultural advice on crop selection, pest management, and optimal harvesting techniques for Tunisian conditions.
                        </p>
                        <div class="relative overflow-hidden rounded-xl mb-6 group-hover:shadow-xl transition-shadow duration-300">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Crop Consulting" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>Crop variety selection</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>Pest & disease management</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>Harvest optimization</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>Market analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Irrigation Systems -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-cyan-700 transition-colors duration-300">Irrigation Systems</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Advanced irrigation solutions including drip irrigation, sprinkler systems, and smart water management technology.
                        </p>
                        <div class="relative overflow-hidden rounded-xl mb-6 group-hover:shadow-xl transition-shadow duration-300">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Irrigation Systems" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center"><span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>Drip irrigation design</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>Smart irrigation controllers</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>Water usage monitoring</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>System maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- Equipment & Technology -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-purple-700 transition-colors duration-300">Equipment & Technology</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Modern farming equipment and agricultural technology solutions including tractors, harvesters, and monitoring systems.
                        </p>
                        <div class="relative overflow-hidden rounded-xl mb-6 group-hover:shadow-xl transition-shadow duration-300">
                            <img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Equipment & Technology" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Agricultural machinery</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>IoT sensors & monitoring</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Data analytics platforms</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Equipment maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- Training & Education -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-indigo-700 transition-colors duration-300">Training & Education</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Comprehensive training programs and educational resources to help farmers adopt modern agricultural practices.
                        </p>
                        <div class="relative overflow-hidden rounded-xl mb-6 group-hover:shadow-xl transition-shadow duration-300">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Training & Education" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>Farmer training workshops</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>Technology adoption programs</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>Best practices education</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>Certification programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced CTA Section -->
    <div class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white py-24 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating orbs -->
            <div class="absolute top-10 left-10 w-20 h-20 bg-white/5 rounded-full animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-16 h-16 bg-blue-400/10 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-green-300/10 rounded-full animate-ping" style="animation-delay: 2s;"></div>

            <!-- Gradient mesh overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 via-transparent to-blue-500/10 animate-pulse"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Premium badge -->
            <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-8 animate-fade-in">
                <svg class="w-5 h-5 text-yellow-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                <span class="text-sm font-semibold text-white tracking-wide">PREMIUM AGRICULTURAL EXPERTISE</span>
            </div>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6 animate-fade-in bg-gradient-to-r from-white via-green-100 to-white bg-clip-text text-transparent leading-tight" style="animation-delay: 0.2s;">
                Ready to Transform
                <span class="block bg-gradient-to-r from-green-200 to-blue-200 bg-clip-text text-transparent">
                    Your Farm?
                </span>
            </h2>

            <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto opacity-90 leading-relaxed font-light animate-fade-in" style="animation-delay: 0.4s;">
                Join hundreds of successful Tunisian farmers who have revolutionized their operations with our cutting-edge agricultural solutions.
            </p>

            <!-- Enhanced CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-8 animate-fade-in" style="animation-delay: 0.6s;">
                <a href="{{ route('contact') }}" class="group relative bg-white text-green-700 px-12 py-5 rounded-2xl font-bold text-xl hover:bg-gray-50 transition-all duration-500 transform hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10 flex items-center">
                        Start Your Journey
                        <svg class="w-6 h-6 ml-3 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-50 to-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-400/20 to-blue-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                </a>

                <a href="#services" class="group border-2 border-white/40 text-white px-12 py-5 rounded-2xl font-bold text-xl hover:bg-white/10 hover:border-white/60 transition-all duration-500 backdrop-blur-sm">
                    <span class="flex items-center">
                        Learn More
                        <svg class="w-6 h-6 ml-3 group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </span>
                </a>
            </div>

            <!-- Trust indicators -->
            <div class="flex flex-wrap justify-center items-center gap-8 mt-16 opacity-80 animate-fade-in" style="animation-delay: 0.8s;">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-medium">Certified Experts</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <span class="text-sm font-medium">Secure & Reliable</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-sm font-medium">24/7 Support</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
