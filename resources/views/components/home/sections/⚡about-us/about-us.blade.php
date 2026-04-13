<!-- About Section -->
<section id="about-us" class="bg-(--color-background-primary) font-[Jost] py-16 px-6 overflow-hidden">
    <div class="max-w-275 mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE -->
        @if ($companyInfo->image)
        <div class="relative md:order-0 order-first">
            <div class="relative">
                <div class="absolute top-5 left-5 -right-5 -bottom-5 border border-[#C9A84C] pointer-events-none z-0">
                </div>
                <div class="absolute top-8 -left-7 flex flex-col gap-1.5 z-10">
                    <span class="block h-px w-10 bg-[#C9A84C]"></span>
                    <span class="block h-px w-7 bg-[#C9A84C]"></span>
                    <span class="block h-px w-4 bg-[#C9A84C]"></span>
                </div>

                <div class="relative z-10 w-full aspect-4/3 overflow-hidden rounded-xl">
                    <img src="/storage/{{$companyInfo->image}}" alt="Law firm office"
                        class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
                        loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent pointer-events-none">
                    </div>
                </div>

            </div>
        </div>
        @endif

        <!-- CONTENT -->
        @if ($companyInfo->about_title && $companyInfo->about_content)
        <div class="flex flex-col gap-7">

            <!-- Eyebrow + Heading -->
            <div>
                <div class="w-10 h-px bg-[#C9A84C] mb-5"></div>
                <p class="text-[12px] tracking-[0.22em] uppercase text-[#8a7a52] mb-3 font-medium">
                    About the firm
                </p>
                <h2 class="text-[clamp(26px,3.5vw,42px)] leading-tight text-(--color-text-primary)">
                    {{$companyInfo->about_title}}
                </h2>
            </div>

            <!-- Body -->
            <p class="text-sm font-light text-(--color-text-secondary) leading-relaxed">
                {{$companyInfo->about_content}}
            </p>

        </div>
        @endif

    </div>
</section>