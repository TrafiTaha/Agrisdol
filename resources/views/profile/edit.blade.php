<x-app-layout>
    <div class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden min-h-screen">
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

        <div class="relative py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-center mb-8">
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium text-white animate-fade-in">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            PROFILE SETTINGS
                        </span>
                    </div>

                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 animate-fade-in bg-gradient-to-r from-white via-green-100 to-white bg-clip-text text-transparent leading-tight">
                        Manage Your
                        <span class="block text-5xl md:text-6xl lg:text-7xl font-bold bg-gradient-to-r from-green-200 to-blue-200 bg-clip-text text-transparent">
                            Profile
                        </span>
                    </h1>
                </div>

                <div class="space-y-6">
                    <div class="bg-white/95 backdrop-blur-lg shadow-2xl sm:rounded-3xl border border-white/20 overflow-hidden">
                        <div class="p-4 sm:p-8">
                            <div class="max-w-xl mx-auto">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/95 backdrop-blur-lg shadow-2xl sm:rounded-3xl border border-white/20 overflow-hidden">
                        <div class="p-4 sm:p-8">
                            <div class="max-w-xl mx-auto">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/95 backdrop-blur-lg shadow-2xl sm:rounded-3xl border border-white/20 overflow-hidden">
                        <div class="p-4 sm:p-8">
                            <div class="max-w-xl mx-auto">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
