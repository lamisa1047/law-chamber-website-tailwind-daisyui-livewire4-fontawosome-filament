<!-- ══════════ GALLERY ══════════ -->
<section id="gallery" class="py-12 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <!-- Section Heading -->
    <div class="text-center mb-10 sm:mb-14">
      <div class="text-[0.75rem] tracking-[0.2em] uppercase font-bold text-gold mb-2">Our Gallery</div>
      <h2 class="text-3xl sm:text-4xl font-display font-bold text-forest">Moments From Our Practice</h2>
      <div class="w-[60px] h-[3px] bg-gradient-to-r from-gold to-gold-light rounded-sm mt-3 mx-auto"></div>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-sm sm:text-base">
        A glimpse into our professional environment, client meetings, and legal excellence.
      </p>
    </div>

    <!-- Gallery Grid -->
    @if ($this->galleries->isNotEmpty())
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      @foreach ($this->galleries as $index => $item)

      {{-- Every 7th item (0-indexed: 0, 7, 14...) spans 2 cols as featured --}}
      <div class="group relative overflow-hidden rounded-2xl shadow-md
        {{ $index % 7 === 0 ? 'sm:col-span-2 lg:col-span-2' : '' }}
        {{ $index % 7 === 6 ? 'sm:col-span-2 lg:col-span-3' : '' }}">

        <img src="/storage/{{ $item->image }}" class="w-full object-cover group-hover:scale-105 transition duration-700
            {{ $index % 7 === 0 ? 'h-72 sm:h-96' : '' }}
            {{ $index % 7 === 6 ? 'h-72 sm:h-80' : '' }}
            {{ !in_array($index % 7, [0, 6]) ? 'h-72' : '' }}" alt="{{ $item->title ?? 'Gallery Image' }}" />

        <!-- Caption -->
        @if ($item->title || $item->subtitle)
        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-forest/90 to-transparent px-6 py-5">
          @if ($item->title)
          <h3 class="text-white font-display font-bold text-xl leading-snug">
            {{ $item->title }}
          </h3>
          @endif
          @if ($item->subtitle)
          <p class="text-white/60 text-sm mt-1">
            {{ $item->subtitle }}
          </p>
          @endif
        </div>
        @endif

        <!-- Gold border on hover -->
        <div
          class="absolute inset-0 border-2 border-gold/0 group-hover:border-gold/40 rounded-2xl transition-all duration-300">
        </div>

      </div>

      @endforeach

    </div>

    @else

    <!-- Empty state -->
    <div class="text-center py-20 text-gray-300">
      <i class="fas fa-images text-5xl mb-4 block opacity-40"></i>
      <p class="text-sm text-gray-400">No gallery images yet.</p>
    </div>

    @endif

  </div>
</section>