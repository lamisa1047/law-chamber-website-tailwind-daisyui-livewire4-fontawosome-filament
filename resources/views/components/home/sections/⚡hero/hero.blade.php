<!-- ══════════ HERO ══════════ -->
<style>
  /* ── Blinking WhatsApp button ── */
  @keyframes wa-pulse {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }

    50% {
      box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
    }
  }

  @keyframes wa-bg {

    0%,
    100% {
      background-color: #25D366;
    }

    50% {
      background-color: #128C7E;
    }
  }

  .wa-btn {
    animation: wa-pulse 1.4s ease-in-out infinite, wa-bg 1.4s ease-in-out infinite;
  }

  /* ── Decorative gold corner frame ── */
  .img-frame-outer {
    position: relative;
  }

  .img-frame-outer::before,
  .img-frame-outer::after {
    content: '';
    position: absolute;
    width: 36px;
    height: 36px;
    border-color: #B8935A;
    border-style: solid;
    opacity: 0.7;
    z-index: 2;
    pointer-events: none;
  }

  .img-frame-outer::before {
    top: -8px;
    left: -8px;
    border-width: 2px 0 0 2px;
  }

  .img-frame-outer::after {
    bottom: -8px;
    right: -8px;
    border-width: 0 2px 2px 0;
  }

  .img-frame-inner {
    position: relative;
  }

  .img-frame-inner::before,
  .img-frame-inner::after {
    content: '';
    position: absolute;
    width: 36px;
    height: 36px;
    border-color: #B8935A;
    border-style: solid;
    opacity: 0.45;
    z-index: 2;
    pointer-events: none;
  }

  .img-frame-inner::before {
    top: -8px;
    right: -8px;
    border-width: 2px 2px 0 0;
  }

  .img-frame-inner::after {
    bottom: -8px;
    left: -8px;
    border-width: 0 0 2px 2px;
  }

  /* ── Floating icons ── */
  @keyframes float {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-8px);
    }
  }

  .float-icon {
    animation: float 3s ease-in-out infinite;
  }

  .float-icon-delay {
    animation: float 3s ease-in-out 1.5s infinite;
  }

  /* ── Slide-in on load ── */
  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .slide-up {
    animation: slideUp .7s ease forwards;
  }

  .delay-100 {
    animation-delay: .1s;
    opacity: 0;
  }

  .delay-200 {
    animation-delay: .2s;
    opacity: 0;
  }

  .delay-300 {
    animation-delay: .3s;
    opacity: 0;
  }

  .delay-400 {
    animation-delay: .4s;
    opacity: 0;
  }

  .delay-500 {
    animation-delay: .5s;
    opacity: 0;
  }

  .delay-600 {
    animation-delay: .6s;
    opacity: 0;
  }

  /* ── Subtle noise overlay ── */
  .hero-bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.04'/%3E%3C/svg%3E");
    background-size: 200px;
    pointer-events: none;
    border-radius: inherit;
  }

  /* ── Gold shimmer line on image ── */
  @keyframes shimmer {
    0% {
      left: -100%;
    }

    100% {
      left: 200%;
    }
  }

  .img-shimmer::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 60%;
    height: 100%;
    background: linear-gradient(120deg, transparent 30%, rgba(184, 147, 90, 0.12) 50%, transparent 70%);
    animation: shimmer 4s ease-in-out infinite;
    pointer-events: none;
    z-index: 3;
  }
</style>

<!-- ════════════════════════════════════
     HERO SECTION
════════════════════════════════════ -->
<section class="hero-bg relative overflow-hidden bg-forest min-h-145">

  <!-- Corner accent lines -->
  {{-- <div
    class="absolute top-0 left-0 w-24 h-24 border-t-2 border-l-2 border-gold/30 rounded-tl-3xl pointer-events-none">
  </div>
  <div
    class="absolute bottom-0 right-0 w-24 h-24 border-b-2 border-r-2 border-gold/30 rounded-br-3xl pointer-events-none">
  </div> --}}

  <!-- Background decorative circles -->
  <div class="absolute -top-20 -left-20 w-72 h-72 rounded-full bg-forest-light/40 blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-20 right-1/3 w-96 h-96 rounded-full bg-gold/5 blur-3xl pointer-events-none"></div>

  <!-- ── Floating decorative icons ── -->
  <div class="float-icon absolute top-6 right-[44%] md:right-[38%] text-gold/60 text-2xl hidden sm:block">
    <i class="fas fa-cog"></i>
  </div>
  <div class="float-icon-delay absolute top-5 right-[30%] md:right-[24%] text-gold/50 text-xl hidden sm:block">
    <i class="far fa-comment-dots"></i>
  </div>
  <div class="float-icon absolute bottom-8 right-[35%] md:right-[28%] text-gold/50 text-3xl hidden sm:block">
    <i class="fas fa-balance-scale"></i>
  </div>
  <div class="float-icon-delay absolute bottom-10 left-[38%] md:left-[34%] text-gold/40 text-2xl hidden md:block">
    <i class="fas fa-file-alt"></i>
  </div>

  <!-- ── Main grid ── -->
  <div
    class="relative container mx-auto z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center min-h-145 px-6 py-10 md:px-12 md:py-14 lg:px-16">

    <!-- LEFT: Text content -->
    <div class="flex flex-col justify-center space-y-6 order-2 lg:order-1">

      <!-- Eyebrow label -->
      <div class="slide-up delay-100 flex items-center gap-2">
        <div class="h-px w-8 bg-gold"></div>
        <span class="text-gold text-xs font-body uppercase tracking-[.2em] font-semibold">Professional Legal
          Services</span>
      </div>

      <!-- Headline -->
      <h1 class="slide-up delay-200 font-display text-5xl sm:text-6xl xl:text-7xl font-black leading-[1.05] text-white">
        {{$heroSection->title}}
      </h1>

      <!-- Body copy -->
      <p class="slide-up delay-300 text-white/60 font-body text-sm md:text-base leading-relaxed max-w-sm">
        {{$heroSection->subtitle}}
      </p>

      <!-- CTA Buttons -->
      <div class="slide-up delay-400 flex flex-col sm:flex-row items-start sm:items-center gap-4">

        <!-- WhatsApp blinking button -->
        @if ($contact->whatsapp)
        <a href="{{$contact->whatsapp}}?text=I'd%20like%20to%20book%20an%20appointment" target="_blank"
          class="wa-btn inline-flex items-center gap-3 px-6 py-3 rounded-full text-white font-body font-bold text-sm shadow-lg transition-transform hover:scale-105 cursor-pointer no-underline">
          <i class="fab fa-whatsapp text-xl"></i>
          Book an Appointment
        </a>
        @endif
      </div>

    </div><!-- /left -->

    <!-- RIGHT: Large Office Image Frame -->
    <div class="slide-up delay-300 flex justify-center lg:justify-end order-1 lg:order-2 py-4">

      <!-- Outer glow -->
      <div
        class="absolute inset-y-4 right-4 left-1/2 bg-gold/8 blur-3xl rounded-3xl pointer-events-none hidden lg:block">
      </div>

      <!-- Frame wrapper -->
      <div class="img-frame-outer img-frame-inner relative w-full max-w-140 lg:max-w-none lg:w-140 xl:w-155">

        <!-- Main image container — 16:10 landscape ratio -->
        <div class="img-shimmer relative w-full overflow-hidden rounded-2xl border border-gold/25 shadow-2xl"
          style="aspect-ratio: 16/10;">

          <!-- ── REPLACE src with your actual office image ── -->
          @if($heroSection->image)
          <img src="/storage/{{$heroSection->image}}" alt="Law office interior"
            class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700" />
          @endif

          <!-- Bottom gradient overlay -->
          <div
            class="absolute inset-0 bg-linear-to-t from-forest/60 via-transparent to-transparent pointer-events-none">
          </div>

        </div>

        <!-- Accent dots — top right -->
        <div class="absolute -top-4 -right-4 grid grid-cols-3 gap-1 pointer-events-none opacity-40">
          <span class="w-1 h-1 rounded-full bg-gold"></span><span class="w-1 h-1 rounded-full bg-gold"></span><span
            class="w-1 h-1 rounded-full bg-gold"></span>
          <span class="w-1 h-1 rounded-full bg-gold"></span><span class="w-1 h-1 rounded-full bg-gold"></span><span
            class="w-1 h-1 rounded-full bg-gold"></span>
          <span class="w-1 h-1 rounded-full bg-gold"></span><span class="w-1 h-1 rounded-full bg-gold"></span><span
            class="w-1 h-1 rounded-full bg-gold"></span>
        </div>

        <!-- Accent dots — bottom left -->
        <div class="absolute -bottom-4 -left-4 grid grid-cols-3 gap-1 pointer-events-none opacity-30">
          <span class="w-1 h-1 rounded-full bg-gold"></span><span class="w-1 h-1 rounded-full bg-gold"></span><span
            class="w-1 h-1 rounded-full bg-gold"></span>
          <span class="w-1 h-1 rounded-full bg-gold"></span><span class="w-1 h-1 rounded-full bg-gold"></span><span
            class="w-1 h-1 rounded-full bg-gold"></span>
          <span class="w-1 h-1 rounded-full bg-gold"></span><span class="w-1 h-1 rounded-full bg-gold"></span><span
            class="w-1 h-1 rounded-full bg-gold"></span>
        </div>

      </div><!-- /frame wrapper -->

    </div><!-- /right -->
  </div><!-- /grid -->

  <!-- Bottom gold rule -->
  <div
    class="absolute bottom-0 left-0 right-0 h-0.75 bg-linear-to-r from-transparent via-gold to-transparent opacity-50">
  </div>

</section><!-- /hero -->