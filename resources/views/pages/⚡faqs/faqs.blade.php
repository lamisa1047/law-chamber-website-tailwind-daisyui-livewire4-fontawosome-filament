<div>
  <section class="py-14 sm:py-20 bg-forest text-white text-center">
    <h1 class="text-3xl sm:text-5xl font-display font-bold">Frequently Asked Questions</h1>
    <p class="text-sm sm:text-base text-white/50 mt-3">
      Find answers to the most common questions about our services
    </p>
  </section>

  <!-- ══════════ FAQ SECTION ══════════ -->
  <section class="py-12 sm:py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">

      <div class="space-y-3">

        @foreach ($faqs as $faq)
        <div x-data="{ open: false }" class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden">

          <!-- Question -->
          <button @click="open = !open" class="w-full flex items-center justify-between px-6 py-5 text-left gap-4">
            <span class="text-sm sm:text-base font-semibold text-forest leading-snug">
              {{ $faq->question }}
            </span>
            <span
              class="w-7 h-7 rounded-lg bg-forest/5 flex items-center justify-center shrink-0 transition-colors duration-200"
              :class="open ? 'bg-gold/10' : 'bg-forest/5'">
              <i class="fas text-xs transition-transform duration-300"
                :class="open ? 'fa-minus text-gold' : 'fa-angle-down text-forest'"></i>
            </span>
          </button>

          <!-- Answer -->
          <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-1" class="px-6 pb-5 border-t border-gray-100"
            style="display: none;">
            <p class="text-sm text-gray-500 font-light leading-relaxed pt-4">
              {{ $faq->answer }}
            </p>
          </div>

        </div>
        @endforeach

      </div>

      <!-- Contact CTA -->
      <div class="mt-12 text-center">
        <h3 class="text-xl font-bold text-forest">Still have questions?</h3>
        <p class="text-gray-500 text-sm mt-2">Contact us and we'll be happy to help</p>
        <a href="/contact-us"
          class="inline-flex items-center gap-2 mt-4 px-6 py-2.5 bg-forest hover:bg-forest/90 text-white text-sm rounded-xl font-semibold transition-all">
          Contact Us
          <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>

    </div>
  </section>
</div>