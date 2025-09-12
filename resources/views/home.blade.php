<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Cinematic Hero Section -->
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-black via-red-900/20 to-purple-900/30 ">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 right-20 w-96 h-96 bg-red-900/40 rounded-full blur-3xl animate-pulse parallax-slow"></div>
            <div class="absolute bottom-20 left-20 w-80 h-80 bg-purple-900/30 rounded-full blur-2xl animate-pulse delay-1000 parallax-medium"></div>
            <div class="absolute top-1/3 left-1/3 w-64 h-64 bg-red-900/25 rounded-full blur-xl animate-float parallax-fast"></div>
        </div>
        
        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-1/4 left-1/5 w-4 h-4 bg-red-400/60 rounded-full animate-float-slow"></div>
            <div class="absolute top-3/4 right-1/4 w-3 h-3 bg-purple-400/50 rounded-full animate-float-medium"></div>
            <div class="absolute bottom-1/3 left-2/3 w-5 h-5 bg-red-300/40 rounded-full animate-float-fast"></div>
            <div class="absolute top-1/2 right-1/3 w-2 h-2 bg-purple-300/60 rounded-full animate-float-slow delay-2000"></div>
        </div>
        
        <!-- Gothic Decorative Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 text-red-900/30 text-8xl font-gothic transform rotate-12">⚔</div>
            <div class="absolute bottom-10 right-10 text-purple-900/30 text-6xl font-gothic transform -rotate-12">✠</div>
            <div class="absolute top-1/2 left-5 text-red-900/20 text-4xl font-gothic transform rotate-45">❦</div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-gothic font-bold text-gray-100 mb-6 text-glow-intense animate-text-glow">
                    Gunawan Blog
                </h1>
                <div class="w-24 h-0.5 bg-gradient-to-r from-red-600 via-purple-600 to-red-600 mx-auto mb-6"></div>
                <p class="text-lg md:text-xl lg:text-2xl text-gray-300 font-serif max-w-3xl mx-auto leading-relaxed mb-10 italic">
                    "Ketika kau jatuh, bangkitlah. Ketika kau terluka, sembuhkan dirimu. Ketika kau kalah, berjuanglah lagi. Itulah yang membuat kita manusia."
                </p>
                
                <!-- Call to Action -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up delay-1000">
                    <a href="/posts" class="group bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white px-6 py-3 rounded-xl font-gothic text-base font-bold border border-red-600 hover-dramatic glow-red transition-all duration-500">
                        <span class="flex items-center">
                            Jelajahi Artikel
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="/about" class="group bg-black/50 backdrop-blur-sm border-2 border-red-900/50 text-red-400 hover:text-red-300 hover:bg-red-900/20 px-6 py-3 rounded-xl font-gothic text-base font-bold transition-all duration-500">
                        <span class="flex items-center">
                            Tentang Saya
                            <svg class="w-5 h-5 ml-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
            <div class="flex flex-col items-center text-red-400">
                <span class="text-sm font-gothic mb-2 animate-pulse">Gulir ke Bawah</span>
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Chronicles of Knowledge Section -->
    <div class="py-16 bg-gradient-to-br from-black via-red-900/10 to-purple-900/15">
        <div class="max-w-5xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-10 scroll-fade-in">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-gothic font-bold text-gray-100 mb-4 text-glow">
                    Bidang Keahlian
                </h2>
                <div class="w-20 h-0.5 bg-gradient-to-r from-red-600 to-purple-600 mx-auto mb-6"></div>
                <p class="text-lg md:text-xl text-gray-300 font-serif max-w-2xl mx-auto leading-relaxed italic">
                    "Kekuatan sejati bukan dari tidak pernah jatuh, tetapi dari bangkit setiap kali terjatuh."
                </p>
            </div>
            
            <!-- Knowledge Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Web Development Card -->
                <div class="group bg-gradient-to-br from-gray-900/60 to-black/80 backdrop-blur-sm border border-red-900/30 rounded-2xl p-6 hover:border-red-600/50 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/20 scroll-fade-in">
                    <div class="text-center mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-900/40 to-purple-900/40 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-gothic font-bold text-gray-100 mb-3 group-hover:text-red-300 transition-colors duration-300">
                            Pengembangan Web
                        </h3>
                    </div>
                    <p class="text-base text-gray-300 font-serif leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                        Menguasai Laravel, PHP, dan JavaScript untuk membangun aplikasi web modern yang powerful dan scalable.
                    </p>
                </div>

                <!-- UI/UX Design Card -->
                <div class="group bg-gradient-to-br from-gray-900/60 to-black/80 backdrop-blur-sm border border-purple-900/30 rounded-2xl p-6 hover:border-purple-600/50 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-900/20 scroll-fade-in delay-200">
                    <div class="text-center mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-900/40 to-red-900/40 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-gothic font-bold text-gray-100 mb-3 group-hover:text-purple-300 transition-colors duration-300">
                            Frontend Development
                        </h3>
                    </div>
                    <p class="text-base text-gray-400 font-serif leading-relaxed text-center">
                        Menggunakan JavaScript, Vue.js, dan teknologi frontend modern untuk menciptakan user interface yang interaktif dan responsif.
                    </p>
                </div>

                <!-- Technology Card -->
                <div class="group bg-gradient-to-br from-gray-900/60 to-black/80 backdrop-blur-sm border border-red-900/30 rounded-2xl p-6 hover:border-red-600/50 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/20 scroll-fade-in delay-400">
                    <div class="text-center mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-900/40 to-purple-900/40 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-gothic font-bold text-gray-100 mb-3 group-hover:text-red-300 transition-colors duration-300">
                            Teknologi Terkini
                        </h3>
                    </div>
                    <p class="text-base text-gray-400 font-serif leading-relaxed text-center">
                        Mengeksplorasi teknologi emerging, filosofi pengembangan, dan tren terbaru dalam dunia programming dan software development.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Arms Section -->
    <div class="py-16 bg-gradient-to-br from-black via-purple-900/20 to-red-900/15 relative overflow-hidden" style="z-index: 1;">
        <!-- Animated Background Blobs -->
        <div class="absolute inset-0" style="z-index: 1;">
            <div class="absolute top-10 left-10 w-48 h-48 bg-red-900/20 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-purple-900/15 rounded-full blur-3xl animate-float delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-red-900/10 rounded-full blur-3xl animate-pulse delay-2000"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center px-6 relative z-10" style="z-index: 10 !important;">
            <div class="scroll-fade-in">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-gothic font-bold text-gray-100 mb-6 text-glow-intense animate-text-glow">
                    Mari Berkolaborasi
                </h2>
                <div class="w-24 h-0.5 bg-gradient-to-r from-red-600 via-purple-600 to-red-600 mx-auto mb-8"></div>
                <p class="text-lg md:text-xl lg:text-2xl text-gray-300 font-serif max-w-3xl mx-auto leading-relaxed mb-12 italic">
                    "Dalam kegelapan terdalam, cahaya terkecil pun dapat menerangi jalan. Jangan pernah menyerah pada impianmu."
                </p>
            
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="/posts" class="group bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white px-6 py-3 rounded-xl font-gothic text-base font-bold border border-red-600 hover-dramatic glow-red transition-all duration-500">
                        <span class="flex items-center">
                            Mulai Membaca
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="/contact" class="group bg-black/50 backdrop-blur-sm border-2 border-purple-900/50 text-purple-400 hover:text-purple-300 hover:bg-purple-900/20 px-6 py-3 rounded-xl font-gothic text-base font-bold transition-all duration-500">
                        <span class="flex items-center">
                            Hubungi Saya
                            <svg class="w-4 h-4 ml-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Berserk Animations and Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=UnifrakturCook:wght@700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap');
        
        .font-gothic {
            font-family: 'Cinzel Decorative', 'UnifrakturCook', serif;
        }
        
        .font-body {
            font-family: 'Inter', 'Merriweather', serif;
        }
        
        .font-serif {
            font-family: 'Playfair Display', 'Georgia', 'Times New Roman', serif;
        }
        
        .text-glow {
            text-shadow: 0 0 20px rgba(220, 38, 38, 0.5);
        }
        
        .text-glow-intense {
            text-shadow: 0 0 30px rgba(220, 38, 38, 0.8), 0 0 60px rgba(220, 38, 38, 0.4);
        }
        
        .glow-red {
            box-shadow: 0 0 20px rgba(220, 38, 38, 0.4);
        }
        
        .hover-dramatic:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-slow {
            animation: float 8s ease-in-out infinite;
        }
        
        .animate-float-medium {
            animation: float 7s ease-in-out infinite;
        }
        
        .animate-float-fast {
            animation: float 5s ease-in-out infinite;
        }
        
        .animate-text-glow {
            animation: textGlow 3s ease-in-out infinite alternate;
        }
        
        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out forwards;
        }
        
        .delay-500 {
            animation-delay: 0.5s;
        }
        
        .delay-1000 {
            animation-delay: 1s;
        }
        
        .delay-2000 {
            animation-delay: 2s;
        }
        
        .scroll-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease-out;
        }
        
        .scroll-fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .parallax-slow {
            transform: translateZ(0);
            will-change: transform;
        }
        
        .parallax-medium {
            transform: translateZ(0);
            will-change: transform;
        }
        
        .parallax-fast {
            transform: translateZ(0);
            will-change: transform;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes textGlow {
            0% { text-shadow: 0 0 20px rgba(220, 38, 38, 0.5); }
            100% { text-shadow: 0 0 30px rgba(220, 38, 38, 0.8), 0 0 60px rgba(220, 38, 38, 0.4); }
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- Enhanced Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll animation observer
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.scroll-fade-in').forEach(el => {
                observer.observe(el);
            });
            
            // Parallax effect for background elements
            function handleParallax() {
                const scrolled = window.pageYOffset;
                
                document.querySelectorAll('.parallax-slow').forEach(element => {
                    const yPos = -(scrolled * 0.2);
                    element.style.transform = `translateY(${yPos}px)`;
                });
                
                document.querySelectorAll('.parallax-medium').forEach(element => {
                    const yPos = -(scrolled * 0.3);
                    element.style.transform = `translateY(${yPos}px)`;
                });
                
                document.querySelectorAll('.parallax-fast').forEach(element => {
                    const yPos = -(scrolled * 0.4);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }
            
            // Throttled scroll handler
            let ticking = false;
            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(handleParallax);
                    ticking = true;
                    setTimeout(() => { ticking = false; }, 16);
                }
            }
            
            window.addEventListener('scroll', requestTick);
        });
    </script>
</x-layout>
