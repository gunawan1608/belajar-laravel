<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Gothic Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&family=Cinzel+Decorative:wght@400;700;900&family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Advanced Berserk Theme Styles -->
    <style>
        :root {
            --blood-red: #8B0000;
            --dark-black: #0a0a0a;
            --dark-gray: #1a1a1a;
            --dark-purple: #3b0a45;
        }

        .font-gothic {
            font-family: 'Cinzel Decorative', 'UnifrakturCook', serif;
        }

        .font-body {
            font-family: 'Inter', 'Merriweather', sans-serif;
        }

        /* Advanced Text Effects */
        .text-shadow-red {
            text-shadow: 0 0 10px rgba(139, 0, 0, 0.5), 0 0 20px rgba(139, 0, 0, 0.3);
        }

        .text-shadow-purple {
            text-shadow: 0 0 10px rgba(59, 10, 69, 0.5), 0 0 20px rgba(59, 10, 69, 0.3);
        }

        .text-glow-intense {
            text-shadow: 0 0 5px rgba(139, 0, 0, 0.8), 0 0 10px rgba(139, 0, 0, 0.6), 0 0 15px rgba(139, 0, 0, 0.4);
        }

        /* Advanced Glow Effects */
        .glow-red {
            box-shadow: 0 0 20px rgba(139, 0, 0, 0.3), 0 0 40px rgba(139, 0, 0, 0.1);
        }

        .glow-purple {
            box-shadow: 0 0 20px rgba(59, 10, 69, 0.3), 0 0 40px rgba(59, 10, 69, 0.1);
        }

        .glow-intense {
            box-shadow: 0 0 30px rgba(139, 0, 0, 0.5), 0 0 60px rgba(139, 0, 0, 0.3), 0 0 90px rgba(139, 0, 0, 0.1);
        }

        /* Cinematic Backgrounds */
        .bg-gradient-berserk {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 30%, #3b0a45 70%, #8B0000 100%);
        }

        .bg-gradient-dark {
            background: linear-gradient(180deg, #000000 0%, #1a1a1a 50%, #0a0a0a 100%);
        }

        .bg-vignette {
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.3) 70%, rgba(0,0,0,0.8) 100%);
        }

        /* Border Effects */
        .border-glow-red {
            border: 1px solid #8B0000;
            box-shadow: 0 0 10px rgba(139, 0, 0, 0.3), inset 0 0 10px rgba(139, 0, 0, 0.1);
        }

        .border-neon {
            border: 2px solid transparent;
            background: linear-gradient(45deg, #8B0000, #3b0a45) border-box;
            border-radius: 8px;
        }

        /* Advanced Hover Effects */
        .hover-glow-red:hover {
            box-shadow: 0 0 30px rgba(139, 0, 0, 0.6), 0 0 60px rgba(139, 0, 0, 0.4);
            transform: scale(1.02) translateY(-2px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-glow-purple:hover {
            box-shadow: 0 0 30px rgba(59, 10, 69, 0.6), 0 0 60px rgba(59, 10, 69, 0.4);
            transform: scale(1.02) translateY(-2px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-dramatic:hover {
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 10px 40px rgba(139, 0, 0, 0.4);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .hover-tilt:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg) scale(1.02);
            transition: all 0.4s ease-out;
        }

        /* Custom Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translate3d(100%, 0, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulseGlow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(139, 0, 0, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(139, 0, 0, 0.6), 0 0 60px rgba(139, 0, 0, 0.3);
            }
        }

        @keyframes textGlow {
            0%, 100% {
                text-shadow: 0 0 10px rgba(139, 0, 0, 0.5);
            }
            50% {
                text-shadow: 0 0 20px rgba(139, 0, 0, 0.8), 0 0 30px rgba(139, 0, 0, 0.5);
            }
        }

        /* Animation Classes */
        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-slide-in-left {
            animation: slideInLeft 0.8s ease-out;
        }

        .animate-slide-in-right {
            animation: slideInRight 0.8s ease-out;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }

        .animate-text-glow {
            animation: textGlow 3s ease-in-out infinite;
        }

        /* Scroll Animations */
        .scroll-fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .scroll-fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-slide-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease-out;
        }

        .scroll-slide-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .scroll-slide-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease-out;
        }

        .scroll-slide-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Staggered Scroll Animations */
        .scroll-fade-in-stagger {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .scroll-fade-in-stagger.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-fade-in-stagger:nth-child(1) { transition-delay: 0.1s; }
        .scroll-fade-in-stagger:nth-child(2) { transition-delay: 0.2s; }
        .scroll-fade-in-stagger:nth-child(3) { transition-delay: 0.3s; }
        .scroll-fade-in-stagger:nth-child(4) { transition-delay: 0.4s; }
        .scroll-fade-in-stagger:nth-child(5) { transition-delay: 0.5s; }
        .scroll-fade-in-stagger:nth-child(6) { transition-delay: 0.6s; }

        /* Parallax Effect */
        .parallax {
            transform: translateZ(0);
            will-change: transform;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #1a1a1a;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #8B0000, #3b0a45);
            border-radius: 6px;
            border: 2px solid #1a1a1a;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #a00000, #4b0a55);
        }

    </style>

    <title>{{ $title ?? 'Berserk Blog - Chronicles of Darkness' }}</title>
</head>

<body class="bg-gradient-berserk min-h-screen text-gray-100 font-body overflow-x-hidden">
    <div class="min-h-screen flex flex-col relative">
        <!-- Background Vignette -->
        <div class="fixed inset-0 bg-vignette pointer-events-none z-0"></div>

        <div class="relative z-10 flex flex-col min-h-screen">
            <x-navbar></x-navbar>

            <main class="relative pt-16 flex-grow">
                {{ $slot }}
            </main>

            <!-- Enhanced Footer -->
            <footer class="bg-black/70 border-t border-red-900/30 mt-auto relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-900/20 via-transparent to-purple-900/20"></div>
                </div>

                <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 relative z-10">
                    <div class="text-center scroll-fade-in">
                        <div class="mb-6">
                            <img src="{{ asset('logo.png') }}" alt="Berserk Logo" class="w-12 h-12 mx-auto glow-red animate-float">
                        </div>
                        <blockquote class="text-gray-400 text-lg font-gothic mb-4 animate-text-glow">
                            "Skidibop Bop Bop ."
                        </blockquote>
                        <cite class="text-red-400 text-sm font-body">— Gunawan Pratama</cite>
                        <div class="mt-8 pt-8 border-t border-red-900/30">
                            <p class="text-gray-500 text-sm font-body">
                                © 2025 Gunawan Blog. Berbagi pengetahuan teknologi dan pengalaman pengembangan.
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scroll Animation Script -->
    <script>
        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe elements with scroll animation classes
        document.addEventListener('DOMContentLoaded', function() {
            const scrollElements = document.querySelectorAll('.scroll-fade-in, .scroll-slide-left, .scroll-slide-right, .scroll-fade-in-stagger');
            scrollElements.forEach(el => observer.observe(el));
        });

        // Parallax Effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax');

            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });

        // Enhanced hover effects
        document.addEventListener('DOMContentLoaded', function() {
            const hoverElements = document.querySelectorAll('.hover-dramatic, .hover-tilt');

            hoverElements.forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.zIndex = '10';
                });

                element.addEventListener('mouseleave', function() {
                    this.style.zIndex = '1';
                });
            });
        });
    </script>
</body>

</html>
