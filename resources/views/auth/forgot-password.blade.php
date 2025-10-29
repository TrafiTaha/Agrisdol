<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-3">Forgot Password?</h2>
        <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-md mx-auto">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
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
                <x-text-input id="email" class="pl-12" type="email" name="email" :value="old('email')" required autofocus placeholder="your@email.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <a href="{{ route('login') }}" class="text-sm text-green-600 hover:text-green-700 font-semibold transition-colors duration-300 hover:underline">
                {{ __('Back to Login') }}
            </a>

            <x-primary-button class="w-full sm:w-auto">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
