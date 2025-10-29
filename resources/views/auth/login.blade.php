<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-3">Welcome to AgrisSol</h2>
        <p class="text-gray-600 text-base md:text-lg">Sign in to your account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div class="group">
            <x-input-label for="email" :value="__('Email')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                    </svg>
                </div>
                <x-text-input id="email" class="pl-12" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="your@email.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="group">
            <x-input-label for="password" :value="__('Password')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <x-text-input id="password" class="pl-12" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-2 border-gray-300 text-green-600 focus:ring-4 focus:ring-green-500/20 transition-all duration-300" name="remember">
            <label for="remember_me" class="ml-3 block text-sm font-medium text-gray-700">
                {{ __('Remember me') }}
            </label>
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-green-600 hover:text-green-700 font-semibold transition-colors duration-300 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="w-full sm:w-auto">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Divider -->
    <div class="mt-8 mb-6">
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t-2 border-gray-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white text-gray-500 font-medium">Don't have an account?</span>
            </div>
        </div>
    </div>

    <!-- Sign Up Link -->
    <div class="text-center">
        <a href="{{ route('register') }}" class="group inline-flex items-center justify-center w-full bg-white border-2 border-gray-300 text-gray-700 py-3 px-6 rounded-xl font-semibold hover:bg-gray-50 hover:border-green-500 hover:text-green-700 transition-all duration-300 shadow-sm hover:shadow-md">
            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
            Create New Account
        </a>
    </div>
</x-guest-layout>
