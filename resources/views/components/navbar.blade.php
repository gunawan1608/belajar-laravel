<nav id="navbar" class="fixed top-0 left-0 right-0 z-[9999] border-b transition-all duration-300 ease-out bg-black/80 backdrop-blur-md border-red-900/30">
    
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center">
                <div class="flex items-center space-x-3 group">
                    <img src="{{ asset('logo.png') }}" 
                         alt="Logo" 
                         class="h-8 w-8 glow-red transition-all duration-300 group-hover:scale-110" />
                    <span class="font-gothic text-lg font-bold text-gray-100 group-hover:text-red-400 transition-colors duration-300">
                        Gunawan Blog
                    </span>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-8">
                    <a href="/" 
                       class="group relative px-3 py-2 text-gray-300 hover:text-red-400 transition-colors duration-300 font-medium {{ request()->is('/') ? 'text-red-400' : '' }}">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 to-red-600 group-hover:w-full transition-all duration-300 ease-out {{ request()->is('/') ? 'w-full' : '' }}"></span>
                    </a>
                    <a href="/posts" 
                       class="group relative px-3 py-2 text-gray-300 hover:text-red-400 transition-colors duration-300 font-medium {{ request()->is('posts*') ? 'text-red-400' : '' }}">
                        Blog
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 to-red-600 group-hover:w-full transition-all duration-300 ease-out {{ request()->is('posts*') ? 'w-full' : '' }}"></span>
                    </a>
                    <a href="/about" 
                       class="group relative px-3 py-2 text-gray-300 hover:text-red-400 transition-colors duration-300 font-medium {{ request()->is('about') ? 'text-red-400' : '' }}">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 to-red-600 group-hover:w-full transition-all duration-300 ease-out {{ request()->is('about') ? 'w-full' : '' }}"></span>
                    </a>
                    <a href="/contact" 
                       class="group relative px-3 py-2 text-gray-300 hover:text-red-400 transition-colors duration-300 font-medium {{ request()->is('contact') ? 'text-red-400' : '' }}">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 to-red-600 group-hover:w-full transition-all duration-300 ease-out {{ request()->is('contact') ? 'w-full' : '' }}"></span>
                    </a>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex">
                <a href="/contact" 
                   class="inline-flex items-center bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white px-4 py-2 rounded-lg font-medium text-sm border border-red-600 transition-all duration-300 shadow-lg shadow-red-900/30">
                    Get in Touch
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" 
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-red-400 hover:bg-red-900/20 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-200"
                        aria-expanded="false"
                        aria-controls="mobile-menu"
                        aria-label="Toggle navigation menu">
                    <span class="sr-only">Open main menu</span>
                    <svg id="menu-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-black/95 backdrop-blur-xl border-t border-red-900/30" role="navigation" aria-label="Mobile navigation">
        <div class="px-6 pt-4 pb-6 space-y-3">
            <a href="/" 
               class="block px-4 py-3 text-gray-300 hover:text-red-400 hover:bg-red-900/20 rounded-lg transition-all duration-200 font-medium {{ request()->is('/') ? 'text-red-400 bg-red-900/20' : '' }}">
                Home
            </a>
            <a href="/posts" 
               class="block px-4 py-3 text-gray-300 hover:text-red-400 hover:bg-red-900/20 rounded-lg transition-all duration-200 font-medium {{ request()->is('posts*') ? 'text-red-400 bg-red-900/20' : '' }}">
                Blog
            </a>
            <a href="/about" 
               class="block px-4 py-3 text-gray-300 hover:text-red-400 hover:bg-red-900/20 rounded-lg transition-all duration-200 font-medium {{ request()->is('about') ? 'text-red-400 bg-red-900/20' : '' }}">
                About
            </a>
            <a href="/contact" 
               class="block px-4 py-3 text-gray-300 hover:text-red-400 hover:bg-red-900/20 rounded-lg transition-all duration-200 font-medium {{ request()->is('contact') ? 'text-red-400 bg-red-900/20' : '' }}">
                Contact
            </a>
            <div class="pt-4">
                <a href="/contact" 
                   class="block w-full text-center bg-gradient-to-r from-red-900 to-red-800 hover:from-red-800 hover:to-red-700 text-white px-6 py-3 rounded-lg font-semibold border border-red-600 transition-all duration-300">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    let isMenuOpen = false;

    // Scroll effect for navbar - smoother transition
    let ticking = false;
    function updateNavbar() {
        if (window.pageYOffset > 50) {
            navbar.classList.add('bg-black/95', 'backdrop-blur-xl', 'border-red-900/50', 'shadow-2xl', 'shadow-red-900/20');
            navbar.classList.remove('bg-black/80', 'backdrop-blur-md', 'border-red-900/30');
        } else {
            navbar.classList.remove('bg-black/95', 'backdrop-blur-xl', 'border-red-900/50', 'shadow-2xl', 'shadow-red-900/20');
            navbar.classList.add('bg-black/80', 'backdrop-blur-md', 'border-red-900/30');
        }
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);

    // Mobile menu toggle with proper accessibility
    mobileMenuButton.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;

        if (isMenuOpen) {
            mobileMenu.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'true');
            // Prevent body scroll when mobile menu is open
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            // Restore body scroll
            document.body.style.overflow = '';
        }
    });

    // Close mobile menu when clicking on mobile menu links
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
                isMenuOpen = false;
            }
        });
    });

    // Close mobile menu on window resize if open
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && isMenuOpen) {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            isMenuOpen = false;
        }
    });
});
</script>
