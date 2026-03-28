<section id="about" class="py-12 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 xl:gap-16 items-center">

      <!-- Collage — 3 images, desktop overlapping frame layout -->
      <div class="relative hidden lg:block" style="height:500px;">

        <!-- Decorative gold border frame behind main image -->
        <div class="absolute top-[28px] left-[28px] w-[300px] h-[370px] rounded-2xl border-2 border-gold opacity-40"></div>

        <!-- Image 1 — large left, main portrait -->
        <div class="absolute top-0 left-0 w-[300px] h-[370px] rounded-2xl overflow-hidden shadow-2xl border-4 border-white ring-1 ring-gray-200">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80" alt="attorney"
               class="w-full h-full object-cover"/>
        </div>

        <!-- Image 2 — top right -->
        <div class="absolute top-0 right-0 w-[210px] h-[225px] rounded-2xl overflow-hidden shadow-xl border-4 border-white ring-1 ring-gray-200">
          <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?w=600&q=80" alt="scales"
               class="w-full h-full object-cover"/>
        </div>

        <!-- Image 3 — bottom right -->
        <div class="absolute bottom-0 right-0 w-[210px] h-[210px] rounded-2xl overflow-hidden shadow-xl border-4 border-white ring-1 ring-gray-200">
          <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?w=600&q=80" alt="law books"
               class="w-full h-full object-cover"/>
        </div>

        <!-- Experience badge -->
        <div class="absolute bottom-4 left-[230px] w-[110px] h-[110px] rounded-full bg-gold flex flex-col items-center justify-center text-white shadow-xl ring-4 ring-white z-10">
          <i class="fas fa-balance-scale text-2xl mb-1"></i>
          <div class="text-xs font-bold text-center leading-tight">25 Years<br>Experience</div>
        </div>

      </div>

      <!-- Mobile collage: 3 images stacked nicely -->
      <div class="flex flex-col gap-3 lg:hidden">
        <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-white ring-1 ring-gray-200 h-[240px]">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80" alt="attorney" class="w-full h-full object-cover"/>
        </div>
        <div class="grid grid-cols-2 gap-3">
          <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-white ring-1 ring-gray-200 h-[160px]">
            <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?w=600&q=80" alt="scales" class="w-full h-full object-cover"/>
          </div>
          <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-white ring-1 ring-gray-200 h-[160px]">
            <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?w=600&q=80" alt="law books" class="w-full h-full object-cover"/>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="animate-[fadeIn_0.65s_ease_forwards]">
        <div class="text-[0.75rem] tracking-[0.2em] uppercase font-bold text-gold mb-3">About Us</div>
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-display font-bold text-forest leading-tight mb-5">A Legacy Of Legal Excellence</h2>
        <p class="text-gray-600 leading-relaxed mb-5 text-sm sm:text-base">Our team of experienced attorneys has a diverse range of expertise, covering a wide spectrum of legal areas. We specialize in corporate law, family law.</p>
        <ul class="space-y-3 mb-7">
          <li class="flex items-start gap-3 text-gray-700 text-sm sm:text-base"><span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2"></span>Committed to excellence in legal practice.</li>
          <li class="flex items-start gap-3 text-gray-700 text-sm sm:text-base"><span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2"></span>Act with honesty and uphold ethical principles.</li>
          <li class="flex items-start gap-3 text-gray-700 text-sm sm:text-base"><span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2"></span>Road Test Preparation with 98% success.</li>
          <li class="flex items-start gap-3 text-gray-700 text-sm sm:text-base"><span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2"></span>Meeting clients' needs is our priority.</li>
        </ul>
        <a href="#" class="inline-flex items-center gap-2 bg-gold text-white px-6 sm:px-8 py-3 rounded-full font-semibold hover:bg-gold-dark transition-all shadow-lg text-sm sm:text-base">
          More About <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>
</section>