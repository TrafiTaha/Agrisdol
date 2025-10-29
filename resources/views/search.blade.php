<x-app-layout>
    <div class="py-24 px-4 sm:px-6 lg:px-8 min-h-screen bg-gradient-to-br from-gray-50 to-green-50/30">
        <div class="max-w-4xl mx-auto">
            <!-- Search Header -->
            <div class="mb-8 animate-fade-in">
                <a href="{{ url()->previous() }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold mb-4 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back
                </a>
                
                <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    Search Results
                </h1>
                <p class="text-xl text-gray-600">
                    Found <span class="font-bold text-green-600">{{ $resultsCount }}</span> result{{ $resultsCount !== 1 ? 's' : '' }} for "<span class="font-semibold">{{ $query }}</span>"
                </p>
            </div>

            <!-- Search Again -->
            <div class="mb-8 card-glass p-6 animate-fade-in" style="animation-delay: 0.1s;">
                <form action="{{ route('search') }}" method="GET" class="relative">
                    <input type="text" 
                           name="q" 
                           value="{{ $query }}"
                           placeholder="Search for services, solutions, or information..." 
                           class="w-full px-5 py-4 pl-12 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 outline-none transition-all duration-300">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 px-6 py-2 bg-gradient-to-r from-green-500 to-blue-600 text-white rounded-lg font-semibold hover:from-green-600 hover:to-blue-700 transition-all shadow-lg hover:shadow-xl">
                        Search
                    </button>
                </form>
            </div>

            <!-- Results -->
            @if($resultsCount > 0)
                <div class="space-y-4">
                    @foreach($results as $index => $result)
                        <div class="card-modern p-6 hover:shadow-xl transition-all duration-300 animate-fade-in-up" style="animation-delay: {{ 0.1 + ($index * 0.05) }}s;">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        @if($result['category'] === 'service')
                                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Service</span>
                                        @else
                                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Page</span>
                                        @endif
                                    </div>
                                    
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">
                                        {{ $result['title'] }}
                                    </h3>
                                    
                                    <p class="text-gray-600 mb-4 leading-relaxed">
                                        {{ $result['description'] }}
                                    </p>
                                    
                                    <a href="{{ $result['url'] }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold transition-colors group">
                                        Visit Page
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </a>
                                </div>
                                
                                <div class="ml-4">
                                    @if($result['category'] === 'service')
                                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                            </svg>
                                        </div>
                                    @else
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="card-glass p-12 text-center animate-fade-in">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">No Results Found</h3>
                    <p class="text-gray-600 mb-6 max-w-md mx-auto">
                        We couldn't find any results for "{{ $query }}". Try searching with different keywords or browse our pages below.
                    </p>
                    
                    <div class="flex flex-wrap justify-center gap-3">
                        <a href="{{ route('services') }}" class="px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl font-semibold hover:from-green-600 hover:to-green-700 transition-all shadow-lg hover:shadow-xl">
                            View Services
                        </a>
                        <a href="{{ route('portfolio') }}" class="px-6 py-3 bg-white border-2 border-gray-300 text-gray-700 rounded-xl font-semibold hover:border-green-500 hover:text-green-700 transition-all">
                            View Portfolio
                        </a>
                        <a href="{{ route('contact') }}" class="px-6 py-3 bg-white border-2 border-gray-300 text-gray-700 rounded-xl font-semibold hover:border-blue-500 hover:text-blue-700 transition-all">
                            Contact Us
                        </a>
                    </div>
                </div>
            @endif

            <!-- Popular Searches -->
            <div class="mt-12 card-glass p-6 animate-fade-in" style="animation-delay: 0.3s;">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Popular Searches</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('search') }}?q=precision+agriculture" class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-700 rounded-full text-sm font-medium hover:border-green-500 hover:text-green-700 transition-all">
                        Precision Agriculture
                    </a>
                    <a href="{{ route('search') }}?q=irrigation" class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-700 rounded-full text-sm font-medium hover:border-green-500 hover:text-green-700 transition-all">
                        Irrigation
                    </a>
                    <a href="{{ route('search') }}?q=crop+monitoring" class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-700 rounded-full text-sm font-medium hover:border-green-500 hover:text-green-700 transition-all">
                        Crop Monitoring
                    </a>
                    <a href="{{ route('search') }}?q=soil+health" class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-700 rounded-full text-sm font-medium hover:border-green-500 hover:text-green-700 transition-all">
                        Soil Health
                    </a>
                    <a href="{{ route('search') }}?q=contact" class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-700 rounded-full text-sm font-medium hover:border-green-500 hover:text-green-700 transition-all">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

