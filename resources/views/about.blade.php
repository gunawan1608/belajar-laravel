<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Cinematic Hero Section -->
    <div class="relative min-h-screen -mt-6 -mx-4 sm:-mx-6 lg:-mx-8 flex items-center justify-center overflow-hidden">
        <!-- Background Layers -->
        <div class="absolute inset-0 bg-gradient-to-br from-black via-red-900/20 to-purple-900/30"></div>

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-15">
            <div class="absolute top-20 left-20 w-64 h-64 bg-red-900/30 rounded-full blur-2xl animate-pulse parallax" data-speed="0.2"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-purple-900/40 rounded-full blur-xl animate-pulse delay-1000 parallax" data-speed="0.3"></div>
            <div class="absolute top-1/3 right-1/4 w-32 h-32 bg-red-900/25 rounded-full blur-lg animate-float parallax" data-speed="0.4"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
            <div class="animate-fade-in-down">
                <!-- Quote Section -->
                <div class="mb-10">
                    <blockquote class="text-2xl md:text-3xl lg:text-4xl font-gothic font-bold text-gray-100 mb-4 text-glow-intense leading-tight">
                        "Coding bukan hanya menulis baris kode, tapi seni membangun dunia digital dari logika dan imajinasi."
                    </blockquote>
                    <cite class="text-red-400 font-body text-lg">— Skidibib</cite>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-gothic font-bold text-gray-100 mb-6 text-shadow-red animate-text-glow">
                    GUNAWAN MADIA PRATAMA
                </h1>

                <!-- Subtitle -->
                <p class="text-lg md:text-xl lg:text-2xl text-gray-300 font-body mb-10 max-w-2xl mx-auto leading-relaxed">
                    Software Engineer
                </p>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="flex flex-col items-center text-red-400">
                <span class="text-sm font-body mb-2 animate-pulse">Jelajahi Perjalanan</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="py-20 px-4 sm:px-6 lg:px-8 relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-gray-900/50 to-black/80"></div>

        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Profile & Story Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Profile Card -->
                <div class="lg:col-span-1 scroll-slide-right">
                    <div class="bg-gray-900/40 backdrop-blur-sm border border-red-900/30 rounded-2xl p-6 hover-dramatic sticky top-8">
                        <!-- Avatar -->
                        <div class="text-center mb-6">
                            <div class="relative inline-block">
                                <div class="w-32 h-32 mx-auto rounded-full border-4 border-red-900/50 overflow-hidden glow-red bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center group">
                                    <!-- Photo placeholder -->
                                    <div class="w-full h-full bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                                        <img src="https://i.pinimg.com/736x/5e/04/08/5e04087e3942c064a4f9f3f5d1a57117.jpg" alt="Profile Photo" class="w-32 h-32 rounded-full object-cover">
                                    </div>
                                </div>
                                <!-- Decorative corners -->
                                <div class="absolute -top-3 -left-3 w-8 h-8 border-l-2 border-t-2 border-red-500 animate-pulse"></div>
                                <div class="absolute -top-3 -right-3 w-8 h-8 border-r-2 border-t-2 border-red-500 animate-pulse delay-500"></div>
                                <div class="absolute -bottom-3 -left-3 w-8 h-8 border-l-2 border-b-2 border-red-500 animate-pulse delay-1000"></div>
                                <div class="absolute -bottom-3 -right-3 w-8 h-8 border-r-2 border-b-2 border-red-500 animate-pulse delay-1500"></div>
                            </div>
                        </div>

                        <div class="text-center">
                            <h2 class="text-2xl font-gothic font-bold text-gray-100 mb-2 text-shadow-red">
                                GUNAWAN MADIA PRATAMA
                            </h2>
                            <p class="text-red-400 font-body mb-4 text-base">Software Engineer</p>
                            <div class="h-px bg-gradient-to-r from-transparent via-red-900/50 to-transparent mb-4"></div>
                            <p class="text-gray-300 font-body leading-relaxed text-sm">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, natus."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story Content -->
                <div class="lg:col-span-2 space-y-6 scroll-slide-left">
                    <!-- Chronicle Section -->
                    <div class="bg-gray-900/30 backdrop-blur-sm border border-red-900/20 rounded-2xl p-6 md:p-8 hover-glow-subtle">
                        <h3 class="text-2xl md:text-3xl font-gothic font-bold text-gray-100 mb-6 text-shadow-red">
                            ABOUT ME
                        </h3>
                        <div class="space-y-6 text-gray-200 font-body text-base leading-relaxed">
                            <p class="scroll-fade-in-paragraph" style="animation-delay: 0.2s;">
                                Halo, aku Gunawan Madia Pratama — seorang pelajar XII-RPL di SMK Negeri 1 Jakarta yang jatuh cinta pada dunia teknologi sejak dini.
                                Perjalananku di dunia IT dimulai dari rasa penasaran kecil: bagaimana sebuah aplikasi, website, atau game bisa bekerja di balik layar.
                            </p>
                            <p class="scroll-fade-in-paragraph" style="animation-delay: 0.4s;">
                                Setiap baris kode yang kutulis adalah bagian dari perjalanan ini. Dari membangun aplikasi desktop dengan C#, mengutak-atik website dengan PHP & Laravel,
                                hingga menjelajahi dunia game development di Godot Engine, aku selalu melihat coding sebagai sebuah petualangan.
                            </p>
                            <p class="scroll-fade-in-paragraph" style="animation-delay: 0.6s;">
                                Aku percaya bahwa software yang baik bukan hanya tentang berfungsi dengan sempurna, tapi juga tentang memberikan pengalaman yang berarti bagi penggunanya.
                                Karena itu, aku terus belajar, bereksperimen, dan mengasah kemampuan di berbagai bidang programming.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Skills Section -->
            <div class="mb-16 scroll-fade-in-up">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-gothic font-bold text-gray-100 mb-4 text-shadow-red">
                        Keahlian Teknis
                    </h3>
                    <p class="text-lg text-gray-400 font-body max-w-2xl mx-auto">
                        Teknologi dan bahasa pemrograman yang telah dikuasai
                    </p>
                </div>

                <!-- Single Skills Grid -->
                <div class="bg-black/40 backdrop-blur-sm border border-red-900/30 rounded-2xl p-8 hover-dramatic">
                    <h4 class="text-2xl font-gothic font-bold text-red-400 mb-8 flex items-center justify-center">
                        <span class="text-3xl mr-3">💻</span>
                        Teknologi yang Dikuasai
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- HTML5 -->
                        <div class="skill-item" data-skill="90">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">HTML5</span>
                                <span class="text-red-400 font-body text-sm">90%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-orange-600 to-orange-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- CSS3 -->
                        <div class="skill-item" data-skill="75">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">CSS3</span>
                                <span class="text-red-400 font-body text-sm">75%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-blue-600 to-blue-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- PHP -->
                        <div class="skill-item" data-skill="85">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">PHP</span>
                                <span class="text-red-400 font-body text-sm">85%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-purple-600 to-purple-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- MySQL -->
                        <div class="skill-item" data-skill="80">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">MySQL</span>
                                <span class="text-red-400 font-body text-sm">80%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-green-600 to-green-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- C# -->
                        <div class="skill-item" data-skill="70">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">C#</span>
                                <span class="text-red-400 font-body text-sm">70%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-indigo-600 to-indigo-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- Laravel -->
                        <div class="skill-item" data-skill="65">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">Laravel</span>
                                <span class="text-red-400 font-body text-sm">65%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-red-600 to-red-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- Python -->
                        <div class="skill-item" data-skill="50">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">Python</span>
                                <span class="text-red-400 font-body text-sm">50%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-yellow-600 to-yellow-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- Godot Script -->
                        <div class="skill-item" data-skill="50">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">Godot Script</span>
                                <span class="text-red-400 font-body text-sm">50%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-teal-600 to-teal-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- React -->
                        <div class="skill-item" data-skill="25">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-300 font-body font-medium">React</span>
                                <span class="text-red-400 font-body text-sm">25%</span>
                            </div>
                            <div class="skill-bar bg-gray-800 rounded-full h-3 overflow-hidden">
                                <div class="skill-progress bg-gradient-to-r from-cyan-600 to-cyan-400 h-full rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Call to Action -->
            <div class="text-center scroll-fade-in-up">
                <div class="bg-gradient-to-br from-red-900/20 to-purple-900/20 backdrop-blur-sm border border-red-900/30 rounded-2xl p-8 md:p-12 hover-glow-red">
                    <h3 class="text-3xl md:text-4xl font-gothic font-bold text-gray-100 mb-6 text-shadow-red">
                        Mari Berkolaborasi!
                    </h3>
                    <p class="text-lg md:text-xl text-gray-300 font-body mb-8 max-w-3xl mx-auto leading-relaxed">
                        Punya ide proyek menarik? Butuh bantuan dalam pengembangan aplikasi web atau mobile?
                        Mari diskusikan dan wujudkan ide tersebut menjadi kenyataan bersama-sama.
                    </p>
                    <a href="/contact"
                       class="inline-flex items-center bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white px-8 md:px-12 py-4 md:py-6 rounded-xl font-gothic text-lg md:text-xl font-bold border border-red-600 hover-dramatic glow-intense transition-all duration-500">
                        Hubungi Saya
                        <svg class="w-5 h-5 md:w-6 md:h-6 ml-2 md:ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Animation Styles -->
    <style>
        .skill-progress {
            transition: width 2s ease-out;
        }

        .philosophy-card {
            transition: all 0.5s ease;
        }

        .philosophy-card:hover {
            transform: translateY(-10px);
        }

        .scroll-fade-in-paragraph {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .scroll-fade-in-paragraph.animate {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- Interactive Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Skill bar animations
            function animateSkillBars() {
                const skillItems = document.querySelectorAll('.skill-item');
                skillItems.forEach(item => {
                    const skillLevel = item.dataset.skill;
                    const progressBar = item.querySelector('.skill-progress');

                    setTimeout(() => {
                        progressBar.style.width = skillLevel + '%';
                    }, 500);
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

                        // Trigger skill bar animation when skills section is visible
                        if (entry.target.querySelector('.skill-item')) {
                            animateSkillBars();
                        }
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.scroll-fade-in, .scroll-fade-in-up, .scroll-slide-left, .scroll-slide-right, .scroll-fade-in-paragraph').forEach(item => {
                observer.observe(item);
            });

            // Parallax effect
            function handleParallax() {
                const parallaxElements = document.querySelectorAll('.parallax');
                const scrolled = window.pageYOffset;

                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }

            let ticking = false;
            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(handleParallax);
                    ticking = true;
                    setTimeout(() => { ticking = false; }, 16);
                }
            }

            window.addEventListener('scroll', requestTick);
            handleParallax();
        });
    </script>
</x-layout>
