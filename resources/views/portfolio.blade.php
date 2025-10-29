<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Portfolio') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden min-h-screen flex items-center">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1500651230702-0e2d8a49d4ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" alt="Agriculture Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-br from-green-900/60 via-transparent to-blue-900/60"></div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-2 h-2 bg-white/20 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-1 h-1 bg-white/30 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-3 h-3 bg-white/10 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/3 right-1/3 w-1.5 h-1.5 bg-white/25 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-20 right-1/3 w-1 h-1 bg-white/30 rounded-full animate-pulse" style="animation-delay: 3s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium text-white animate-fade-in">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                        SUCCESS STORIES
                    </span>
                </div>

                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 animate-fade-in bg-gradient-to-r from-white via-green-100 to-white bg-clip-text text-transparent leading-tight">
                    Our
                    <span class="block text-5xl md:text-6xl lg:text-7xl font-bold bg-gradient-to-r from-green-200 to-blue-200 bg-clip-text text-transparent">
                        Portfolio
                    </span>
                </h1>

                <p class="text-xl md:text-2xl lg:text-3xl mb-12 max-w-5xl mx-auto opacity-90 leading-relaxed font-light animate-fade-in" style="animation-delay: 0.3s;">
                    Discover how we've helped Tunisian farmers transform their operations and achieve remarkable results through innovative agricultural solutions.
                </p>

                <!-- Scroll indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Olive Grove" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Modern Olive Grove Transformation</h3>
                        <p class="text-gray-600 mb-4">
                            Implemented precision irrigation and monitoring systems for a 50-hectare olive grove in Sfax, resulting in 40% water savings and 25% yield increase.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Irrigation Systems</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">IoT Sensors</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">Precision Farming</span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <strong>Location:</strong> Sfax, Tunisia<br>
                            <strong>Duration:</strong> 6 months<br>
                            <strong>Impact:</strong> 40% water conservation, 25% yield increase
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Greenhouse Complex" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">High-Tech Greenhouse Complex</h3>
                        <p class="text-gray-600 mb-4">
                            Designed and implemented a 20-hectare greenhouse complex with automated climate control and hydroponic systems for year-round vegetable production.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Greenhouse Design</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Automation</span>
                            <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-sm">Hydroponics</span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <strong>Location:</strong> Tunis, Tunisia<br>
                            <strong>Duration:</strong> 12 months<br>
                            <strong>Impact:</strong> Year-round production, 300% efficiency increase
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1500651230702-0e2d8a49d4ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Wheat Field" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Sustainable Wheat Farming Initiative</h3>
                        <p class="text-gray-600 mb-4">
                            Transformed traditional wheat farming practices across 200 hectares using sustainable methods, organic fertilizers, and precision agriculture.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Sustainable Farming</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Organic Methods</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">Soil Health</span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <strong>Location:</strong> Beja, Tunisia<br>
                            <strong>Duration:</strong> 18 months<br>
                            <strong>Impact:</strong> 35% cost reduction, improved soil health
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Date Palm Plantation" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Smart Date Palm Irrigation</h3>
                        <p class="text-gray-600 mb-4">
                            Installed smart irrigation systems for a 30-hectare date palm plantation, incorporating weather forecasting and soil moisture sensors.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-sm">Smart Irrigation</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Weather Integration</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">IoT Technology</span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <strong>Location:</strong> Tozeur, Tunisia<br>
                            <strong>Duration:</strong> 8 months<br>
                            <strong>Impact:</strong> 50% water savings, improved fruit quality
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Training Program" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Farmer Training & Education</h3>
                        <p class="text-gray-600 mb-4">
                            Comprehensive training program for 500+ farmers covering modern agricultural techniques, technology adoption, and sustainable practices.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-sm">Training</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Education</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">Technology Transfer</span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <strong>Location:</strong> Multiple regions, Tunisia<br>
                            <strong>Duration:</strong> 24 months<br>
                            <strong>Impact:</strong> 500+ farmers trained, technology adoption increased by 60%
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Equipment Modernization" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Agricultural Equipment Upgrade</h3>
                        <p class="text-gray-600 mb-4">
                            Modernized farming equipment for a cooperative of 150 farmers, including GPS-guided tractors and automated harvesting systems.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Equipment</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">GPS Technology</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Automation</span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <strong>Location:</strong> Nabeul, Tunisia<br>
                            <strong>Duration:</strong> 10 months<br>
                            <strong>Impact:</strong> 45% efficiency increase, reduced operational costs
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Impact in Numbers</h2>
                <p class="text-lg text-gray-600">Measurable results from our agricultural transformation projects</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">500+</div>
                    <div class="text-gray-600">Farmers Trained</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">2,000+</div>
                    <div class="text-gray-600">Hectares Transformed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">40%</div>
                    <div class="text-gray-600">Average Water Savings</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">35%</div>
                    <div class="text-gray-600">Yield Increase</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready for Your Success Story?</h2>
            <p class="text-xl mb-8">Join the growing number of Tunisian farmers who have transformed their operations with AgrisSol.</p>
            <a href="{{ route('contact') }}" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                Start Your Project
            </a>
        </div>
    </div>
</x-app-layout>
