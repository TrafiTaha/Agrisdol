@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full px-4 py-3 border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-500/20 rounded-xl shadow-sm hover:border-gray-300 transition-all duration-300 outline-none disabled:bg-gray-50 disabled:cursor-not-allowed']) }}>
