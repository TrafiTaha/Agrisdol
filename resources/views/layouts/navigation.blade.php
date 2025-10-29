<nav x-data="{ open: false, searchOpen: false, chatOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-b border-gray-200/50 shadow-xl">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Enhanced Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="group relative flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl group-hover:scale-110 transition-all duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-black bg-gradient-to-r from-green-600 via-green-700 to-blue-600 bg-clip-text text-transparent">
                            AgrisSol
                        </span>
                    </a>
                </div>

                <!-- Enhanced Navigation Links -->
                <div class="hidden lg:flex lg:space-x-1 lg:ms-10">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="group relative px-4 py-2">
                        <span class="relative z-10 font-semibold">{{ __('Home') }}</span>
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="group relative px-4 py-2">
                        <span class="relative z-10 font-semibold">{{ __('About') }}</span>
                    </x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')" class="group relative px-4 py-2">
                        <span class="relative z-10 font-semibold">{{ __('Services') }}</span>
                    </x-nav-link>
                    <x-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" class="group relative px-4 py-2">
                        <span class="relative z-10 font-semibold">{{ __('Portfolio') }}</span>
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="group relative px-4 py-2">
                        <span class="relative z-10 font-semibold">{{ __('Contact') }}</span>
                    </x-nav-link>
                </div>
            </div>

            <!-- Right Side: Search, AI Chat, Settings -->
            <div class="hidden sm:flex sm:items-center sm:space-x-3">
                <!-- Search Button -->
                <button @click="searchOpen = !searchOpen" class="p-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-green-600 transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <!-- AI Chat Button -->
                <button @click="chatOpen = !chatOpen" class="p-2.5 rounded-xl bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600 text-white transition-all duration-300 shadow-lg hover:shadow-xl group relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>
                </button>

                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2.5 border-2 border-gray-200 text-sm leading-4 font-semibold rounded-xl text-gray-700 bg-white hover:bg-gray-50 hover:border-green-300 focus:outline-none transition-all duration-300 shadow-sm hover:shadow-md">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center shadow-md">
                                    <span class="text-white font-bold text-sm">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                </div>
                                <span class="hidden md:block">{{ Auth::user()->name }}</span>
                            </div>

                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4 transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @if(auth()->user()->email === 'admin@agrisol.tn')
                            <x-dropdown-link :href="route('admin.dashboard')" class="group">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    {{ __('Admin Dashboard') }}
                                </span>
                            </x-dropdown-link>
                        @else
                            <x-dropdown-link :href="route('dashboard')" class="group">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                                    </svg>
                                    {{ __('Dashboard') }}
                                </span>
                            </x-dropdown-link>
                        @endif
                        <x-dropdown-link :href="route('profile.edit')" class="group">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                {{ __('Profile') }}
                            </span>
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="group">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    {{ __('Log Out') }}
                                </span>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-green-600 font-semibold transition-colors duration-300 px-4 py-2 rounded-xl hover:bg-gray-100">Login</a>
                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-green-500 to-blue-500 text-white px-6 py-2.5 rounded-xl font-semibold hover:from-green-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Sign Up
                    </a>
                </div>
                @endauth
            </div>

            <!-- Enhanced Hamburger -->
            <div class="flex items-center space-x-2 sm:hidden">
                <!-- Mobile Search -->
                <button @click="searchOpen = !searchOpen" class="p-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <!-- Mobile AI Chat -->
                <button @click="chatOpen = !chatOpen" class="p-2 rounded-xl bg-gradient-to-r from-green-500 to-blue-500 text-white relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-red-500 rounded-full animate-pulse"></span>
                </button>

                <!-- Mobile Menu -->
                <button @click="open = ! open" class="p-2 rounded-xl text-gray-700 bg-white border-2 border-gray-200 hover:bg-gray-50 hover:border-green-300 transition-all duration-300">
                    <svg class="h-6 w-6 transition-transform duration-300" :class="{'rotate-90': open}" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Enhanced Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white/95 backdrop-blur-md border-t border-white/20 shadow-lg">
        <div class="pt-4 pb-6 space-y-2 px-4">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="group">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    {{ __('Home') }}
                </span>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" class="group">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ __('About') }}
                </span>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')" class="group">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    {{ __('Services') }}
                </span>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" class="group">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    {{ __('Portfolio') }}
                </span>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="group">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    {{ __('Contact') }}
                </span>
            </x-responsive-nav-link>
        </div>

        <!-- Enhanced Responsive Settings Options -->
        @auth
        <div class="pt-6 pb-4 border-t border-white/20 bg-gradient-to-r from-green-50/50 to-blue-50/50">
            <div class="px-4">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-gray-600">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-4 space-y-1 px-4">
                @if(auth()->user()->email === 'admin@agrisol.tn')
                    <x-responsive-nav-link :href="route('admin.dashboard')" class="group">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            {{ __('Admin Dashboard') }}
                        </span>
                    </x-responsive-nav-link>
                @else
                    <x-responsive-nav-link :href="route('dashboard')" class="group">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                            </svg>
                            {{ __('Dashboard') }}
                        </span>
                    </x-responsive-nav-link>
                @endif
                <x-responsive-nav-link :href="route('profile.edit')" class="group">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        {{ __('Profile') }}
                    </span>
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="group">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            {{ __('Log Out') }}
                        </span>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @else
        <div class="pt-6 pb-4 border-t border-white/20 bg-gradient-to-r from-green-50/50 to-blue-50/50">
            <div class="px-4 space-y-3">
                <a href="{{ route('login') }}" class="block w-full text-center text-gray-700 hover:text-green-600 font-medium py-2 px-4 rounded-lg hover:bg-white/50 transition-all duration-300">
                    Login
                </a>
                <a href="{{ route('register') }}" class="block w-full text-center bg-gradient-to-r from-green-500 to-blue-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-green-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    Sign Up
                </a>
            </div>
        </div>
        @endauth
    </div>

    <!-- Search Modal -->
    <div x-show="searchOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click.away="searchOpen = false"
         class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-start justify-center pt-20"
         style="display: none;">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl mx-4 overflow-hidden"
             @click.stop>
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold text-gray-900">Search AgrisSol</h3>
                    <button @click="searchOpen = false" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('search') }}" method="GET" class="relative">
                    <input type="text"
                           name="q"
                           placeholder="Search for services, solutions, or information..."
                           class="w-full px-5 py-4 pl-12 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 outline-none transition-all duration-300"
                           autofocus>
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>

                <div class="mt-6">
                    <p class="text-sm font-semibold text-gray-500 mb-3">Quick Links</p>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="{{ route('services') }}" class="p-3 rounded-lg hover:bg-green-50 transition-colors group">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-700 group-hover:text-green-600">Services</span>
                            </div>
                        </a>
                        <a href="{{ route('portfolio') }}" class="p-3 rounded-lg hover:bg-blue-50 transition-colors group">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-700 group-hover:text-blue-600">Portfolio</span>
                            </div>
                        </a>
                        <a href="{{ route('about') }}" class="p-3 rounded-lg hover:bg-purple-50 transition-colors group">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-700 group-hover:text-purple-600">About Us</span>
                            </div>
                        </a>
                        <a href="{{ route('contact') }}" class="p-3 rounded-lg hover:bg-orange-50 transition-colors group">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-700 group-hover:text-orange-600">Contact</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AI Chat Widget -->
    <div x-show="chatOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-4"
         @click.away="chatOpen = false"
         class="fixed bottom-6 right-6 z-50 w-96 max-w-[calc(100vw-3rem)]"
         style="display: none;">
        <div class="bg-white rounded-2xl shadow-2xl border-2 border-gray-200 overflow-hidden">
            <!-- Chat Header -->
            <div class="bg-gradient-to-r from-green-500 to-blue-600 p-4 text-white">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">AgrisSol AI Assistant</h3>
                            <p class="text-xs text-green-100">Here to help you 24/7</p>
                        </div>
                    </div>
                    <button @click="chatOpen = false" class="p-1 hover:bg-white/20 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Chat Messages -->
            <div class="h-96 overflow-y-auto p-4 bg-gray-50 space-y-4" id="chatMessages">
                <!-- AI Welcome Message -->
                <div class="flex items-start space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div class="bg-white rounded-2xl rounded-tl-none p-4 shadow-sm max-w-[80%]">
                        <p class="text-sm text-gray-800">👋 Hello! I'm your AgrisSol AI assistant. I can help you with:</p>
                        <ul class="mt-2 space-y-1 text-sm text-gray-700">
                            <li>• Finding the right agricultural solutions</li>
                            <li>• Information about our services</li>
                            <li>• Navigating the website</li>
                            <li>• Answering your questions</li>
                        </ul>
                        <p class="mt-3 text-sm text-gray-800">How can I assist you today?</p>
                    </div>
                </div>

                <!-- Quick Action Buttons -->
                <div class="flex flex-wrap gap-2 px-2">
                    <button onclick="sendQuickMessage('Tell me about your services')" class="px-4 py-2 bg-white border-2 border-green-200 text-green-700 rounded-full text-sm font-medium hover:bg-green-50 hover:border-green-300 transition-all">
                        Our Services
                    </button>
                    <button onclick="sendQuickMessage('How can I contact you?')" class="px-4 py-2 bg-white border-2 border-blue-200 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-50 hover:border-blue-300 transition-all">
                        Contact Info
                    </button>
                    <button onclick="sendQuickMessage('Show me your portfolio')" class="px-4 py-2 bg-white border-2 border-purple-200 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-50 hover:border-purple-300 transition-all">
                        Portfolio
                    </button>
                </div>
            </div>

            <!-- Chat Input -->
            <div class="p-4 bg-white border-t-2 border-gray-100">
                <form onsubmit="sendMessage(event)" class="flex items-center space-x-2">
                    <input type="text"
                           id="chatInput"
                           placeholder="Type your message..."
                           class="flex-1 px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 outline-none transition-all text-sm">
                    <button type="submit" class="p-3 bg-gradient-to-r from-green-500 to-blue-600 text-white rounded-xl hover:from-green-600 hover:to-blue-700 transition-all shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
// AI Chat Functionality
const aiResponses = {
    services: "We offer comprehensive agricultural solutions including:\n\n🌱 Precision Agriculture\n🚜 Smart Irrigation Systems\n📊 Crop Monitoring & Analytics\n🌾 Soil Health Management\n💧 Water Resource Optimization\n\nWould you like to know more about any specific service?",
    contact: "You can reach us at:\n\n📧 Email: contact@agrisol.tn\n📞 Phone: +216 76 123 456\n📍 Address: Sidi Bouzid, Tunisia\n\nOr visit our Contact page to send us a message directly!",
    portfolio: "We've successfully completed numerous projects across Tunisia! Visit our Portfolio page to see:\n\n✅ Case studies\n✅ Client testimonials\n✅ Project outcomes\n✅ Success stories\n\nClick the Portfolio link in the navigation to explore!",
    about: "AgrisSol is Tunisia's leading agricultural technology company. We're dedicated to:\n\n🎯 Modernizing farming practices\n🌍 Promoting sustainable agriculture\n💡 Providing innovative solutions\n🤝 Supporting local farmers\n\nLearn more on our About page!",
    default: "I'm here to help! You can ask me about:\n\n• Our services and solutions\n• How to contact us\n• Our portfolio and projects\n• Company information\n• Navigating the website\n\nWhat would you like to know?"
};

function sendMessage(event) {
    event.preventDefault();
    const input = document.getElementById('chatInput');
    const message = input.value.trim();

    if (!message) return;

    // Add user message
    addMessage(message, 'user');
    input.value = '';

    // Simulate AI thinking
    setTimeout(() => {
        const response = getAIResponse(message);
        addMessage(response, 'ai');
    }, 1000);
}

function sendQuickMessage(message) {
    addMessage(message, 'user');
    setTimeout(() => {
        const response = getAIResponse(message);
        addMessage(response, 'ai');
    }, 1000);
}

function getAIResponse(message) {
    const lowerMessage = message.toLowerCase();

    if (lowerMessage.includes('service') || lowerMessage.includes('offer') || lowerMessage.includes('provide')) {
        return aiResponses.services;
    } else if (lowerMessage.includes('contact') || lowerMessage.includes('reach') || lowerMessage.includes('phone') || lowerMessage.includes('email')) {
        return aiResponses.contact;
    } else if (lowerMessage.includes('portfolio') || lowerMessage.includes('project') || lowerMessage.includes('work')) {
        return aiResponses.portfolio;
    } else if (lowerMessage.includes('about') || lowerMessage.includes('who') || lowerMessage.includes('company')) {
        return aiResponses.about;
    } else {
        return aiResponses.default;
    }
}

function addMessage(text, sender) {
    const messagesContainer = document.getElementById('chatMessages');
    const messageDiv = document.createElement('div');

    if (sender === 'user') {
        messageDiv.className = 'flex items-start space-x-2 justify-end';
        messageDiv.innerHTML = `
            <div class="bg-gradient-to-r from-green-500 to-blue-600 text-white rounded-2xl rounded-tr-none p-4 shadow-sm max-w-[80%]">
                <p class="text-sm">${text}</p>
            </div>
            <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
        `;
    } else {
        messageDiv.className = 'flex items-start space-x-2';
        messageDiv.innerHTML = `
            <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
            </div>
            <div class="bg-white rounded-2xl rounded-tl-none p-4 shadow-sm max-w-[80%]">
                <p class="text-sm text-gray-800 whitespace-pre-line">${text}</p>
            </div>
        `;
    }

    messagesContainer.appendChild(messageDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}
</script>
