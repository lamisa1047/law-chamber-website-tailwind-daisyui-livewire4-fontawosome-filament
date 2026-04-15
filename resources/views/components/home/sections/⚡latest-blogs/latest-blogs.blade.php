<!-- ══════════ BLOG ══════════ -->
<section id="blog" class="py-12 sm:py-16 lg:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-8 sm:mb-12">
            <div>
                <div class="text-[0.75rem] tracking-[0.2em] uppercase font-bold text-gold mb-2">News & Blog</div>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-forest">Our News & Update</h2>
                <div class="w-15 h-0.75 bg-linear-to-r from-gold to-gold-light rounded-sm mt-3"></div>
            </div>
            <div class="flex gap-3">
                <button
                    class="w-10 h-10 rounded-full border-2 border-gold text-gold hover:bg-gold hover:text-white transition-all flex items-center justify-center"><i
                        class="fas fa-chevron-left text-sm"></i></button>
                <button
                    class="w-10 h-10 rounded-full bg-gold text-white hover:bg-gold-dark transition-all flex items-center justify-center"><i
                        class="fas fa-chevron-right text-sm"></i></button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">

            @foreach ($this->latestPost as $post)
            <div
                class="card bg-white shadow-sm overflow-hidden hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.18)] transition-all duration-300">

                @if ($post?->image)
                <figure class="relative">
                    <img src="/storage/{{$post?->image}}" alt="{{$post?->title}}"
                        class="w-full h-44 sm:h-48 object-cover" />
                </figure>
                @endif

                <div class="card-body p-4 sm:p-5">
                    <div class="text-xs text-gray-400 mb-2 flex items-center gap-2"><i
                            class="far fa-calendar text-gold"></i>{{$post?->created_at->format('d f, Y')}}</div>
                    <h3 class="font-display font-bold text-forest leading-tight text-sm sm:text-base">
                        {{$post?->title}}</h3>
                    <a href="{{route('post', ['slug' => $post?->slug])}}"
                        class="text-gold font-semibold text-sm flex items-center gap-2 hover:gap-3 transition-all mt-2">Read
                        More <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
            </div>
            @endforeach


            <div
                class="card bg-white shadow-sm overflow-hidden hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.18)] transition-all duration-300">
                <figure class="relative">
                    <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?w=600&q=80" alt="blog"
                        class="w-full h-44 sm:h-48 object-cover" />
                </figure>
                <div class="card-body p-4 sm:p-5">
                    <div class="text-xs text-gray-400 mb-2 flex items-center gap-2"><i
                            class="far fa-calendar text-gold"></i> March 5, 2026</div>
                    <h3 class="font-display font-bold text-forest leading-tight text-sm sm:text-base">I mix legal
                        expertise with project management skills</h3>
                    <a href="#"
                        class="text-gold font-semibold text-sm flex items-center gap-2 hover:gap-3 transition-all mt-2">Read
                        More <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
            </div>

            <div
                class="card bg-white shadow-sm overflow-hidden hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.18)] transition-all duration-300 sm:col-span-2 lg:col-span-1">
                <figure class="relative">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600&q=80" alt="blog"
                        class="w-full h-44 sm:h-48 object-cover" />
                </figure>
                <div class="card-body p-4 sm:p-5">
                    <div class="text-xs text-gray-400 mb-2 flex items-center gap-2"><i
                            class="far fa-calendar text-gold"></i> Feb 28, 2026</div>
                    <h3 class="font-display font-bold text-forest leading-tight text-sm sm:text-base">Affordable legal
                        representation with experience and knowledge</h3>
                    <a href="#"
                        class="text-gold font-semibold text-sm flex items-center gap-2 hover:gap-3 transition-all mt-2">Read
                        More <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>