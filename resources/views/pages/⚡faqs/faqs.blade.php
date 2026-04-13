<div>
  <section class="py-14 sm:py-20 bg-forest text-white text-center">
    <h1 class="text-3xl sm:text-5xl font-display font-bold">Frequently Asked Questions</h1>
    <p class="text-sm sm:text-base text-gray-300 mt-3">
      Find answers to the most common questions about our services
    </p>
  </section>

  <!-- ══════════ FAQ SECTION ══════════ -->
  <section class="py-12 sm:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">

      <div class="space-y-4">

        <!-- FAQ Item -->
        @foreach ($faqs as $faq)
        <div class="collapse collapse-arrow bg-white shadow-sm rounded-xl">
          <input type="radio" name="faq-accordion" />
          <div class="collapse-title text-lg font-semibold text-forest">
            {{$faq->question}}
          </div>
          <div class="collapse-content text-sm text-gray-600">
            {{$faq->answer}}
          </div>
          @endforeach

        </div>

        <!-- Contact CTA -->
        <div class="mt-12 text-center">
          <h3 class="text-xl font-bold text-forest">Still have questions?</h3>
          <p class="text-gray-500 text-sm mt-2">Contact us and we’ll be happy to help</p>

          <a href="/contact-us"
            class="inline-block mt-4 px-6 py-2 bg-gold text-white rounded-lg font-semibold hover:bg-gold-dark transition">
            Contact Us
          </a>
        </div>

      </div>
  </section>
</div>