<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-black via-red-900/5 to-purple-900/10">
        <!-- Cinematic Hero Section -->
        <div class="relative py-24 bg-gradient-to-br from-black via-red-900/20 to-purple-900/30 overflow-hidden">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0 opacity-30">
                <div class="absolute top-20 left-10 w-64 h-64 bg-red-900/40 rounded-full blur-3xl animate-pulse parallax-slow"></div>
                <div class="absolute bottom-10 right-20 w-80 h-80 bg-purple-900/30 rounded-full blur-2xl animate-pulse delay-1000 parallax-medium"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-red-900/20 rounded-full blur-3xl animate-pulse delay-2000 parallax-fast"></div>
            </div>

            <!-- Floating Particles -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-red-400/60 rounded-full animate-float"></div>
                <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-purple-400/60 rounded-full animate-float-slow"></div>
                <div class="absolute top-1/2 left-3/4 w-1.5 h-1.5 bg-red-300/40 rounded-full animate-float-medium"></div>
                <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-purple-300/50 rounded-full animate-float-fast"></div>
            </div>

            <!-- Gothic Decorative Elements -->
            <div class="absolute inset-0 pointer-events-none opacity-10">
                <div class="absolute top-10 left-10 text-6xl text-red-900/50 font-gothic">⚔</div>
                <div class="absolute top-20 right-10 text-5xl text-purple-900/50 font-gothic">✦</div>
                <div class="absolute bottom-20 left-20 text-4xl text-red-900/40 font-gothic">◆</div>
                <div class="absolute bottom-10 right-1/4 text-7xl text-purple-900/30 font-gothic">❖</div>
            </div>

            <div class="max-w-6xl mx-auto text-center px-6 relative z-10">
                <h1 class="text-6xl md:text-8xl font-gothic font-bold text-gray-100 mb-8 text-glow-intense animate-text-glow">
                    Blog Articles
                </h1>
                <div class="w-32 h-1 bg-gradient-to-r from-red-600 via-purple-600 to-red-600 mx-auto mb-8"></div>
                <p class="text-2xl text-gray-300 font-serif max-w-3xl mx-auto leading-relaxed mb-12 italic">
                    "Berbagi pengetahuan adalah cara terbaik untuk memperkuat pemahaman kita sendiri."
                </p>

                <!-- Scroll Indicator -->
                <div class="animate-bounce mt-16">
                    <svg class="w-8 h-8 text-red-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Search and Filter Section -->
        <div class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900/80 via-black/90 to-red-900/20">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                <!-- Search Bar -->
                <form method="GET" action="/posts" class="relative flex-1 max-w-2xl">
                    <div class="flex">
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="text"
                                   id="live-search"
                                   name="search"
                                   value="{{ request('search') }}"
                                   placeholder="Search the chronicles..."
                                   class="w-full pl-12 pr-4 py-4 bg-black/60 backdrop-blur-sm border border-red-900/50 rounded-l-xl text-gray-100 placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/30 focus:outline-none transition-all duration-300 font-body glow-red-subtle">
                        </div>
                        <button type="submit"
                                class="px-6 py-4 bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white rounded-r-xl font-gothic font-bold border border-red-600 border-l-0 transition-all duration-300 glow-red-subtle hover:shadow-lg hover:shadow-red-900/50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>

                <!-- Gothic Filter Buttons -->
                <div class="flex flex-wrap gap-4">
                    <button class="group px-6 py-3 bg-gradient-to-r from-red-900 to-red-800 text-white rounded-xl font-gothic font-bold border border-red-600 hover:from-red-800 hover:to-red-700 transition-all duration-300 glow-red-subtle hover-dramatic">
                        <span class="flex items-center">
                            All Posts
                            <svg class="w-4 h-4 ml-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                    </button>
                    <button class="group px-6 py-3 bg-black/50 backdrop-blur-sm text-red-400 rounded-xl font-gothic font-bold border border-red-900/50 hover:bg-red-900/20 hover:text-red-300 transition-all duration-300">
                        <span class="flex items-center">
                            Laravel
                            <svg class="w-4 h-4 ml-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </span>
                    </button>
                    <button class="group px-6 py-3 bg-black/50 backdrop-blur-sm text-purple-400 rounded-xl font-gothic font-bold border border-purple-900/50 hover:bg-purple-900/20 hover:text-purple-300 transition-all duration-300">
                        <span class="flex items-center">
                            JavaScript
                            <svg class="w-4 h-4 ml-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </span>
                    </button>
                    <button class="group px-6 py-3 bg-black/50 backdrop-blur-sm text-red-400 rounded-xl font-gothic font-bold border border-red-900/50 hover:bg-red-900/20 hover:text-red-300 transition-all duration-300">
                        <span class="flex items-center">
                            Tutorial
                            <svg class="w-4 h-4 ml-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Posts Grid -->
    <div class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-black via-red-900/10 to-purple-900/15">
        <div class="max-w-7xl mx-auto">
            @if($posts->count())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="posts-grid">
                    @foreach($posts as $index => $post)
                        <article class="group bg-gradient-to-br from-gray-900/80 to-black/90 backdrop-blur-sm rounded-2xl overflow-hidden border border-red-900/30 hover:border-red-600/60 transition-all duration-500 hover:shadow-2xl hover:shadow-red-900/30 hover:transform hover:scale-105 scroll-fade-in" style="animation-delay: {{ $index * 0.1 }}s">

                            <!-- Post Image -->
                            <div class="relative overflow-hidden h-48">
                                @if($post->image)
                                    @if(str_starts_with($post->image, 'http'))
                                        <img src="{{ $post->image }}"
                                             alt="{{ $post->title }}"
                                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                             onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gradient-to-br from-red-900/20 to-purple-900/30 flex items-center justify-center relative overflow-hidden\'><div class=\'absolute inset-0 opacity-20\'><div class=\'absolute top-4 left-4 text-4xl text-red-900/50 font-gothic\'>⚔</div><div class=\'absolute bottom-4 right-4 text-3xl text-purple-900/50 font-gothic\'>✦</div></div><div class=\'text-center relative z-10\'><svg class=\'w-12 h-12 text-gray-600 mx-auto mb-2\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z\'></path></svg><p class=\'text-gray-600 text-sm\'>Image Failed</p></div></div>'">
                                    @else
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                             alt="{{ $post->title }}"
                                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                             onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gradient-to-br from-red-900/20 to-purple-900/30 flex items-center justify-center relative overflow-hidden\'><div class=\'absolute inset-0 opacity-20\'><div class=\'absolute top-4 left-4 text-4xl text-red-900/50 font-gothic\'>⚔</div><div class=\'absolute bottom-4 right-4 text-3xl text-purple-900/50 font-gothic\'>✦</div></div><div class=\'text-center relative z-10\'><svg class=\'w-12 h-12 text-gray-600 mx-auto mb-2\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z\'></path></svg><p class=\'text-gray-600 text-sm\'>Image Failed</p></div></div>'">
                                    @endif
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-red-900/20 to-purple-900/30 flex items-center justify-center relative overflow-hidden">
                                        <!-- Gothic Pattern Background -->
                                        <div class="absolute inset-0 opacity-20">
                                            <div class="absolute top-4 left-4 text-4xl text-red-900/50 font-gothic">⚔</div>
                                            <div class="absolute bottom-4 right-4 text-3xl text-purple-900/50 font-gothic">✦</div>
                                        </div>
                                        <div class="text-center relative z-10">
                                            <svg class="w-12 h-12 text-gray-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                            </svg>
                                            <p class="text-gray-600 text-sm">No Image</p>
                                        </div>
                                    </div>
                                @endif

                                <!-- Gothic Category Badge -->
                                <div class="absolute top-4 left-4">
                                    @if($post->categories->count() > 0)
                                        <a href="/categories/{{ $post->categories->first()->slug }}"
                                           class="px-3 py-1.5 bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white text-xs font-gothic font-bold rounded-lg border border-red-600/50 glow-red-subtle transition-all duration-300 hover:scale-105">
                                            {{ $post->categories->first()->name }}
                                        </a>
                                    @else
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-red-900 to-red-800 text-white text-xs font-gothic font-bold rounded-lg border border-red-600/50 glow-red-subtle">
                                            CHRONICLE
                                        </span>
                                    @endif
                                </div>

                                <!-- Reading Time -->
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1.5 bg-black/80 backdrop-blur-sm text-red-300 text-xs font-gothic rounded-lg border border-red-900/50">
                                        {{ rand(3, 8) }} min read
                                    </span>
                                </div>
                            </div>

                            <!-- Post Content -->
                            <div class="p-6">
                                <!-- Post Title -->
                                <h2 class="text-xl font-gothic font-bold text-gray-100 mb-3 group-hover:text-red-300 transition-colors duration-300 leading-tight text-glow-subtle line-clamp-2">
                                    <a href="/posts/{{ $post->slug }}" class="hover:text-red-300 transition-colors duration-200">
                                        {{ $post->title }}
                                    </a>
                                </h2>

                                <!-- Post Excerpt -->
                                <p class="text-gray-400 font-body text-sm mb-4 leading-relaxed line-clamp-3">
                                    {{ Str::limit(strip_tags($post->body), 100) }}
                                </p>

                                <!-- Post Meta -->
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center text-gray-500 font-body">
                                            <svg class="w-4 h-4 mr-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            {{ $post->created_at->format('M d, Y') }}
                                        </div>
                                        <div class="flex items-center text-gray-500 font-body">
                                            <svg class="w-4 h-4 mr-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            <a href="/author/{{ $post->author->username ?? 'unknown' }}"
                                               class="text-red-400 hover:text-red-300 transition-colors duration-200 font-gothic">
                                                {{ $post->author->name ?? 'Unknown Author' }}
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/posts/{{ $post->slug }}"
                                       class="group bg-gradient-to-r from-red-900/50 to-red-800/50 hover:from-red-800 hover:to-red-700 text-red-300 hover:text-white px-4 py-2 rounded-lg font-gothic font-bold border border-red-600/50 transition-all duration-300 flex items-center glow-red-subtle text-sm">
                                        READ MORE
                                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Gothic Pagination -->
                @if(method_exists($posts, 'links'))
                    <div class="mt-16 flex justify-center scroll-fade-in">
                        <div class="bg-gradient-to-r from-black/80 to-red-900/20 backdrop-blur-sm border border-red-900/50 rounded-xl p-6 glow-red-subtle">
                            <nav class="flex items-center justify-center space-x-2">
                                @if ($posts->onFirstPage())
                                    <span class="px-4 py-2 text-gray-600 font-gothic cursor-not-allowed">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </span>
                                @else
                                    <a href="{{ $posts->previousPageUrl() }}" class="group px-4 py-2 bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white rounded-lg font-gothic font-bold border border-red-600 transition-all duration-300 glow-red-subtle hover-dramatic">
                                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </a>
                                @endif

                                @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                    @if ($page == $posts->currentPage())
                                        <span class="px-4 py-2 bg-gradient-to-r from-red-900 to-red-800 text-white rounded-lg font-gothic font-bold border border-red-600 glow-red">
                                            {{ $page }}
                                        </span>
                                    @else
                                        <a href="{{ $url }}" class="px-4 py-2 bg-black/50 backdrop-blur-sm text-red-400 hover:text-white hover:bg-red-900/50 rounded-lg font-gothic font-bold border border-red-900/50 hover:border-red-600 transition-all duration-300">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach

                                @if ($posts->hasMorePages())
                                    <a href="{{ $posts->nextPageUrl() }}" class="group px-4 py-2 bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white rounded-lg font-gothic font-bold border border-red-600 transition-all duration-300 glow-red-subtle hover-dramatic">
                                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                @else
                                    <span class="px-4 py-2 text-gray-600 font-gothic cursor-not-allowed">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                @endif
                            </nav>
                        </div>
                    </div>
                @endif
            @else
                <div class="text-center py-20 scroll-fade-in">
                    <div class="max-w-md mx-auto">
                        <div class="w-24 h-24 bg-gradient-to-br from-red-900/30 to-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-gothic font-bold text-gray-300 mb-4 text-glow-subtle">The Chronicles Await</h3>
                        <p class="text-gray-500 font-body text-lg">No tales have been inscribed in the dark archives yet. Return when the scribes have penned their wisdom.</p>
                    </div>
                </div>
            @endif
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

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
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

            // Live Search Functionality
            const searchInput = document.getElementById('live-search');
            const postsGrid = document.getElementById('posts-grid');
            let searchTimeout;

            if (searchInput && postsGrid) {
                searchInput.addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    const query = this.value.trim();

                    // Debounce search to avoid too many requests
                    searchTimeout = setTimeout(() => {
                        performLiveSearch(query);
                    }, 300);
                });
            }

            function performLiveSearch(query) {
                // Show loading state
                postsGrid.style.opacity = '0.5';

                // Build URL with search parameter
                const url = new URL('/posts', window.location.origin);
                if (query) {
                    url.searchParams.set('search', query);
                }

                // Perform AJAX request
                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'text/html'
                    }
                })
                .then(response => response.text())
                .then(html => {
                    // Parse the response to extract the posts grid
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const newPostsGrid = doc.getElementById('posts-grid');

                    if (newPostsGrid) {
                        // Replace the posts grid content
                        postsGrid.innerHTML = newPostsGrid.innerHTML;

                        // Re-observe new elements for scroll animations
                        postsGrid.querySelectorAll('.scroll-fade-in').forEach(el => {
                            observer.observe(el);
                        });
                    }

                    // Restore opacity
                    postsGrid.style.opacity = '1';
                })
                .catch(error => {
                    console.error('Live search error:', error);
                    postsGrid.style.opacity = '1';
                });
            }
        });
    </script>
</x-layout>
