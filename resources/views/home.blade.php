<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <!-- Enhanced Hero Section -->
    <div class="relative min-h-screen bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1500651230702-0e2d8a49d4ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" alt="Agriculture Background" class="w-full h-full object-cover opacity-30">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">
                <div class="animate-fade-in-up">
                    <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-6 border border-white/20">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Leading Agricultural Innovation in Tunisia
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight">
                        Welcome to <span class="bg-gradient-to-r from-yellow-300 via-yellow-200 to-orange-300 bg-clip-text text-transparent animate-pulse">AgrisSol</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-10 max-w-2xl leading-relaxed opacity-90">
                        Empowering Tunisian farmers with cutting-edge technology, sustainable practices, and innovative solutions for the future of agriculture.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('services') }}" class="group bg-white text-green-700 px-8 py-4 rounded-2xl font-bold hover:bg-gray-50 transition-all duration-300 shadow-2xl hover:shadow-white/25 transform hover:scale-105 hover:-translate-y-1">
                            <span class="flex items-center justify-center">
                                Our Services
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('contact') }}" class="group border-2 border-white/80 text-white px-8 py-4 rounded-2xl font-bold hover:bg-white hover:text-green-700 transition-all duration-300 backdrop-blur-sm shadow-xl hover:shadow-white/25 transform hover:scale-105 hover:-translate-y-1">
                            <span class="flex items-center justify-center">
                                Contact Us
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="flex flex-wrap gap-8 mt-12 pt-8 border-t border-white/20">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-yellow-300">500+</div>
                            <div class="text-sm opacity-80">Farmers Served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-300">2000+</div>
                            <div class="text-sm opacity-80">Hectares Transformed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-300">40%</div>
                            <div class="text-sm opacity-80">Water Savings</div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block animate-fade-in-right">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-yellow-400/20 to-green-400/20 rounded-3xl blur-2xl"></div>
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Modern Farming" class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl"></div>
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

    <!-- Enhanced Features Section -->
    <div class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #16a34a 2px, transparent 2px), radial-gradient(circle at 75% 75%, #16a34a 2px, transparent 2px); background-size: 50px 50px;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                    Why Choose AgrisSol?
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Excellence in Every Field</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We combine traditional farming wisdom with modern technology to deliver exceptional results that transform agricultural landscapes across Tunisia.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-green-700 transition-colors duration-300">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">Cutting-edge agricultural technologies tailored for Tunisian climate and soil conditions, ensuring optimal performance and sustainability.</p>
                    <div class="mt-6 flex items-center text-green-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>

                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-blue-200">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-700 transition-colors duration-300">Sustainability</h3>
                    <p class="text-gray-600 leading-relaxed">Environmentally friendly practices that ensure long-term agricultural viability while preserving Tunisia's precious natural resources.</p>
                    <div class="mt-6 flex items-center text-blue-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>

                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 hover:border-purple-200">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-purple-700 transition-colors duration-300">Expert Team</h3>
                    <p class="text-gray-600 leading-relaxed">Experienced agricultural specialists dedicated to your success, bringing decades of combined expertise to every project.</p>
                    <div class="mt-6 flex items-center text-purple-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced CTA Section -->
    <div class="relative bg-gradient-to-r from-green-600 via-green-700 to-green-800 text-white py-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 80%, #ffffff 1px, transparent 1px), radial-gradient(circle at 80% 20%, #ffffff 1px, transparent 1px), radial-gradient(circle at 40% 40%, #ffffff 1px, transparent 1px); background-size: 100px 100px;"></div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-10 left-10 w-4 h-4 bg-yellow-300/20 rounded-full animate-float"></div>
            <div class="absolute top-20 right-20 w-3 h-3 bg-blue-300/20 rounded-full animate-float-delayed"></div>
            <div class="absolute bottom-20 left-1/4 w-5 h-5 bg-green-300/20 rounded-full animate-float"></div>
            <div class="absolute bottom-10 right-1/3 w-2 h-2 bg-white/20 rounded-full animate-float-delayed"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-8 border border-white/20">
                    <svg class="w-5 h-5 mr-2 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Start Your Agricultural Journey Today
                </div>

                <h2 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    Ready to Transform Your <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">Agriculture?</span>
                </h2>
                <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto leading-relaxed opacity-90">
                    Join thousands of Tunisian farmers who have revolutionized their operations with AgrisSol's innovative solutions. Your success story starts here.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('contact') }}" class="group bg-white text-green-700 px-10 py-5 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all duration-300 shadow-2xl hover:shadow-white/25 transform hover:scale-105 hover:-translate-y-1">
                        <span class="flex items-center justify-center">
                            Get Started Today
                            <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>

                    <a href="{{ route('portfolio') }}" class="group border-2 border-white/80 text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white hover:text-green-700 transition-all duration-300 backdrop-blur-sm shadow-xl hover:shadow-white/25 transform hover:scale-105 hover:-translate-y-1">
                        <span class="flex items-center justify-center">
                            View Our Success Stories
                            <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-16 pt-12 border-t border-white/20">
                    <p class="text-sm opacity-75 mb-6">Trusted by farmers across Tunisia</p>
                    <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm">4.9/5 Rating</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm">500+ Projects</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                            <span class="text-sm">40% Cost Savings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
