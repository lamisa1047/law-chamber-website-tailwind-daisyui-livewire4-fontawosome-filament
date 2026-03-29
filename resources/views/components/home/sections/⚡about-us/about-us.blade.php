<!-- About Section -->
<section class="bg-[var(--color-background-primary)] font-[Jost] py-16 px-6 overflow-hidden">
    <div class="max-w-[1100px] mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE -->
        <div class="relative flex items-center justify-center md:order-none order-first">
            <div class="relative w-[min(340px,80vw)] aspect-[3/4]">

                <!-- Border Frame -->
                <div
                    class="absolute top-6 left-6 right-[-24px] bottom-[-24px] border border-[#C9A84C] pointer-events-none">
                </div>

                <!-- Marker -->
                <div class="absolute top-10 -left-7 flex flex-col gap-1.5">
                    <span class="block h-[1px] w-10 bg-[#C9A84C]"></span>
                    <span class="block h-[1px] w-7 bg-[#C9A84C]"></span>
                    <span class="block h-[1px] w-4 bg-[#C9A84C]"></span>
                </div>

                <!-- Image -->
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&q=80" alt="Attorney"
                    class="w-full h-full object-cover object-top rounded-xl transition-transform duration-700 hover:scale-105"
                    loading="lazy" />

                {{-- <!-- Badge -->
        <div class="absolute -bottom-5 -right-5 bg-[#1a3a2a] text-white text-[11px] tracking-[0.12em] uppercase font-medium px-5 py-3 text-center leading-tight">
          Est. 1998<br>New York
        </div> --}}

            </div>
        </div>

        <!-- CONTENT -->
        <div>

            <!-- Rule -->
            <div class="w-12 h-[1px] bg-[#C9A84C] mb-6"></div>

            <!-- Eyebrow -->
            <p class="text-[11px] tracking-[0.22em] uppercase text-[#8a7a52] mb-5 font-medium">
                About the firm
            </p>

            <!-- Heading -->
            <h2 class="font-serif text-[clamp(28px,4vw,48px)] leading-tight text-[var(--color-text-primary)] mb-3">
                A Legacy of <br>
                <em class="italic text-[#1a3a2a]">Legal</em> Excellence
            </h2>

            <!-- Subheading -->
            <p class="font-serif italic text-[clamp(13px,1.5vw,16px)] text-[#7a8f80] mb-8 leading-relaxed">
                Trusted counsel for individuals,<br>
                families, and enterprises since 1998.
            </p>

            <!-- Divider -->
            <div class="flex items-center gap-3 mb-7">
                <span class="flex-1 h-[1px] bg-[var(--color-border-tertiary)]"></span>
                <span class="text-[10px] tracking-[0.15em] uppercase text-[#C9A84C] font-medium whitespace-nowrap">
                    our practice
                </span>
                <span class="flex-1 h-[1px] bg-[var(--color-border-tertiary)]"></span>
            </div>

            <!-- Body -->
            <p class="text-sm font-light leading-[1.85] text-[var(--color-text-secondary)] mb-10 max-w-[480px]">
                Our team of experienced attorneys brings together a wide range of legal expertise — from corporate and
                family law to civil litigation. We help individuals and organizations navigate complex legal challenges
                with clarity, confidence, and precision.
            </p>

            {{-- <!-- Stats -->
      <div class="grid grid-cols-3 border border-[var(--color-border-tertiary)] mb-10">
        <div class="text-center px-5 py-4 border-r border-[var(--color-border-tertiary)]">
          <div class="font-serif text-[26px] font-bold text-[#1a3a2a] leading-none">26+</div>
          <div class="text-[10px] tracking-[0.15em] uppercase text-[#8a7a52] mt-1 font-medium">Years</div>
        </div>
        <div class="text-center px-5 py-4 border-r border-[var(--color-border-tertiary)]">
          <div class="font-serif text-[26px] font-bold text-[#1a3a2a] leading-none">840</div>
          <div class="text-[10px] tracking-[0.15em] uppercase text-[#8a7a52] mt-1 font-medium">Cases Won</div>
        </div>
        <div class="text-center px-5 py-4">
          <div class="font-serif text-[26px] font-bold text-[#1a3a2a] leading-none">12</div>
          <div class="text-[10px] tracking-[0.15em] uppercase text-[#8a7a52] mt-1 font-medium">Attorneys</div>
        </div>
      </div> --}}

            <!-- CTA -->
            <a href="#"
                class="inline-flex items-center gap-2.5 border border-[#1a3a2a] px-6 py-3 text-[12px] tracking-[0.18em] uppercase font-medium text-[#1a3a2a] transition-all duration-300 hover:bg-[#1a3a2a] hover:text-white group">
                More About Us
                <svg class="transition-transform duration-300 group-hover:translate-x-1" width="14" height="14"
                    fill="none" viewBox="0 0 14 14">
                    <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>

        </div>

    </div>
</section>
