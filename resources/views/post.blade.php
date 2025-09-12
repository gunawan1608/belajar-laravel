<x-layout>
    <!-- Hero Section with Animated Background -->
    <div class="relative min-h-screen bg-gradient-to-br from-black via-red-900/10 to-purple-900/20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-red-900/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-purple-900/15 rounded-full blur-3xl animate-float-slow"></div>
            <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-red-800/10 rounded-full blur-2xl animate-float-medium"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 pt-24 pb-16">
            <div class="max-w-5xl mx-auto px-6">
                <!-- Back Navigation -->
                <div class="mb-8 scroll-fade-in">
                    <a href="/posts" class="group inline-flex items-center text-red-400 hover:text-red-300 font-gothic font-bold transition-all duration-300 hover:translate-x-1">
                        <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Kembali ke Blog
                    </a>
                </div>

                <!-- Post Header -->
                <div class="text-center mb-12 scroll-fade-in delay-200">
                    @if($post->categories->count() > 0)
                        <div class="mb-4">
                            <a href="/categories/{{ $post->categories->first()->slug }}"
                               class="inline-block px-4 py-2 bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white text-sm font-gothic font-bold rounded-full border border-red-600/50 glow-red-subtle transition-all duration-300 hover:scale-105">
                                {{ $post->categories->first()->name }}
                            </a>
                        </div>
                    @endif

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-gothic font-bold text-gray-100 mb-6 leading-tight text-glow-subtle">
                        {{ $post->title }}
                    </h1>

                    <div class="flex flex-wrap items-center justify-center gap-6 text-gray-300 font-body">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <a href="/author/{{ $post->author->username ?? 'unknown' }}"
                               class="text-red-400 hover:text-red-300 transition-colors duration-200 font-gothic">
                                Ditulis oleh {{ $post->author->name ?? 'Penulis' }}
                            </a>
                        </div>
                        <span class="text-gray-600">•</span>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                        <span class="text-gray-600">•</span>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ rand(5, 12) }} min read</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                @if($post->image)
                    <div class="mb-16 scroll-fade-in delay-400">
                        <div class="relative overflow-hidden rounded-2xl border-2 border-red-900/30 glow-red-subtle">
                            @if(str_starts_with($post->image, 'http'))
                                <img src="{{ $post->image }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-64 md:h-96 lg:h-[500px] object-cover transition-transform duration-700 hover:scale-105"
                                     onerror="this.style.display='none'">
                            @else
                                <img src="{{ asset('storage/' . $post->image) }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-64 md:h-96 lg:h-[500px] object-cover transition-transform duration-700 hover:scale-105"
                                     onerror="this.style.display='none'">
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Article Content Section -->
    <div class="py-20 px-6 bg-gradient-to-br from-black via-red-900/5 to-purple-900/10">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-xl prose-invert max-w-none scroll-fade-in">
                <div class="bg-gradient-to-br from-gray-900/80 to-black/90 backdrop-blur-sm border border-red-900/30 rounded-2xl p-8 md:p-12 glow-red-subtle">
                    <div class="font-body text-gray-300 leading-relaxed text-lg">
                        {!! nl2br(e($post->body)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Posts Section -->
    <div class="py-20 px-6 bg-gradient-to-br from-black via-purple-900/10 to-red-900/15">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-fade-in">
                <h2 class="text-3xl md:text-4xl font-gothic font-bold text-gray-100 mb-4 text-glow-subtle">
                    Artikel Lainnya
                </h2>
                <div class="w-24 h-0.5 bg-gradient-to-r from-red-600 to-purple-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $relatedPosts = App\Models\Post::where('id', '!=', $post->id)
                        ->with(['author', 'categories'])
                        ->latest()
                        ->take(3)
                        ->get();
                @endphp

                @foreach($relatedPosts as $index => $relatedPost)
                    <article class="group bg-gradient-to-br from-gray-900/80 to-black/90 backdrop-blur-sm rounded-2xl overflow-hidden border border-red-900/30 hover:border-red-600/60 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/30 hover:transform hover:scale-105 scroll-fade-in" style="animation-delay: {{ $index * 0.2 }}s">
                        <!-- Post Image -->
                        <div class="relative overflow-hidden h-48">
                            @if($relatedPost->image)
                                @if(str_starts_with($relatedPost->image, 'http'))
                                    <img src="{{ $relatedPost->image }}"
                                         alt="{{ $relatedPost->title }}"
                                         class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                         onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gradient-to-br from-red-900/20 to-purple-900/30 flex items-center justify-center\'><svg class=\'w-12 h-12 text-gray-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z\'></path></svg></div>'">
                                @else
                                    <img src="{{ asset('storage/' . $relatedPost->image) }}"
                                         alt="{{ $relatedPost->title }}"
                                         class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                         onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gradient-to-br from-red-900/20 to-purple-900/30 flex items-center justify-center\'><svg class=\'w-12 h-12 text-gray-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z\'></path></svg></div>'">
                                @endif
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-red-900/20 to-purple-900/30 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                            @endif

                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                @if($relatedPost->categories->count() > 0)
                                    <span class="px-3 py-1.5 bg-gradient-to-r from-red-900 to-red-800 text-white text-xs font-gothic font-bold rounded-lg border border-red-600/50 glow-red-subtle">
                                        {{ $relatedPost->categories->first()->name }}
                                    </span>
                                @endif
                            </div>

                            <!-- Reading Time -->
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1.5 bg-black/80 backdrop-blur-sm text-red-300 text-xs font-gothic rounded-lg border border-red-900/50">
                                    {{ rand(3, 8) }} min
                                </span>
                            </div>
                        </div>

                        <!-- Post Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-gothic font-bold text-gray-100 mb-3 group-hover:text-red-300 transition-colors duration-300 leading-tight line-clamp-2">
                                <a href="/posts/{{ $relatedPost->slug }}" class="hover:text-red-300 transition-colors duration-200">
                                    {{ $relatedPost->title }}
                                </a>
                            </h3>

                            <p class="text-gray-400 font-body text-sm mb-4 leading-relaxed line-clamp-3">
                                {{ Str::limit(strip_tags($relatedPost->body), 100) }}
                            </p>

                            <div class="flex items-center justify-between text-sm">
                                <div class="flex items-center text-gray-500 font-body">
                                    <svg class="w-4 h-4 mr-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ $relatedPost->created_at->format('M d, Y') }}
                                </div>
                                <a href="/posts/{{ $relatedPost->slug }}"
                                   class="group bg-gradient-to-r from-red-900/50 to-red-800/50 hover:from-red-800 hover:to-red-700 text-red-300 hover:text-white px-3 py-1.5 rounded-lg font-gothic font-bold border border-red-600/50 transition-all duration-300 flex items-center glow-red-subtle text-xs">
                                    READ MORE
                                    <svg class="w-3 h-3 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Explore All Button -->
            <div class="text-center mt-12 scroll-fade-in">
                <a href="/posts"
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white font-gothic font-bold rounded-xl border border-red-600 transition-all duration-300 glow-red-subtle hover:shadow-lg hover:shadow-red-900/50 hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Jelajahi Semua Artikel
                </a>
            </div>
        </div>
    </div>

    <!-- Berserk Theme Styles and Animations -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=UnifrakturCook:wght@700&display=swap');

        .font-gothic {
            font-family: 'Cinzel Decorative', 'UnifrakturCook', serif;
        }

        .font-body {
            font-family: 'Inter', 'Merriweather', serif;
        }

        .text-glow {
            text-shadow: 0 0 20px rgba(220, 38, 38, 0.5);
        }

        .text-glow-intense {
            text-shadow: 0 0 30px rgba(220, 38, 38, 0.8), 0 0 60px rgba(220, 38, 38, 0.4);
        }

        .text-glow-subtle {
            text-shadow: 0 0 10px rgba(220, 38, 38, 0.3);
        }

        .glow-red {
            box-shadow: 0 0 20px rgba(220, 38, 38, 0.4);
        }

        .glow-red-subtle {
            box-shadow: 0 0 10px rgba(220, 38, 38, 0.2);
        }

        .glow-blue-subtle {
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.2);
        }

        .glow-indigo-subtle {
            box-shadow: 0 0 10px rgba(99, 102, 241, 0.2);
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

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-1000 {
            animation-delay: 1s;
        }

        .delay-2000 {
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes textGlow {
            0% { text-shadow: 0 0 20px rgba(220, 38, 38, 0.5); }
            100% { text-shadow: 0 0 30px rgba(220, 38, 38, 0.8), 0 0 60px rgba(220, 38, 38, 0.4); }
        }

        /* Enhanced Prose Styling for Article Content */
        .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
            font-family: 'Cinzel Decorative', serif;
            color: #f3f4f6;
            text-shadow: 0 0 10px rgba(220, 38, 38, 0.3);
        }

        .prose p {
            color: #d1d5db;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .prose a {
            color: #f87171;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .prose a:hover {
            color: #fca5a5;
        }

        .prose strong {
            color: #f3f4f6;
            font-weight: 700;
        }

        .prose code {
            background-color: rgba(220, 38, 38, 0.1);
            color: #f87171;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
        }

        .prose pre {
            background-color: rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(220, 38, 38, 0.3);
            border-radius: 0.75rem;
            padding: 1.5rem;
            overflow-x: auto;
        }

        .prose blockquote {
            border-left: 4px solid #dc2626;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #d1d5db;
            background-color: rgba(220, 38, 38, 0.05);
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
        }

        .prose ul, .prose ol {
            color: #d1d5db;
        }

        .prose li {
            margin-bottom: 0.5rem;
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
