<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Welcome Section -->
            <div class="relative bg-gradient-to-r from-green-500 via-green-600 to-blue-600 rounded-3xl p-8 md:p-10 text-white mb-10 overflow-hidden shadow-2xl animate-fade-in">
                <!-- Animated Background Elements -->
                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
                    <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0">
                        <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4">
                            <span class="w-2 h-2 bg-green-300 rounded-full mr-2 animate-pulse"></span>
                            Dashboard
                        </div>
                        <h2 class="text-3xl md:text-4xl font-black mb-3">
                            Welcome back, <span class="text-yellow-300">{{ Auth::user()->name }}</span>!
                        </h2>
                        <p class="text-green-100 text-lg">Your gateway to modern agricultural solutions in Tunisia.</p>
                    </div>
                    <div class="hidden md:block">
                        <div class="relative">
                            <div class="absolute inset-0 bg-white/20 rounded-full blur-2xl animate-pulse"></div>
                            <svg class="relative w-24 h-24 text-white/30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                <div class="group card-modern p-6 animate-fade-in-up">
                    <div class="flex items-start mb-6">
                        <div class="p-4 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">View Services</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Explore our comprehensive agricultural solutions</p>
                        </div>
                    </div>
                    <a href="{{ route('services') }}" class="group/link inline-flex items-center text-green-600 hover:text-green-700 font-semibold transition-colors duration-300">
                        Learn More
                        <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>

                <div class="group card-modern p-6 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="flex items-start mb-6">
                        <div class="p-4 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Portfolio</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">See our successful agricultural projects</p>
                        </div>
                    </div>
                    <a href="{{ route('portfolio') }}" class="group/link inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold transition-colors duration-300">
                        View Portfolio
                        <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>

                <div class="group card-modern p-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="flex items-start mb-6">
                        <div class="p-4 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Contact Us</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Get in touch with our expert team</p>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="group/link inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold transition-colors duration-300">
                        Contact Us
                        <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="card-glass p-8 animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h3 class="text-2xl font-black text-gray-900 mb-1">Recent Activity</h3>
                        <p class="text-gray-600 text-sm">Your latest interactions and updates</p>
                    </div>
                    <div class="hidden sm:block">
                        <span class="inline-flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                            Active
                        </span>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="group flex items-center p-5 border-2 border-gray-100 rounded-2xl hover:border-green-200 hover:bg-green-50/30 transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 flex-1">
                            <p class="text-base font-bold text-gray-900 mb-1">Welcome to AgrisSol!</p>
                            <p class="text-sm text-gray-600">Your account has been successfully created and verified.</p>
                        </div>
                        <div class="ml-4 text-right hidden md:block">
                            <p class="text-sm font-semibold text-gray-900">{{ now()->format('M j, Y') }}</p>
                            <p class="text-xs text-gray-500">{{ now()->format('g:i A') }}</p>
                        </div>
                    </div>

                    <div class="group flex items-center p-5 border-2 border-gray-100 rounded-2xl hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 flex-1">
                            <p class="text-base font-bold text-gray-900 mb-1">Explore Our Services</p>
                            <p class="text-sm text-gray-600">Discover the latest agricultural technologies and innovative solutions.</p>
                        </div>
                        <div class="ml-4 text-right hidden md:block">
                            <p class="text-sm font-semibold text-gray-900">{{ now()->subDays(1)->format('M j, Y') }}</p>
                            <p class="text-xs text-gray-500">{{ now()->subDays(1)->format('g:i A') }}</p>
                        </div>
                    </div>

                    <div class="group flex items-center p-5 border-2 border-gray-100 rounded-2xl hover:border-purple-200 hover:bg-purple-50/30 transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 flex-1">
                            <p class="text-base font-bold text-gray-900 mb-1">Profile Completed</p>
                            <p class="text-sm text-gray-600">Your profile is now complete and ready to use all features.</p>
                        </div>
                        <div class="ml-4 text-right hidden md:block">
                            <p class="text-sm font-semibold text-gray-900">{{ now()->subDays(2)->format('M j, Y') }}</p>
                            <p class="text-xs text-gray-500">{{ now()->subDays(2)->format('g:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
