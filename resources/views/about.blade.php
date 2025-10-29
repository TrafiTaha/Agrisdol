<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <!-- Enhanced Hero Section -->
    <div class="relative min-h-screen bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" alt="Agriculture Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-br from-green-900/40 via-transparent to-blue-900/40"></div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-2 h-2 bg-white/20 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-1 h-1 bg-yellow-300/30 rounded-full animate-bounce"></div>
            <div class="absolute bottom-32 left-1/4 w-3 h-3 bg-green-300/20 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-10 w-2 h-2 bg-blue-300/25 rounded-full animate-bounce"></div>
            <div class="absolute bottom-20 right-1/3 w-1 h-1 bg-white/30 rounded-full animate-pulse"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 min-h-screen flex items-center">
            <div class="text-center w-full">
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-8 border border-white/20">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    Pioneering Agricultural Innovation
                </div>

                <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight">
                    About <span class="bg-gradient-to-r from-yellow-300 via-yellow-200 to-orange-300 bg-clip-text text-transparent animate-pulse">AgrisSol</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto leading-relaxed opacity-90">
                    Pioneering agricultural innovation in Tunisia since 2010, dedicated to sustainable farming practices and technological advancement that transforms lives and landscapes.
                </p>

                <!-- Stats -->
                <div class="flex flex-wrap justify-center gap-12 mb-12">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300 mb-2">14+</div>
                        <div class="text-sm opacity-80">Years of Excellence</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-300 mb-2">5000+</div>
                        <div class="text-sm opacity-80">Farmers Served</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-green-300 mb-2">25</div>
                        <div class="text-sm opacity-80">Governorates Covered</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-purple-300 mb-2">98%</div>
                        <div class="text-sm opacity-80">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>

    <!-- Enhanced Story Section -->
    <div class="py-20 bg-gradient-to-br from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #16a34a 2px, transparent 2px), radial-gradient(circle at 75% 75%, #16a34a 2px, transparent 2px); background-size: 50px 50px;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="animate-fade-in-left">
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-6">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Our Story
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8 leading-tight">From Vision to Reality</h2>
                    <div class="space-y-6">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Founded in 2010, AgrisSol emerged from a vision to revolutionize agriculture in Tunisia. We recognized that traditional farming methods needed to evolve with modern technology while respecting our rich agricultural heritage.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Today, we serve over 5,000 farmers across Tunisia, providing innovative solutions that increase productivity, reduce environmental impact, and ensure sustainable food production for future generations.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Our commitment to excellence has earned us recognition as Tunisia's leading agricultural technology provider, trusted by farmers, cooperatives, and government agencies alike.
                        </p>
                    </div>

                    <!-- Key Achievements -->
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700">ISO Certified</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700">Award Winning</span>
                        </div>
                    </div>
                </div>
                <div class="relative animate-fade-in-right">
                    <div class="absolute -inset-4 bg-gradient-to-r from-green-400/20 to-blue-400/20 rounded-3xl blur-2xl"></div>
                    <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Sustainable Farming" class="relative w-full h-96 object-cover rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl"></div>

                    <!-- Floating Stats -->
                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm rounded-2xl p-4 shadow-lg">
                        <div class="text-2xl font-bold text-green-600">2010</div>
                        <div class="text-sm text-gray-600">Founded</div>
                    </div>
                    <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm rounded-2xl p-4 shadow-lg">
                        <div class="text-2xl font-bold text-blue-600">5000+</div>
                        <div class="text-sm text-gray-600">Farmers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Mission & Vision -->
    <div class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #16a34a 2px, transparent 2px), radial-gradient(circle at 75% 75%, #16a34a 2px, transparent 2px); background-size: 50px 50px;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Our Purpose & Direction
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Driving Agricultural Excellence</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Our mission and vision guide every decision we make, ensuring we deliver sustainable solutions that benefit farmers, communities, and the environment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="group bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-gray-900 group-hover:text-green-700 transition-colors duration-300">Our Mission</h3>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        To empower Tunisian farmers with innovative, sustainable agricultural solutions that enhance productivity, preserve the environment, and ensure food security for our nation.
                    </p>
                    <div class="flex items-center text-green-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>

                <div class="group bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-blue-200">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-gray-900 group-hover:text-blue-700 transition-colors duration-300">Our Vision</h3>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        To be Tunisia's premier agricultural technology leader, setting the standard for sustainable farming practices and digital agriculture transformation.
                    </p>
                    <div class="flex items-center text-blue-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Team Section -->
    <div class="py-20 bg-gradient-to-br from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #16a34a 2px, transparent 2px), radial-gradient(circle at 75% 75%, #16a34a 2px, transparent 2px); background-size: 50px 50px;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Leadership Excellence
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Leadership Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Meet the visionary leaders and experts who are driving agricultural innovation and sustainable development across Tunisia.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 rounded-full mx-auto overflow-hidden shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" alt="Ahmed Ben Ali" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-gray-900 group-hover:text-green-700 transition-colors duration-300">Ahmed Ben Ali</h3>
                    <p class="text-green-600 font-semibold mb-4">CEO & Founder</p>
                    <p class="text-gray-600 leading-relaxed mb-6">20+ years in agricultural technology and sustainable farming practices, pioneering digital transformation in Tunisian agriculture.</p>
                    <div class="flex justify-center space-x-4">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-blue-200">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 rounded-full mx-auto overflow-hidden shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" alt="Fatima Trabelsi" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-gray-900 group-hover:text-blue-700 transition-colors duration-300">Fatima Trabelsi</h3>
                    <p class="text-blue-600 font-semibold mb-4">Chief Agronomist</p>
                    <p class="text-gray-600 leading-relaxed mb-6">Expert in soil science and crop optimization for Tunisian climate conditions, leading research in sustainable agriculture.</p>
                    <div class="flex justify-center space-x-4">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-purple-200">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 rounded-full mx-auto overflow-hidden shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" alt="Mohamed Saidi" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-gray-900 group-hover:text-purple-700 transition-colors duration-300">Mohamed Saidi</h3>
                    <p class="text-purple-600 font-semibold mb-4">Technology Director</p>
                    <p class="text-gray-600 leading-relaxed mb-6">Leading digital transformation initiatives in agriculture and IoT solutions, bridging traditional farming with cutting-edge technology.</p>
                    <div class="flex justify-center space-x-4">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
