<!-- ══════════ ATTORNEYS ══════════ -->
<section id="attorneys" class="py-12 sm:py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-8 sm:mb-12">
      <div>
        <div class="text-[0.75rem] tracking-[0.2em] uppercase font-bold text-gold mb-2">Our Team</div>
        <h2 class="text-3xl sm:text-4xl font-display font-bold text-forest">Meet Our Expert Legal Team</h2>
        <div class="w-15 h-0.75 bg-linear-to-r from-gold to-gold-light rounded-sm mt-3"></div>
      </div>
    </div>


    <!-- Attorney Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">

      @foreach($attorneys as $attorney)
      <div class="relative overflow-hidden rounded-2xl shadow-md group flex flex-col">

        <div class="relative">
          <img
            src="{{ $attorney->image ? asset('storage/' . $attorney->image) : 'https://via.placeholder.com/300x300' }}"
            alt="{{ $attorney->name }}" class="w-full h-36 sm:h-44 object-cover" />

          <div
            class="absolute inset-0 bg-forest/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">

            @if($attorney->facebook)
            <a href="{{ $attorney->facebook }}" class="text-gold hover:text-white transition-colors">
              <i class="fab fa-facebook text-xl"></i>
            </a>
            @endif

            @if($attorney->instagram)
            <a href="{{ $attorney->instagram }}" class="text-gold hover:text-white transition-colors">
              <i class="fab fa-instagram text-xl"></i>
            </a>
            @endif

            @if($attorney->twitter)
            <a href="{{ $attorney->twitter }}" class="text-gold hover:text-white transition-colors">
              <i class="fab fa-twitter text-xl"></i>
            </a>
            @endif

            @if($attorney->linkedin)
            <a href="{{ $attorney->linkedin }}" class="text-gold hover:text-white transition-colors">
              <i class="fab fa-linkedin text-xl"></i>
            </a>
            @endif

          </div>
        </div>

        <div class="p-2.5 sm:p-3 bg-white flex flex-col gap-2 flex-1">
          <div>
            <div class="font-bold text-forest text-xs sm:text-sm leading-tight">
              {{ $attorney->name }}
            </div>

            <div class="text-xs text-gray-400 mt-0.5">
              {{ $attorney->title }}
            </div>
          </div>

          <a href="{{ route('attorney', ['id' => $attorney->id]) }}"
            class="mt-auto w-full text-[10px] px-3 sm:text-xs font-semibold tracking-wide uppercase border border-forest/20 text-forest hover:bg-forest hover:text-white rounded-lg py-2 transition-all duration-200">
            View Details
          </a>
        </div>

      </div>
      @endforeach

    </div>

    <!-- Practice icons -->
    <div class="mt-10 sm:mt-14 py-6 sm:py-8 border-y border-gray-200">
      <div class="grid grid-cols-3 sm:grid-cols-6 gap-4 text-center">
        <div class="flex flex-col items-center gap-1.5 text-forest hover:text-gold transition-colors cursor-pointer"><i
            class="fas fa-balance-scale text-xl sm:text-2xl"></i><span class="text-xs font-semibold">Civil Law</span>
        </div>
        <div class="flex flex-col items-center gap-1.5 text-forest hover:text-gold transition-colors cursor-pointer"><i
            class="fas fa-landmark text-xl sm:text-2xl"></i><span class="text-xs font-semibold">Criminal Law</span>
        </div>
        <div class="flex flex-col items-center gap-1.5 text-forest hover:text-gold transition-colors cursor-pointer"><i
            class="fas fa-file-contract text-xl sm:text-2xl"></i><span class="text-xs font-semibold">Contract Law</span>
        </div>
        <div class="flex flex-col items-center gap-1.5 text-forest hover:text-gold transition-colors cursor-pointer"><i
            class="fas fa-users text-xl sm:text-2xl"></i><span class="text-xs font-semibold">Family Law</span></div>
        <div class="flex flex-col items-center gap-1.5 text-forest hover:text-gold transition-colors cursor-pointer"><i
            class="fas fa-building text-xl sm:text-2xl"></i><span class="text-xs font-semibold">Corporate Law</span>
        </div>
        <div class="flex flex-col items-center gap-1.5 text-forest hover:text-gold transition-colors cursor-pointer"><i
            class="fas fa-globe text-xl sm:text-2xl"></i><span class="text-xs font-semibold">International</span></div>
      </div>
    </div>
  </div>
</section>