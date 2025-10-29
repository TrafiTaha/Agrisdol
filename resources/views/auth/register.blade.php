<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-3">Join AgrisSol</h2>
        <p class="text-gray-600 text-base md:text-lg">Create your account and start your agricultural journey</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div class="group">
            <x-input-label for="name" :value="__('Name')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <x-text-input id="name" class="pl-12" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Your full name" />
            </div>
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="group">
            <x-input-label for="email" :value="__('Email')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                    </svg>
                </div>
                <x-text-input id="email" class="pl-12" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="your@email.com" />
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
                <x-text-input id="password" class="pl-12" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <x-text-input id="password_confirmation" class="pl-12" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <a class="text-sm text-green-600 hover:text-green-700 font-semibold transition-colors duration-300 hover:underline" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="w-full sm:w-auto">
                {{ __('Create Account') }}
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
                <span class="px-4 bg-white text-gray-500 font-medium">Already have an account?</span>
            </div>
        </div>
    </div>

    <!-- Sign In Link -->
    <div class="text-center">
        <a href="{{ route('login') }}" class="group inline-flex items-center justify-center w-full bg-white border-2 border-gray-300 text-gray-700 py-3 px-6 rounded-xl font-semibold hover:bg-gray-50 hover:border-green-500 hover:text-green-700 transition-all duration-300 shadow-sm hover:shadow-md">
            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Sign In Instead
        </a>
    </div>
</x-guest-layout>
