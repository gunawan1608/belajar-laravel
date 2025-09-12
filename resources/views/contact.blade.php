<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- Cinematic Hero Section -->
    <div class="relative min-h-screen -mt-6 -mx-4 sm:-mx-6 lg:-mx-8 flex items-center justify-center overflow-hidden pt-16">
        <!-- Background Layers -->
        <div class="absolute inset-0 bg-gradient-to-br from-black via-red-900/25 to-purple-900/35"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-20 w-56 h-56 bg-red-900/40 rounded-full blur-2xl animate-pulse parallax" data-speed="0.2"></div>
            <div class="absolute bottom-20 right-20 w-72 h-72 bg-purple-900/30 rounded-full blur-xl animate-pulse delay-1000 parallax" data-speed="0.3"></div>
            <div class="absolute top-1/3 right-1/3 w-40 h-40 bg-red-900/25 rounded-full blur-lg animate-float parallax" data-speed="0.4"></div>
            <div class="absolute bottom-1/3 left-1/4 w-32 h-32 bg-purple-900/35 rounded-full blur-xl animate-pulse delay-500 parallax" data-speed="0.1"></div>
        </div>
        
        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-1/4 left-1/5 w-3 h-3 bg-red-400/60 rounded-full animate-float" style="animation-delay: 0s;"></div>
            <div class="absolute top-3/4 right-1/4 w-2 h-2 bg-purple-400/50 rounded-full animate-float" style="animation-delay: 1.5s;"></div>
            <div class="absolute bottom-1/4 left-2/3 w-4 h-4 bg-red-300/40 rounded-full animate-float" style="animation-delay: 3s;"></div>
            <div class="absolute top-1/2 right-1/5 w-1 h-1 bg-purple-300/60 rounded-full animate-float" style="animation-delay: 2s;"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
            <div class="animate-fade-in-down">
                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl font-gothic font-bold text-gray-100 mb-8 text-glow-intense leading-none animate-text-glow">
                    Hubungi Developer
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-300 font-body mb-12 max-w-4xl mx-auto leading-relaxed">
                    "Sebuah pedang hanya sekuat prajurit yang menggunakannya. Mari kita ciptakan sesuatu yang legendaris bersama."
                </p>
                
                <!-- Animated Icons -->
                <div class="flex justify-center space-x-8 mb-12">
                    <div class="text-4xl text-red-400/70 animate-float" style="animation-delay: 0s;">⚔️</div>
                    <div class="text-4xl text-purple-400/70 animate-float" style="animation-delay: 1s;">🌙</div>
                    <div class="text-4xl text-red-400/70 animate-float" style="animation-delay: 2s;">🗡️</div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="flex flex-col items-center text-red-400">
                <span class="text-sm font-body mb-2 animate-pulse">Pilih Jalur Komunikasi</span>
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>
    
    <!-- Contact Cards Grid -->
    <div class="py-16 px-4 sm:px-6 lg:px-8 relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-gray-900/50 to-black/80"></div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-8 mb-16">
                
                <!-- Email Card -->
                <div class="neon-card bg-gray-900/40 backdrop-blur-sm border border-red-900/30 rounded-2xl p-6 lg:p-8 hover-neon-red group scroll-fade-in h-full flex flex-col">
                    <div class="text-center flex-1 flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 lg:w-20 lg:h-20 mx-auto mb-4 lg:mb-6 bg-red-900/30 border border-red-900/50 rounded-full flex items-center justify-center neon-glow-red group-hover:neon-pulse">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10 text-red-400 group-hover:text-red-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-gothic font-bold text-gray-100 mb-3 text-shadow-red group-hover:text-glow-subtle transition-all duration-300">
                                EMAIL DIGITAL
                            </h3>
                            <p class="text-gray-400 font-body mb-4 lg:mb-6 leading-relaxed text-sm lg:text-base">
                                Kirim pesan Anda melalui email. Saya akan merespons dari kedalaman dunia digital.
                            </p>
                        </div>
                        <a href="mailto:developer@berserkcode.com" 
                           class="inline-flex items-center bg-red-900/80 hover:bg-red-800 text-white px-6 lg:px-8 py-3 lg:py-4 rounded-xl font-body font-medium border border-red-700 hover-dramatic neon-button transition-all duration-500 group text-sm lg:text-base">
                            <svg class="w-4 h-4 lg:w-5 lg:h-5 mr-2 group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Kirim Pesan
                        </a>
                    </div>
                </div>

                <!-- LinkedIn Card -->
                <div class="neon-card bg-gray-900/40 backdrop-blur-sm border border-blue-900/30 rounded-2xl p-6 lg:p-8 hover-neon-blue group scroll-fade-in h-full flex flex-col" style="animation-delay: 0.2s;">
                    <div class="text-center flex-1 flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 lg:w-20 lg:h-20 mx-auto mb-4 lg:mb-6 bg-blue-900/30 border border-blue-900/50 rounded-full flex items-center justify-center neon-glow-blue group-hover:neon-pulse">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10 text-blue-400 group-hover:text-blue-300 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-gothic font-bold text-gray-100 mb-3 text-shadow-red group-hover:text-glow-subtle transition-all duration-300">
                                JARINGAN PROFESIONAL
                            </h3>
                            <p class="text-gray-400 font-body mb-4 lg:mb-6 leading-relaxed text-sm lg:text-base">
                                Terhubung dengan saya di dunia profesional. Mari membangun jaringan yang lebih kuat dari baja.
                            </p>
                        </div>
                        <a href="https://linkedin.com/in/yourprofile" 
                           target="_blank"
                           class="inline-flex items-center bg-blue-900/80 hover:bg-blue-800 text-white px-6 lg:px-8 py-3 lg:py-4 rounded-xl font-body font-medium border border-blue-700 hover-dramatic neon-button transition-all duration-500 group text-sm lg:text-base">
                            <svg class="w-4 h-4 lg:w-5 lg:h-5 mr-2 group-hover:scale-110 transition-transform duration-200" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                            Terhubung
                        </a>
                    </div>
                </div>

                <!-- GitHub Card -->
                <div class="neon-card bg-gray-900/40 backdrop-blur-sm border border-gray-700/30 rounded-2xl p-6 lg:p-8 hover-neon-gray group scroll-fade-in h-full flex flex-col" style="animation-delay: 0.4s;">
                    <div class="text-center flex-1 flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 lg:w-20 lg:h-20 mx-auto mb-4 lg:mb-6 bg-gray-800/50 border border-gray-700/50 rounded-full flex items-center justify-center neon-glow-gray group-hover:neon-pulse">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-gothic font-bold text-gray-100 mb-3 text-shadow-red group-hover:text-glow-subtle transition-all duration-300">
                                REPOSITORI KODE
                            </h3>
                            <p class="text-gray-400 font-body mb-4 lg:mb-6 leading-relaxed text-sm lg:text-base">
                                Jelajahi arsenal kode saya. Setiap repositori menceritakan kisah pertempuran yang telah dimenangkan.
                            </p>
                        </div>
                        <a href="https://github.com/yourusername" 
                           target="_blank"
                           class="inline-flex items-center bg-gray-800/80 hover:bg-gray-700 text-white px-6 lg:px-8 py-3 lg:py-4 rounded-xl font-body font-medium border border-gray-600 hover-dramatic neon-button transition-all duration-500 group text-sm lg:text-base">
                            <svg class="w-4 h-4 lg:w-5 lg:h-5 mr-2 group-hover:scale-110 transition-transform duration-200" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Lihat Kode
                        </a>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div class="neon-card bg-gray-900/40 backdrop-blur-sm border border-purple-900/30 rounded-2xl p-6 lg:p-8 hover-neon-purple group scroll-fade-in h-full flex flex-col" style="animation-delay: 0.6s;">
                    <div class="text-center flex-1 flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 lg:w-20 lg:h-20 mx-auto mb-4 lg:mb-6 bg-purple-900/30 border border-purple-900/50 rounded-full flex items-center justify-center neon-glow-purple group-hover:neon-pulse">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10 text-purple-400 group-hover:text-purple-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-gothic font-bold text-gray-100 mb-3 text-shadow-red group-hover:text-glow-subtle transition-all duration-300">
                                MEDIA SOSIAL
                            </h3>
                            <p class="text-gray-400 font-body mb-4 lg:mb-6 leading-relaxed text-sm lg:text-base">
                                Ikuti perjalanan saya melalui berbagai dunia digital dan tetap update dengan petualangan terbaru saya.
                            </p>
                        </div>
                        <div class="flex justify-center space-x-3 lg:space-x-4">
                            <a href="https://twitter.com/yourusername" 
                               target="_blank"
                               class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-600/20 border border-blue-600/50 rounded-lg flex items-center justify-center hover:bg-blue-600/30 hover:border-blue-500 neon-social transition-all duration-300 group">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6 text-blue-400 group-hover:text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="https://instagram.com/yourusername" 
                               target="_blank"
                               class="w-10 h-10 lg:w-12 lg:h-12 bg-pink-600/20 border border-pink-600/50 rounded-lg flex items-center justify-center hover:bg-pink-600/30 hover:border-pink-500 neon-social transition-all duration-300 group">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6 text-pink-400 group-hover:text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.864 3.708 13.713 3.708 12.416s.49-2.448 1.418-3.323c.875-.875 2.026-1.297 3.323-1.297s2.448.422 3.323 1.297c.928.875 1.418 2.026 1.418 3.323s-.49 2.448-1.418 3.275c-.875.807-2.026 1.297-3.323 1.297zm7.83-9.404c-.49 0-.875-.385-.875-.875s.385-.875.875-.875.875.385.875.875-.385.875-.875.875zm0 0"/>
                                </svg>
                            </a>
                            <a href="https://discord.gg/yourdiscord" 
                               target="_blank"
                               class="w-10 h-10 lg:w-12 lg:h-12 bg-indigo-600/20 border border-indigo-600/50 rounded-lg flex items-center justify-center hover:bg-indigo-600/30 hover:border-indigo-500 neon-social transition-all duration-300 group">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6 text-indigo-400 group-hover:text-indigo-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0002 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quote Section -->
    <div class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-black via-red-900/10 to-purple-900/20 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-64 h-64 bg-red-900/30 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-48 h-48 bg-purple-900/30 rounded-full blur-xl animate-pulse delay-1000"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10 scroll-fade-in">
            <div class="bg-black/40 backdrop-blur-sm border border-red-900/30 rounded-2xl p-12 hover-glow-red">
                <blockquote class="text-2xl md:text-3xl font-gothic font-bold text-gray-100 mb-6 text-shadow-red leading-tight">
                    "Seorang prajurit sejati tidak pernah menyerah, bahkan ketika dikelilingi oleh seribu musuh."
                </blockquote>
                <cite class="text-red-400 font-body text-xl">— Guts, The Black Swordsman</cite>
                <div class="mt-8">
                    <p class="text-lg text-gray-300 font-body max-w-3xl mx-auto leading-relaxed">
                        Siap untuk memulai petualangan digital bersama? Pilih metode komunikasi yang Anda sukai 
                        dan mari kita ciptakan sesuatu yang luar biasa dari kedalaman imajinasi.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Custom Neon Effects CSS -->
    <style>
        /* Neon Glow Effects */
        .neon-glow-red {
            box-shadow: 0 0 20px rgba(239, 68, 68, 0.3);
        }
        
        .neon-glow-blue {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }
        
        .neon-glow-purple {
            box-shadow: 0 0 20px rgba(147, 51, 234, 0.3);
        }
        
        .neon-glow-gray {
            box-shadow: 0 0 20px rgba(156, 163, 175, 0.3);
        }
        
        /* Hover Neon Effects */
        .hover-neon-red:hover {
            box-shadow: 0 0 40px rgba(239, 68, 68, 0.6), 0 0 80px rgba(239, 68, 68, 0.3);
            border-color: rgba(239, 68, 68, 0.8);
        }
        
        .hover-neon-blue:hover {
            box-shadow: 0 0 40px rgba(59, 130, 246, 0.6), 0 0 80px rgba(59, 130, 246, 0.3);
            border-color: rgba(59, 130, 246, 0.8);
        }
        
        .hover-neon-purple:hover {
            box-shadow: 0 0 40px rgba(147, 51, 234, 0.6), 0 0 80px rgba(147, 51, 234, 0.3);
            border-color: rgba(147, 51, 234, 0.8);
        }
        
        .hover-neon-gray:hover {
            box-shadow: 0 0 40px rgba(156, 163, 175, 0.6), 0 0 80px rgba(156, 163, 175, 0.3);
            border-color: rgba(156, 163, 175, 0.8);
        }
        
         * Neon Pulse Animation */
        .neon-pulse {
            animation: neon-pulse 2s infinite;
        }
        
        @keyframes neon-pulse {
            0%, 100% {
                box-shadow: 0 0 20px rgba(239, 68, 68, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(239, 68, 68, 0.8), 0 0 60px rgba(239, 68, 68, 0.4);
            }
        }
        
        /* Neon Button Effects */
        .neon-button {
            position: relative;
            overflow: hidden;
        }
        
        .neon-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .neon-button:hover::before {
            left: 100%;
        }
        
        /* Social Media Neon Effects */
        .neon-social:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px currentColor;
        }
        
        /* Card Animations */
        .neon-card {
            transition: all 0.5s ease;
            position: relative;
        }
        
        .neon-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(239, 68, 68, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
            border-radius: 1rem;
        }
        
        .neon-card:hover::before {
            opacity: 1;
        }
        
        /* Parallax Elements */
        .parallax {
            transform: translateZ(0);
            will-change: transform;
        }
        
        /* Enhanced Scroll Animations */
        .scroll-fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .scroll-fade-in.animate {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    
    <!-- Interactive Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Parallax effect for background elements
            function handleParallax() {
                const parallaxElements = document.querySelectorAll('.parallax');
                const scrolled = window.pageYOffset;
                
                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }
            
            // Scroll animation observer
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, observerOptions);
            
            // Observe all scroll-triggered elements
            document.querySelectorAll('.scroll-fade-in').forEach(item => {
                observer.observe(item);
            });
            
            // Enhanced neon effects on card hover
            const neonCards = document.querySelectorAll('.neon-card');
            neonCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.w-20.h-20');
                    if (icon) {
                        icon.classList.add('neon-pulse');
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.w-20.h-20');
                    if (icon) {
                        icon.classList.remove('neon-pulse');
                    }
                });
            });
            
            // Throttled scroll handler for parallax
            let ticking = false;
            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(handleParallax);
                    ticking = true;
                    setTimeout(() => { ticking = false; }, 16);
                }
            }
            
            window.addEventListener('scroll', requestTick);
            
            // Initial parallax setup
            handleParallax();
            
            // Add random floating animation to particles
            const particles = document.querySelectorAll('.animate-float');
            particles.forEach((particle, index) => {
                particle.style.animationDelay = `${index * 0.5}s`;
                particle.style.animationDuration = `${3 + Math.random() * 2}s`;
            });
        });
    </script>
</x-layout>
