<div>

    <!-- ══════════ HEADER ══════════ -->
    <section class="bg-forest py-14 sm:py-20">
        <div class="max-w-5xl mx-auto px-6 flex flex-col sm:flex-row items-center sm:items-end gap-8">

            <!-- Photo -->
            <div class="relative shrink-0">
                <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-2xl overflow-hidden border-2 border-gold/40">
                    <img src="{{ $attorney->image ? asset('storage/' . $attorney->image) : 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80' }}"
                        alt="{{ $attorney->name }}" class="w-full h-full object-cover object-top" />
                </div>

                <!-- Online indicator -->
                <span
                    class="absolute bottom-2 right-2 w-3.5 h-3.5 rounded-full bg-green-400 border-2 border-forest"></span>
            </div>

            <!-- Identity -->
            <div class="flex-1 text-center sm:text-left">

                <span
                    class="inline-block bg-gold/20 border border-gold/40 text-gold text-[10px] font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-3">
                    {{ $attorney->title }}
                </span>

                <h1 class="text-3xl sm:text-4xl font-display font-bold text-white leading-tight mb-2">
                    {{ $attorney->name }}
                </h1>

                <p class="text-white/50 text-sm mb-4">
                    {{ $attorney->working_area }} &nbsp;·&nbsp; {{ $attorney->experience }}
                </p>

                <!-- Practice Areas -->
                <div class="flex flex-wrap justify-center sm:justify-start gap-2">
                    @foreach(($attorney->practice_areas ?? []) as $area)
                    <span class="bg-white/10 text-white/70 text-xs px-3 py-1 rounded-full">
                        {{ $area }}
                    </span>
                    @endforeach
                </div>
            </div>

            <!-- Quick actions -->
            <div class="flex gap-2 shrink-0">

                @if($attorney->linkedin)
                <a href="{{ $attorney->linkedin }}"
                    class="w-10 h-10 rounded-xl border border-gold/30 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all">
                    <i class="fab fa-linkedin text-sm"></i>
                </a>
                @endif

                @if($attorney->twitter)
                <a href="{{ $attorney->twitter }}"
                    class="w-10 h-10 rounded-xl border border-gold/30 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all">
                    <i class="fab fa-twitter text-sm"></i>
                </a>
                @endif

                @if($attorney->email)
                <a href="mailto:{{ $attorney->email }}"
                    class="w-10 h-10 rounded-xl border border-gold/30 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all">
                    <i class="fas fa-envelope text-sm"></i>
                </a>
                @endif

            </div>

        </div>
    </section>

    <!-- ══════════ BODY ══════════ -->
    <section class="py-12 sm:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- ═══ Main Content ═══ -->
                <div class="lg:col-span-2 flex flex-col gap-6">

                    <!-- About -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-7">
                        <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-4">About</p>

                        @if ($attorney?->about)
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{$attorney?->about}}
                        </p>
                        @endif
                    </div>

                    <!-- Credentials -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-7">
                        <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-5">Credentials</p>

                        <ul class="space-y-3">

                            @foreach(($attorney?->credentials ?? []) as $item)
                            <li class="flex items-start gap-3">

                                <span
                                    class="mt-1 w-5 h-5 rounded-md bg-gold/10 border border-gold/20 flex items-center justify-center shrink-0">
                                    <i class="fas fa-check text-gold text-[9px]"></i>
                                </span>

                                <span class="text-sm text-gray-600 leading-relaxed">
                                    {{ $item['credential'] }}
                                </span>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

                <!-- ═══ Sidebar ═══ -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">

                    <div class="bg-forest px-5 py-4">
                        <p class="text-[10px] font-bold tracking-widests uppercase text-gold">Contact</p>
                    </div>

                    <div class="p-5 space-y-3">

                        @if($attorney?->email)
                        <a href="mailto:{{ $attorney?->email }}" class="flex items-center gap-3 group">
                            <div class="w-8 h-8 rounded-lg bg-forest/10 flex items-center justify-center shrink-0">
                                <i class="fas fa-envelope text-forest text-xs"></i>
                            </div>
                            <div>
                                <div class="text-[10px] text-gray-400 uppercase tracking-widest">Email</div>
                                <div class="text-sm text-gray-700 group-hover:text-forest transition-colors">
                                    {{ $attorney?->email }}
                                </div>
                            </div>
                        </a>
                        @endif

                        @if($attorney?->phone)
                        <a href="tel:{{ $attorney?->phone }}" class="flex items-center gap-3 group">
                            <div class="w-8 h-8 rounded-lg bg-forest/10 flex items-center justify-center shrink-0">
                                <i class="fas fa-phone text-forest text-xs"></i>
                            </div>
                            <div>
                                <div class="text-[10px] text-gray-400 uppercase tracking-widest">Phone</div>
                                <div class="text-sm text-gray-700 group-hover:text-forest transition-colors">
                                    {{ $attorney?->phone }}
                                </div>
                            </div>
                        </a>
                        @endif

                        @if($attorney?->whatsapp)
                        <div class="pt-2">
                            <a href="{{ $attorney?->whatsapp }}" target="_blank"
                                class="block w-full text-center bg-forest hover:bg-forest/90 text-white text-xs font-semibold py-3 rounded-xl transition-all">
                                Book a Consultation
                            </a>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>

</div>