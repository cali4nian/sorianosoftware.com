<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soriano Software</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-white bg-gray-900">
    
    @include('navigation')

    <!-- Landing Page First Section -->
    <section class="relative flex items-center justify-center h-screen overflow-hidden">
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
        <aside class="flex flex-row justify-center space-x-4">
            <a href="#services"
            class="inline-block px-8 py-4 text-lg font-semibold transition bg-indigo-500 rounded-lg hover:bg-indigo-600">
            Our Services
            </a>
            <a href="#contact"
            class="inline-block px-8 py-4 text-lg border-2 border-indigo-500 rounded-lg hover:border-indigo-400">
            Contact Us
            </a>
        </aside>
      </div>
    </section>

    <!-- Social Media Section -->
    <section class="flex items-center justify-center py-10 bg-gradient-to-r from-gray-950 to-gray-700">
      <div class="flex flex-row space-x-8 text-4xl">
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/company/soriano-software" target="_blank" aria-label="LinkedIn"
          class="text-gray-400 hover:text-[#0A66C2] transition-colors duration-300">
          <i class="fab fa-linkedin"></i>
        </a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/profile.php?id=61556497791655" target="_blank" aria-label="Facebook"
          class="text-gray-400 hover:text-[#1877F2] transition-colors duration-300">
          <i class="fab fa-facebook"></i>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/sorianosoftware" target="_blank" aria-label="Instagram"
          class="text-gray-400 transition-colors duration-300 hover:text-pink-500">
          <i class="fab fa-instagram"></i>
        </a>

        <!-- YouTube -->
        <a href="https://www.youtube.com/@sorianosoftware" target="_blank" aria-label="YouTube"
          class="text-gray-400 hover:text-[#FF0000] transition-colors duration-300">
          <i class="fab fa-youtube"></i>
        </a>

        <!-- TikTok -->
        <a href="https://www.tiktok.com/@sorianosoftware" target="_blank" aria-label="TikTok"
          class="text-gray-400 hover:text-[#000000] transition-colors duration-300">
          <i class="fab fa-tiktok"></i>
        </a>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="px-6 py-20 text-gray-900 bg-gray-100">
        <div class="max-w-6xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center">Services</h2>
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
        <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
          <h3 class="mb-4 text-2xl font-semibold">Remote IT Support</h3>
          <p class="text-gray-600">
            Fast, reliable remote troubleshooting and IT support for businesses and individuals—network, hardware, software, and security.
          </p>
        </div>
        <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
          <h3 class="mb-4 text-2xl font-semibold">Modern Cloud Solutions</h3>
          <p class="text-gray-600">
            Scalable cloud infrastructure, migration, and management—AWS, Azure, Google Cloud, and more. Secure, cost-effective, and future-ready.
          </p>
        </div>
        <div class="p-8 transition bg-white shadow rounded-xl hover:shadow-lg">
          <h3 class="mb-4 text-2xl font-semibold">Cybersecurity & Compliance</h3>
          <p class="text-gray-600">
            Protect your data and systems with proactive security audits, compliance solutions, and ongoing monitoring.
          </p>
        </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="px-6 py-20 text-gray-900 bg-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center">Project Spotlight</h2>

            <div class="mx-auto overflow-hidden bg-gray-100 shadow-lg rounded-xl md:flex">
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/logoBDP.PNG') }}" alt="BackDownPunisher.com"
                        class="object-cover w-full h-64 md:h-auto">
                </div>
                <div class="p-8 md:w-1/2">
                    <h3 class="mb-4 font-semibold sm:text-xl md:text-2xl">BackDownPunisher.com</h3>
                    <p class="mb-4 text-gray-700">
                    A dynamic online platform for a young basketball player to showcase his talent, skill, and relentless work ethic through his main website and social media presence.
                    </p>
                    <ul class="mb-4 text-sm text-gray-600 list-disc list-inside">
                    <li><strong>Challenge:</strong> Build a clean, mobile-first brand site for a student-athlete with limited content.</li>
                    <li><strong>Solution:</strong> Designed a responsive site with Laravel + Tailwind and embeded YouTube latest highlights video.</li>
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

    <!-- Testimonials -->
    <section id="testimonials" class="px-6 py-20 text-white bg-gray-900">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="mb-12 text-4xl font-bold">What Our Clients Say</h2>
        <div class="p-8 bg-gray-800 shadow-lg rounded-xl md:p-12">
          <p class="mb-6 text-xl italic">
            “Working with Soriano Software was a game changer. The site for BackDownPunisher.com turned out better than I imagined—fast, clean, and professional. The attention to detail and communication was top-tier.”
          </p>
          <aside class="flex items-center justify-center space-x-4">
            <img src="{{ asset('images/logoBDP.PNG'); }}" alt="Client photo"
                class="object-cover w-12 h-12 border-2 border-indigo-500 rounded-full">
            <div class="text-left">
              <p class="text-lg font-semibold">Kain</p>
              <p class="text-sm text-gray-400">Client – BackDownPunisher.com</p>
            </div>
          </aside>
        </div>
      </div>
    </section>

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

    <!-- GoFundMe Section -->
    <section class="relative py-16 text-white bg-gradient-to-r from-indigo-800 via-purple-700 to-indigo-900">
      <div class="container max-w-3xl px-6 mx-auto text-center lg:px-12">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight drop-shadow-lg">
          Invest in the Future of Young Athletes
        </h2>
        <h3 class="mb-6 text-3xl font-extrabold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 drop-shadow-lg">
          Free Community Program Powered by Soriano Software
        </h3>

        <p class="mb-8 text-lg leading-relaxed text-indigo-100">
          Every great player starts with a chance. Our mission is to provide youth with access to 
          training, equipment, and opportunities that empower them to grow both on and off the court. 
          Your support helps us cover tournament fees, gear, and mentorship programs that shape the 
          next generation of leaders through sports.
        </p>

        <!-- Slideshow -->
        <div class="relative mb-8 overflow-hidden shadow-2xl rounded-2xl max-h-80">
          <div class="slideshow">
            <img src="/images/youth-basketball1.jpg" alt="Youth Athletes 1" class="object-cover w-full h-80">
            <img src="/images/youth-basketball2.jpg" alt="Youth Athletes 2" class="hidden object-cover w-full h-80">
            <img src="/images/youth-basketball3.jpg" alt="Youth Athletes 3" class="hidden object-cover w-full h-80">
            <img src="/images/youth-basketball4.jpg" alt="Youth Athletes 4" class="hidden object-cover w-full h-80">
            <img src="/images/youth-basketball5.jpg" alt="Youth Athletes 5" class="hidden object-cover w-full h-80">
            <img src="/images/youth-basketball6.jpg" alt="Youth Athletes 6" class="hidden object-cover w-full h-80">
          </div>
          <!-- Dots -->
          <div class="absolute flex justify-center w-full gap-2 bottom-3">
            <span class="w-3 h-3 bg-white rounded-full opacity-70 dot active"></span>
            <span class="w-3 h-3 bg-white rounded-full opacity-50 dot"></span>
            <span class="w-3 h-3 bg-white rounded-full opacity-50 dot"></span>
            <span class="w-3 h-3 bg-white rounded-full opacity-50 dot"></span>
            <span class="w-3 h-3 bg-white rounded-full opacity-50 dot"></span>
            <span class="w-3 h-3 bg-white rounded-full opacity-50 dot"></span>
          </div>
        </div>

        <!-- CTA Button -->
        <a href="https://gofund.me/491cb929" target="_blank" rel="noopener noreferrer" class="inline-block px-8 py-4 text-lg font-semibold text-white transition-all duration-300 bg-green-500 rounded-full shadow-lg hover:bg-green-600"> Support on GoFundMe </a>

        <p class="mt-6 text-sm text-indigo-200">
          Your donation makes a real difference. Together, we can build stronger communities and brighter futures 
          through youth athletics.
        </p>
      </div>
    </section>

    <!-- Slideshow Script -->
    <script>
      const slides = document.querySelectorAll('.slideshow img');
      const dots = document.querySelectorAll('.dot');
      let current = 0;

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.add('hidden');
          dots[i].classList.remove('active');
          dots[i].classList.replace('opacity-70', 'opacity-50');
        });
        slides[index].classList.remove('hidden');
        dots[index].classList.add('active');
        dots[index].classList.replace('opacity-50', 'opacity-70');
      }

      function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
      }

      setInterval(nextSlide, 4000); // Auto-slide every 4 seconds
      showSlide(current);
    </script>
    
    @include('footer')
    
</body>
</html>
