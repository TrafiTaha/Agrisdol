<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden min-h-screen flex items-center">
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

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium text-white animate-fade-in">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        GET IN TOUCH
                    </span>
                </div>

                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 animate-fade-in bg-gradient-to-r from-white via-green-100 to-white bg-clip-text text-transparent leading-tight">
                    Contact
                    <span class="block text-5xl md:text-6xl lg:text-7xl font-bold bg-gradient-to-r from-green-200 to-blue-200 bg-clip-text text-transparent">
                        Our Experts
                    </span>
                </h1>

                <p class="text-xl md:text-2xl lg:text-3xl mb-12 max-w-5xl mx-auto opacity-90 leading-relaxed font-light animate-fade-in" style="animation-delay: 0.3s;">
                    Ready to transform your agricultural operations? Contact our experts today to discuss how AgrisSol can help you achieve your farming goals.
                </p>

                <!-- Scroll indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="py-24 bg-gradient-to-br from-slate-50 via-white to-blue-50/30 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-green-400/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        </div>

        <div class="absolute inset-0 pattern-dots opacity-20"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <!-- Contact Form -->
                <div class="card-glass p-10 animate-fade-in-up">
                    <div class="mb-8">
                        <h2 class="text-3xl font-black text-gray-900 mb-3">Send us a Message</h2>
                        <p class="text-gray-600">Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>

                    @if(session('success'))
                        <div class="bg-green-50 border-2 border-green-400 text-green-700 px-6 py-4 rounded-xl mb-6 flex items-start animate-fade-in">
                            <svg class="w-6 h-6 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="font-semibold">Success!</p>
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="group">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                       class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 transition-all duration-300 outline-none @error('name') border-red-500 @enderror"
                                       placeholder="John Doe"
                                       required>
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="group">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                       class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 transition-all duration-300 outline-none @error('email') border-red-500 @enderror"
                                       placeholder="john@example.com"
                                       required>
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="group">
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-green-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                       class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 transition-all duration-300 outline-none @error('subject') border-red-500 @enderror"
                                       placeholder="How can we help you?"
                                       required>
                            </div>
                            @error('subject')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="group">
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="6"
                                      class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-500/20 transition-all duration-300 outline-none resize-none @error('message') border-red-500 @enderror"
                                      placeholder="Tell us more about your needs..."
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit" class="group w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white py-4 px-6 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transform hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center">
                            <span>Send Message</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="card-glass p-8">
                        <h2 class="text-3xl font-black text-gray-900 mb-3">Contact Information</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Reach out to us through any of the following channels. Our team is ready to assist you with your agricultural needs.
                        </p>

                        <div class="space-y-6">
                            <!-- Office Address -->
                            <div class="group flex items-start space-x-4 p-4 rounded-xl hover:bg-green-50/50 transition-all duration-300">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Office Address</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        456 Farm Road<br>
                                        Sidi Bouzid, Tunisia 9100<br>
                                        Central Tunisia
                                    </p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="group flex items-start space-x-4 p-4 rounded-xl hover:bg-blue-50/50 transition-all duration-300">
                                <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Phone</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        <a href="tel:+21671123456" class="hover:text-blue-600 transition-colors duration-300">+216 71 123 456</a><br>
                                        <a href="tel:+21671123457" class="hover:text-blue-600 transition-colors duration-300">+216 71 123 457</a> (Support)
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="group flex items-start space-x-4 p-4 rounded-xl hover:bg-purple-50/50 transition-all duration-300">
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        <a href="mailto:info@agrisol.tn" class="hover:text-purple-600 transition-colors duration-300">info@agrisol.tn</a><br>
                                        <a href="mailto:support@agrisol.tn" class="hover:text-purple-600 transition-colors duration-300">support@agrisol.tn</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Business Hours -->
                            <div class="group flex items-start space-x-4 p-4 rounded-xl hover:bg-yellow-50/50 transition-all duration-300">
                                <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Business Hours</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        <span class="font-medium">Monday - Friday:</span> 8:00 AM - 6:00 PM<br>
                                        <span class="font-medium">Saturday:</span> 9:00 AM - 4:00 PM<br>
                                        <span class="font-medium">Sunday:</span> Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="card-glass p-6 text-center group hover:shadow-xl transition-all duration-300">
                            <div class="text-3xl font-black text-green-600 mb-2 group-hover:scale-110 transition-transform duration-300">24/7</div>
                            <div class="text-sm text-gray-600 font-medium">Support Available</div>
                        </div>
                        <div class="card-glass p-6 text-center group hover:shadow-xl transition-all duration-300">
                            <div class="text-3xl font-black text-blue-600 mb-2 group-hover:scale-110 transition-transform duration-300">&lt;2h</div>
                            <div class="text-sm text-gray-600 font-medium">Response Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="py-24 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-green-400/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-400/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 animate-fade-in">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-r from-green-100/80 to-blue-100/80 backdrop-blur-sm border border-white/50 shadow-lg mb-6">
                    <svg class="w-5 h-5 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700 tracking-wide">FIND US</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    Visit Our <span class="text-gradient">Office</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Located in the heart of Sidi Bouzid, easily accessible for consultations and meetings.
                </p>
            </div>

            <div class="h-96 md:h-[500px] rounded-3xl overflow-hidden shadow-2xl border-4 border-white animate-scale-in" style="animation-delay: 0.2s;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828!2d9.484!3d35.038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f9b8c8c8c8c8c%3A0x8c8c8c8c8c8c8c8c!2sSidi+Bouzid%2C+Tunisia!5e0!3m2!1sen!2s!4v1690000000000!5m2!1sen!2s"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</x-app-layout>
