<!-- ══════════ MANAGING PARTNER ══════════ -->
<section class="py-16 lg:py-24 bg-gray-100">
  <div class="max-w-5xl mx-auto px-6">

    <div class="bg-white border border-gray-100 rounded-[20px] shadow-xl overflow-hidden flex flex-col lg:flex-row">

      <!-- Left Panel (Dark) -->
      <div class="bg-forest flex flex-col items-center text-center px-8 py-10 lg:w-75 shrink-0">

        <div class="w-36 h-36 rounded-full border-[3px] border-gold p-1 mb-6">
          <img
            src="{{ $managingPartner?->attorney?->image ? asset('storage/'.$managingPartner->attorney->image) : 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80' }}"
            alt="{{ $managingPartner?->attorney?->name ?? 'Managing Partner' }}"
            class="w-full h-full rounded-full object-cover" />
        </div>

        <span
          class="inline-block border border-gold/40 bg-gold/10 text-gold text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-3">
          Managing Partner
        </span>

        <h2 class="text-white text-xl font-display font-bold leading-snug mb-1">
          {{ $managingPartner?->attorney?->name ?? 'N/A' }}
        </h2>

        <p class="text-white/50 text-xs leading-relaxed mb-4">
          {{ $managingPartner?->attorney?->title ?? 'Supreme Court Advocate' }}
        </p>

        <div class="w-10 h-0.5 bg-gold rounded mb-4"></div>

        <p class="text-white/40 text-xs leading-relaxed">
          {!! nl2br(e($managingPartner?->attorney?->working_area ?? '')) !!}
        </p>

      </div>

      <!-- Right Panel -->
      <div class="flex-1 flex flex-col px-8 sm:px-10 py-10 gap-8">

        <!-- Top -->
        <div>
          <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-4">
            Credentials & Experience
          </p>

          <div class="flex flex-wrap gap-2">
            <span
              class="inline-flex items-center gap-1.5 bg-forest/5 border border-forest/10 text-forest text-xs font-medium px-3 py-1.5 rounded-full">
              <i class="fas fa-briefcase text-[10px] text-gold"></i>
              {{ $managingPartner?->attorney?->experience ?? '30+ Years Practice' }}
            </span>

            <span
              class="inline-flex items-center gap-1.5 bg-forest/5 border border-forest/10 text-forest text-xs font-medium px-3 py-1.5 rounded-full">
              <i class="fas fa-landmark text-[10px] text-gold"></i>
              Supreme Court
            </span>

            <span
              class="inline-flex items-center gap-1.5 bg-forest/5 border border-forest/10 text-forest text-xs font-medium px-3 py-1.5 rounded-full">
              <i class="fas fa-graduation-cap text-[10px] text-gold"></i>
              Lincoln's Inn
            </span>
          </div>
        </div>

        <!-- Credentials list -->
        <ul class="space-y-3">
          @foreach(($managingPartner?->attorney?->credentials ?? []) as $item)
          <li class="flex items-start gap-3 group">
            <span
              class="mt-1.5 w-5 h-5 rounded-md bg-gold/10 border border-gold/20 flex items-center justify-center shrink-0">
              <i class="fas fa-check text-gold text-[9px]"></i>
            </span>
            <span class="text-gray-600 text-sm leading-relaxed">
              {{ $item['credential'] }}
            </span>
          </li>
          @endforeach
        </ul>

        <!-- Bottom -->
        <div class="border-t border-gray-100 pt-6 flex flex-wrap items-center justify-between gap-4">

          <div class="flex flex-wrap gap-3">
            <a href="{{route('attorney',['id'=>$managingPartner?->attorney?->id])}}" class="inline-flex items-center gap-2 bg-forest hover:bg-forest/90 text-white text-sm font-medium px-5
              py-2.5 rounded-xl transition-all">
              View Full Profile
              <i class="fas fa-arrow-right text-[11px]"></i>
            </a>

            @if ($managingPartner?->attorney?->whatsapp)
            <a href="{{ $managingPartner?->attorney?->whatsapp }}"
              class="inline-flex items-center gap-2 border border-gray-200 hover:border-forest hover:bg-gray-50 text-forest text-sm font-medium px-5 py-2.5 rounded-xl transition-all">
              <i class="fa-brands fa-whatsapp text-2xl"></i>
              Contact Now
            </a>
            @endif
          </div>

          <div class="flex gap-2">

            @if($managingPartner?->attorney?->facebook)
            <a href="{{ $managingPartner->attorney->facebook }}"
              class="w-9 h-9 rounded-xl border border-gray-200 hover:border-gold hover:text-gold text-gray-400 flex items-center justify-center transition-all">
              <i class="fab fa-facebook text-sm"></i>
            </a>
            @endif
            
            @if($managingPartner?->attorney?->instagram)
            <a href="{{ $managingPartner->attorney->instagram }}"
              class="w-9 h-9 rounded-xl border border-gray-200 hover:border-gold hover:text-gold text-gray-400 flex items-center justify-center transition-all">
              <i class="fab fa-instagram text-sm"></i>
            </a>
            @endif

            @if($managingPartner?->attorney?->twitter)
            <a href="{{ $managingPartner->attorney->twitter }}"
              class="w-9 h-9 rounded-xl border border-gray-200 hover:border-gold hover:text-gold text-gray-400 flex items-center justify-center transition-all">
              <i class="fab fa-twitter text-sm"></i>
            </a>
            @endif

            @if($managingPartner?->attorney?->linkedin)
            <a href="{{ $managingPartner->attorney->linkedin }}"
              class="w-9 h-9 rounded-xl border border-gray-200 hover:border-gold hover:text-gold text-gray-400 flex items-center justify-center transition-all">
              <i class="fab fa-linkedin text-sm"></i>
            </a>
            @endif


          </div>

        </div>

      </div>
    </div>

  </div>
</section>