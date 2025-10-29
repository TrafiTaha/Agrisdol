<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-white border-2 border-gray-300 rounded-xl font-semibold text-sm text-gray-700 tracking-wide shadow-sm hover:bg-gray-50 hover:border-gray-400 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-gray-300/50 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 active:scale-95 transition-all duration-300']) }}>
    {{ $slot }}
</button>
