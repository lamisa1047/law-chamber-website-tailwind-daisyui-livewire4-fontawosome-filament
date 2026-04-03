<!-- About Section -->
<section id="about-us" class="bg-[var(--color-background-primary)] font-[Jost] py-16 px-6 overflow-hidden">
    <div class="max-w-[1100px] mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE -->
        <div class="relative md:order-none order-first">
            <div class="relative">
                <div
                    class="absolute top-5 left-5 right-[-20px] bottom-[-20px] border border-[#C9A84C] pointer-events-none z-0">
                </div>
                <div class="absolute top-8 -left-7 flex flex-col gap-1.5 z-10">
                    <span class="block h-[1px] w-10 bg-[#C9A84C]"></span>
                    <span class="block h-[1px] w-7 bg-[#C9A84C]"></span>
                    <span class="block h-[1px] w-4 bg-[#C9A84C]"></span>
                </div>
                <div class="relative z-10 w-full aspect-[4/3] overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80"
                        alt="Law firm office"
                        class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
                        loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent pointer-events-none">
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="flex flex-col gap-7">

            <!-- Eyebrow + Heading -->
            <div>
                <div class="w-10 h-[1px] bg-[#C9A84C] mb-5"></div>
                <p class="text-[12px] tracking-[0.22em] uppercase text-[#8a7a52] mb-3 font-medium">
                    About the firm
                </p>
                <h2 class="text-[clamp(26px,3.5vw,42px)] leading-tight text-[var(--color-text-primary)]">
                    A Legacy of <em class="italic text-[#1a3a2a]">Legal</em><br>Excellence
                </h2>
            </div>

            <!-- Body -->
            <p class="text-sm font-light text-[var(--color-text-secondary)] leading-relaxed">
                Our experienced attorneys bring together expertise across corporate, family, and civil law — helping
                individuals and organizations navigate complex legal challenges with clarity and confidence.
            </p>

            <!-- Stats -->
            {{-- <div class="grid grid-cols-3 border border-[var(--color-border-tertiary)] rounded-xl">
                <div class="text-center px-4 py-4 border-r border-[var(--color-border-tertiary)]">
                    <div class="font-serif text-[24px] font-bold text-[#1a3a2a] leading-none">26+</div>
                    <div class="text-[10px] tracking-[0.15em] uppercase text-[#8a7a52] mt-1">Years</div>
                </div>
                <div class="text-center px-4 py-4 border-r border-[var(--color-border-tertiary)]">
                    <div class="font-serif text-[24px] font-bold text-[#1a3a2a] leading-none">840</div>
                    <div class="text-[10px] tracking-[0.15em] uppercase text-[#8a7a52] mt-1">Cases Won</div>
                </div>
                <div class="text-center px-4 py-4">
                    <div class="font-serif text-[24px] font-bold text-[#1a3a2a] leading-none">12</div>
                    <div class="text-[10px] tracking-[0.15em] uppercase text-[#8a7a52] mt-1">Attorneys</div>
                </div>
            </div> --}}

            {{--
            <!-- CTA -->
            <a href="#"
                class="self-start inline-flex items-center gap-2.5 border border-[#1a3a2a] px-6 py-3 text-[12px] tracking-[0.18em] uppercase font-medium text-[#1a3a2a] transition-all duration-300 hover:bg-[#1a3a2a] hover:text-white group">
                More About Us
                <svg class="transition-transform duration-300 group-hover:translate-x-1" width="14" height="14"
                    fill="none" viewBox="0 0 14 14">
                    <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a> --}}

        </div>

    </div>
</section>