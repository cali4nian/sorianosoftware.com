<!-- Navigation -->
    <header x-data="{ open: false }" class="absolute top-0 left-0 z-50 w-full bg-transparent">
        <div class="flex items-center justify-between px-6 py-6 md:px-12">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Soriano Software Logo" class="w-auto h-10 rounded-full">
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden space-x-6 text-sm font-medium text-white md:flex">
                <a href="#services" class="transition hover:text-indigo-400">Services</a>
                <a href="#portfolio" class="transition hover:text-indigo-400">Portfolio</a>
                <a href="#about" class="transition hover:text-indigo-400">About</a>
                <a href="#contact" class="transition hover:text-indigo-400">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="text-white md:hidden focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Nav Menu Fullscreen with Close Button -->
        <div x-show="open" @click.away="open = false" class="fixed inset-0 z-50 flex flex-col items-center justify-center space-y-8 text-white bg-gray-900 bg-opacity-95 md:hidden">
            <button @click="open = false" aria-label="Close menu" class="absolute text-3xl text-white top-6 right-6 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <a href="#services" @click="open = false" class="text-2xl font-semibold transition hover:text-indigo-400">Services</a>
            <a href="#portfolio" @click="open = false" class="text-2xl font-semibold transition hover:text-indigo-400">Portfolio</a>
            <a href="#about" @click="open = false" class="text-2xl font-semibold transition hover:text-indigo-400">About</a>
            <a href="#contact" @click="open = false" class="text-2xl font-semibold transition hover:text-indigo-400">Contact</a>
        </div>
    </header>