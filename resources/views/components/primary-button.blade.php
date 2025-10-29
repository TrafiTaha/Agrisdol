<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 border border-transparent rounded-xl font-semibold text-sm text-white tracking-wide shadow-lg hover:shadow-xl transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-500/50 active:scale-95 transition-all duration-300']) }}>
    {{ $slot }}
</button>
