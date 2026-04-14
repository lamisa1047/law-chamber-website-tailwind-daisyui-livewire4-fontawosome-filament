<div>

    <!-- ══════════ HEADER ══════════ -->
    <section class="py-14 sm:py-20 bg-forest text-white text-center">
        <div class="max-w-3xl mx-auto px-4">
            <!-- Category badge -->

            @if ($this->post()?->category?->name)
            <span
                class="inline-block bg-gold/20 border border-gold/40 text-gold text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">
                {{$this->post()->category->name}}
            </span>
            @endif

            <!-- Title -->
            <h1 class="text-3xl sm:text-5xl font-display font-bold leading-tight mb-5">
                {{$this->post()?->title}}
            </h1>
            <!-- Meta -->
            <div class="flex flex-wrap items-center justify-center gap-4 text-sm text-white/50">
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-calendar text-gold"></i>
                    {{$this->post()?->created_at->format('d F, Y')}}
                </span>
                <span class="w-1 h-1 rounded-full bg-white/20"></span>
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-clock text-gold"></i>
                    {{$this->post()?->created_at->since()}}
                </span>
            </div>
        </div>
    </section>

    <!-- ══════════ CONTENT ══════════ -->
    <section class="py-12 sm:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 items-start">

                <!-- ═══ Main Article ═══ -->
                <div class="lg:col-span-3">

                    <!-- Cover Image -->
                    @if ($this->post()?->image)
                    <div class="rounded-2xl overflow-hidden shadow-md mb-10">
                        <img src="/storage/{{$this->post()?->image}}" class="w-full h-64 sm:h-96 object-cover"
                            alt="{{$this->post()?->title}}" />
                    </div>
                    @endif


                    <!-- Article Card -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 px-6 sm:px-10 py-10">
                        <div class="prose prose-lg max-w-none w-full
                                prose-p:font-light
                                prose-p:text-gray-600
                                prose-p:leading-relaxed
                                prose-headings:font-display
                                prose-headings:text-forest
                                prose-strong:font-medium
                                prose-strong:text-gray-700
                                prose-a:text-gold
                                prose-a:no-underline
                                hover:prose-a:underline
                                prose-li:text-gray-600
                                prose-li:font-light">
                            {!! $this->post()?->content !!}
                        </div>
                    </div>

                </div>

                <!-- ═══ Sidebar ═══ -->
                <div class="lg:col-span-1 flex flex-col gap-6 lg:sticky lg:top-24">

                    <!-- Categories -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                        <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-4">Categories</p>
                        <ul class="space-y-2">

                            @foreach ($this->categories() as $item)
                            <li>
                                <a href="{{route('blogs', ['category' => $item->slug])}}" class="flex items-center justify-between text-sm text-gray-600 hover:text-forest
                                    transition-colors py-1 group">
                                    <span class="flex items-center gap-2">
                                        <i class="fas fa-chevron-right text-[9px] text-gold"></i>
                                        {{$item->name}}
                                    </span>
                                    <span
                                        class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">12</span>
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    {{--
                    <!-- Recent Posts -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                        <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-4">Recent Posts</p>
                        <div class="space-y-4">

                            <a href="#" class="flex gap-3 group">
                                <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?w=200&q=80"
                                    class="w-14 h-14 rounded-xl object-cover shrink-0" />
                                <div>
                                    <p
                                        class="text-xs font-semibold text-gray-700 group-hover:text-forest leading-snug transition-colors line-clamp-2">
                                        I mix legal expertise with project management skills
                                    </p>
                                    <p class="text-[11px] text-gray-400 mt-1">March 5, 2026</p>
                                </div>
                            </a>

                            <a href="#" class="flex gap-3 group">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=200&q=80"
                                    class="w-14 h-14 rounded-xl object-cover shrink-0" />
                                <div>
                                    <p
                                        class="text-xs font-semibold text-gray-700 group-hover:text-forest leading-snug transition-colors line-clamp-2">
                                        Affordable legal representation with experience
                                    </p>
                                    <p class="text-[11px] text-gray-400 mt-1">Feb 28, 2026</p>
                                </div>
                            </a>

                            <a href="#" class="flex gap-3 group">
                                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=200&q=80"
                                    class="w-14 h-14 rounded-xl object-cover shrink-0" />
                                <div>
                                    <p
                                        class="text-xs font-semibold text-gray-700 group-hover:text-forest leading-snug transition-colors line-clamp-2">
                                        Understanding cyber crime laws in Bangladesh
                                    </p>
                                    <p class="text-[11px] text-gray-400 mt-1">Feb 15, 2026</p>
                                </div>
                            </a>

                        </div>
                    </div> --}}

                    <!-- Tags -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                        <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-4">Tags</p>
                        <div class="flex flex-wrap gap-2">

                            @foreach ($this->post()?->tags as $item)
                            <span
                                class="bg-gray-100 text-gray-600 text-xs font-medium px-3 py-1 rounded-full hover:bg-forest hover:text-white transition-all cursor-pointer">
                                {{$item}}
                            </span>
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</div>