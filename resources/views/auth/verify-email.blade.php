<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
        </div>
        <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-3">Verify Your Email</h2>
        <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-md mx-auto">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-6 p-4 bg-green-50 border-2 border-green-200 rounded-xl">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <p class="font-medium text-sm text-green-800">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </p>
            </div>
        </div>
    @endif

    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
            @csrf
            <x-primary-button class="w-full sm:w-auto">
                {{ __('Resend Verification Email') }}
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm text-gray-600 hover:text-gray-900 font-semibold transition-colors duration-300 hover:underline focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 rounded-md px-2 py-1">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
