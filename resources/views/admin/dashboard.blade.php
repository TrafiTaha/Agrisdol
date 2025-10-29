<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar Navigation -->
        <div class="w-64 bg-white shadow-lg">
            <div class="flex flex-col h-full">
                <!-- Logo/Brand -->
                <div class="flex items-center justify-center h-16 bg-gradient-to-r from-green-500 to-blue-500">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span class="text-white font-bold text-lg">AgrisSol Admin</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="flex-1 px-4 py-6 space-y-2">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 bg-gray-100 rounded-lg hover:bg-green-100 hover:text-green-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-100 hover:text-green-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                        Users
                    </a>

                    <a href="{{ route('admin.contacts') }}" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-100 hover:text-green-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contacts
                    </a>

                    <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-green-100 hover:text-green-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        View Website
                    </a>
                </nav>

                <!-- User Info -->
                <div class="p-4 border-t border-gray-200">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-medium">{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm border-b border-gray-200 px-8 py-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-gray-900">Dashboard Overview</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">{{ now()->format('l, F j, Y') }}</span>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="flex-1 p-8">
                <!-- Welcome Section -->
                <div class="bg-gradient-to-r from-green-500 to-blue-500 rounded-xl p-6 text-white mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}!</h2>
                            <p class="text-green-100">Here's what's happening with your platform today.</p>
                        </div>
                        <div class="hidden md:block">
                            <svg class="w-16 h-16 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Users</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $totalUsers }}</p>
                                <p class="text-xs text-green-600 mt-1">+12% from last month</p>
                            </div>
                            <div class="p-3 bg-green-100 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Contact Messages</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $totalContacts }}</p>
                                <p class="text-xs text-blue-600 mt-1">+8% from last month</p>
                            </div>
                            <div class="p-3 bg-blue-100 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Active Projects</p>
                                <p class="text-3xl font-bold text-gray-900">6</p>
                                <p class="text-xs text-yellow-600 mt-1">On track</p>
                            </div>
                            <div class="p-3 bg-yellow-100 rounded-full">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">System Health</p>
                                <p class="text-3xl font-bold text-gray-900">98%</p>
                                <p class="text-xs text-green-600 mt-1">All systems operational</p>
                            </div>
                            <div class="p-3 bg-green-100 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts and Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Recent Contacts -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Contact Messages</h3>
                            <a href="{{ route('admin.contacts') }}" class="text-sm text-green-600 hover:text-green-500 font-medium">View all</a>
                        </div>

                        <div class="space-y-4">
                            @forelse($recentContacts as $contact)
                            <div class="flex items-start space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-medium">{{ substr($contact->name, 0, 1) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-gray-900 truncate">{{ $contact->name }}</p>
                                        <p class="text-xs text-gray-500">{{ $contact->created_at->diffForHumans() }}</p>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">{{ $contact->email }}</p>
                                    <p class="text-sm font-medium text-gray-700 mt-1">{{ $contact->subject }}</p>
                                    <p class="text-sm text-gray-600 mt-1 line-clamp-2">{{ Str::limit($contact->message, 80) }}</p>
                                </div>
                            </div>
                            @empty
                            <p class="text-gray-500 text-center py-8">No contact messages yet.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h3>
                        <div class="grid grid-cols-1 gap-4">
                            <a href="{{ route('admin.contacts') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-green-300 transition-all duration-200 group">
                                <div class="p-2 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">Manage Contacts</p>
                                    <p class="text-xs text-gray-500">View and respond to messages</p>
                                </div>
                            </a>

                            <a href="{{ route('admin.users') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-green-300 transition-all duration-200 group">
                                <div class="p-2 bg-green-100 rounded-lg group-hover:bg-green-200 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">Manage Users</p>
                                    <p class="text-xs text-gray-500">Add, edit, or remove users</p>
                                </div>
                            </a>

                            <a href="{{ route('home') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-green-300 transition-all duration-200 group">
                                <div class="p-2 bg-purple-100 rounded-lg group-hover:bg-purple-200 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">View Website</p>
                                    <p class="text-xs text-gray-500">Check the public site</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
