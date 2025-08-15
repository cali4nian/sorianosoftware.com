<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soriano Software</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-white bg-gray-900">
    
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

        <!-- Mobile Nav Menu -->
        <div x-show="open" @click.away="open = false" class="px-6 py-4 space-y-4 text-white bg-gray-900 md:hidden">
            <a href="#services" class="block transition hover:text-indigo-400">Services</a>
            <a href="#portfolio" class="block transition hover:text-indigo-400">Portfolio</a>
            <a href="#about" class="block transition hover:text-indigo-400">About</a>
            <a href="#contact" class="block transition hover:text-indigo-400">Contact</a>
        </div>
    </header>
    <!-- End Navigation -->

    <!-- Header -->
    <header class="relative flex items-center justify-center h-screen overflow-hidden">
        <div class="absolute inset-0 opacity-75 bg-gradient-to-br from-indigo-800 via-purple-900 to-black"></div>
        <div class="relative z-10 max-w-3xl px-4 text-center">
            <h1 class="mb-2 text-5xl font-extrabold leading-tight md:text-6xl">
            Soriano Software
            </h1>
            <p class="mb-6 text-xl text-gray-300 md:text-2xl">
                Excellence Pursues Innovation
            </p>
        <p class="mb-8 text-xl md:text-2xl">
            We turn bold visions into code—web, mobile, and desktop applications. Real solutions without the fluff.
        </p>
        <div class="space-x-4">
            <a href="#services"
            class="inline-block px-8 py-4 text-lg font-semibold transition bg-indigo-500 rounded-lg hover:bg-indigo-600">
            Our Services
            </a>
            <a href="#contact"
            class="inline-block px-8 py-4 text-lg border-2 border-indigo-500 rounded-lg hover:border-indigo-400">
            Contact Us
            </a>
        </div>
        </div>
        <div class="absolute flex justify-center w-full bottom-10">
        <a href="#services" class="text-4xl text-indigo-300 animate-bounce">↓</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Services -->
    <section id="services" class="px-6 py-20 text-gray-900 bg-gray-100">
        <div class="max-w-6xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center">Our Services</h2>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
                    <h3 class="mb-4 text-2xl font-semibold">Web Development</h3>
                    <p class="text-gray-600">
                        Modern, responsive websites built for performance and clarity. From landing pages to full-stack platforms.
                    </p>
                </div>
                <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
                    <h3 class="mb-4 text-2xl font-semibold">Mobile Applications</h3>
                    <p class="text-gray-600">
                        Cross-platform mobile apps crafted for seamless UX and speed—Android, iOS, and hybrid builds.
                    </p>
                </div>
                <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
                    <h3 class="mb-4 text-2xl font-semibold">Custom Software Solutions</h3>
                    <p class="text-gray-600">
                        Tailored applications for businesses and teams—automate, analyze, and accelerate your workflow.
                    </p>
                </div>
                <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
                    <h3 class="mb-4 text-2xl font-semibold">UI/UX Design</h3>
                    <p class="text-gray-600">
                        Interfaces that breathe—designed with empathy, built for usability, refined for conversion.
                    </p>
                </div>
                <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
                    <h3 class="mb-4 text-2xl font-semibold">API Development</h3>
                    <p class="text-gray-600">
                        Robust, secure, and well-documented APIs to power your frontend, mobile, or third-party integrations.
                    </p>
                </div>
                <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
                    <h3 class="mb-4 text-2xl font-semibold">Consulting & Support</h3>
                    <p class="text-gray-600">
                        From planning to post-launch—we guide your digital roadmap and stand by with ongoing support.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Portfolio -->
    <section id="portfolio" class="px-6 py-20 text-gray-900 bg-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center">Project Spotlight</h2>

            <div class="mx-auto overflow-hidden bg-gray-100 shadow-lg rounded-xl md:flex">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/logoBDP.png'); }}" alt="Project Screenshot" class="object-cover w-full h-full rounded-full">
                </div>
                <div class="p-8 md:w-1/2">
                    <h3 class="mb-4 text-2xl font-semibold">BackDownPunisher.com</h3>
                    <p class="mb-4 text-gray-700">
                    A dynamic online platform for a young basketball player to showcase his talent, skill, and relentless work ethic through his main website and social media presence.
                    </p>
                    <ul class="mb-4 text-sm text-gray-600 list-disc list-inside">
                    <li><strong>Challenge:</strong> Build a clean, mobile-first brand site for a student-athlete with limited content.</li>
                    <li><strong>Solution:</strong> Designed a responsive site with Laravel + Tailwind, integrated YouTube highlights and contact form.</li>
                    <li><strong>Result:</strong> Site live in under 10 days; gained 1,200+ unique visitors in the first month with zero ad spend.</li>
                    </ul>
                    <div class="mb-4 text-sm text-gray-500">
                    <strong>Stack:</strong> Laravel, Tailwind CSS, Blade, YouTube Embed API
                    </div>
                    <a href="https://backdownpunisher.com" target="_blank"
                    class="inline-block px-6 py-3 mt-2 font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">
                    Visit Site
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Testimonials -->
    <section id="testimonials" class="px-6 py-20 text-white bg-gray-900">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="mb-12 text-4xl font-bold">What Our Clients Say</h2>
        <div class="p-8 bg-gray-800 shadow-lg rounded-xl md:p-12">
          <p class="mb-6 text-xl italic">
            “Working with Soriano Software was a game changer. The site for BackDownPunisher.com turned out better than I imagined—fast, clean, and professional. The attention to detail and communication was top-tier.”
          </p>
          <div class="flex items-center justify-center space-x-4">
            <img src="{{ asset('images/logoBDP.png'); }}" alt="Client photo"
                class="object-cover w-12 h-12 border-2 border-indigo-500 rounded-full">
            <div class="text-left">
              <p class="text-lg font-semibold">Kain</p>
              <p class="text-sm text-gray-400">Client – BackDownPunisher.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials -->

    <!-- About -->
    <section id="about" class="px-6 py-20 text-gray-900 bg-white">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="mb-8 text-4xl font-bold">About Soriano Software</h2>
        <p class="mb-6 text-lg leading-relaxed text-gray-700">
          Soriano Software was founded in Fresno, California with a clear purpose: to craft clean, powerful software solutions for clients who demand more than off-the-shelf. From full-stack web development to scalable custom apps, we bring deep technical skill with a personal touch.
        </p>
        <p class="text-lg leading-relaxed text-gray-700">
          We believe in building fast, writing clean, and delivering what we promise. Every project — whether it’s a bold startup idea or a small business tool — gets the same attention to detail and commitment to excellence.
        </p>
      </div>
    </section>
    <!-- End About -->

    <!-- CTA -->
    <section id="contact" class="px-6 py-20 text-white bg-gray-900">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="mb-6 text-4xl font-bold">Let’s Build Something Great</h2>
        <p class="mb-10 text-lg text-gray-300">
          Whether you have a project in mind or just want to explore the possibilities, we’re here. Reach out — let’s talk solutions, timelines, and success.
        </p>

        <a href="mailto:support@sorianosoftware.com" class="inline-block px-8 py-4 text-lg font-medium transition bg-indigo-600 rounded-lg hover:bg-indigo-700">
          Contact Us
        </a>

        <div class="mt-8 text-sm text-gray-500">
          Based in Fresno, CA · Serving clients nationwide<br>
          Phone: <a href="tel:5597779705" class="underline">559-777-9705</a> · Email: <a href="mailto:support@sorianosoftware.com" class="underline">support@sorianosoftware.com</a>
        </div>
      </div>
    </section>
    <!-- End CTA -->

    <!-- Footer -->
    <footer class="px-6 py-10 text-gray-300 bg-gray-800">
      <div class="grid max-w-6xl grid-cols-1 gap-8 mx-auto text-sm md:grid-cols-3">
        
        <!-- Branding -->
        <div>
          <h3 class="mb-2 text-lg font-semibold text-white">Soriano Software</h3>
          <p>Custom software solutions built in Fresno, CA. Focused on clean code, smart systems, and meaningful outcomes.</p>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="mb-2 font-semibold text-white">Quick Links</h4>
          <ul class="space-y-1">
            <li><a href="#services" class="hover:underline">Services</a></li>
            <li><a href="#portfolio" class="hover:underline">Portfolio</a></li>
            <li><a href="#about" class="hover:underline">About</a></li>
            <li><a href="#contact" class="hover:underline">Contact</a></li>
            <li><a href="{{ route('terms') }}" class="hover:underline">Terms and Conditions</a></li>
            <li><a href="{{ route('privacy') }}" class="hover:underline">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="mb-2 font-semibold text-white">Contact</h4>
          <p>Email: <a href="mailto:info@sorianosoftware.com" class="underline">support@sorianosoftware.com</a></p>
          <p>Phone: <a href="tel:5597779705" class="underline">559-777-9705</a></p>
          <p>Fresno, California</p>
        </div>
      </div>
      <!-- Bottom Bar -->
      <div class="pt-6 mt-10 text-xs text-center text-gray-500 border-t border-gray-700">
        © 2025 Soriano Software. All rights reserved.
      </div>
    </footer>
    <!-- End Footer -->
     
</body>
</html>
