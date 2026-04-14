<div>

  <!-- ══════════ HEADER ══════════ -->
  <section class="py-14 sm:py-20 bg-forest text-white text-center">
    <div class="max-w-3xl mx-auto px-4">
      <span
        class="inline-block bg-gold/20 border border-gold/40 text-gold text-[11px] font-semibold tracking-widests uppercase px-4 py-1.5 rounded-full mb-5">
        Our Blog
      </span>
      <h1 class="text-3xl sm:text-5xl font-display font-bold mb-4">Insights & Legal Knowledge</h1>
      <p class="text-sm sm:text-base text-white/50">
        Stay informed with the latest legal updates, case insights, and expert commentary from our chambers.
      </p>
    </div>
  </section>

  <!-- ══════════ CONTENT ══════════ -->
  <section class="py-12 sm:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

      <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 items-start">

        <!-- ═══ Blog List ═══ -->
        <div class="lg:col-span-3 flex flex-col gap-10">

          <!-- Blog Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse ($this->posts as $post)
            <a href="{{ route('post', ['slug' => $post->slug]) }}"
              class="group bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col">

              @if ($post->image)
              <div class="relative overflow-hidden">
                <img src="/storage/{{ $post->image }}"
                  class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500"
                  alt="{{ $post->title }}" />
              </div>
              @endif

              <div class="p-5 flex flex-col flex-1">
                <h3
                  class="font-bold text-forest text-sm leading-snug mb-2 group-hover:text-gold transition-colors line-clamp-2">
                  {{ $post->title }}
                </h3>
                <div class="flex items-center justify-between pt-3 border-t border-gray-100 mt-auto">
                  <span class="text-[11px] text-gray-400 flex items-center gap-1">
                    <i class="fas fa-calendar text-gold text-[10px]"></i>
                    {{ $post->published_at?->format('d M Y') ?? $post->created_at->format('d M Y') }}
                  </span>
                  @if ($post->read_time)
                  <span class="text-[11px] text-gray-400 flex items-center gap-1">
                    <i class="fas fa-clock text-gold text-[10px]"></i> {{ $post->read_time }}
                  </span>
                  @endif
                </div>
              </div>
            </a>
            @empty
            <div class="col-span-3 text-center py-16 text-gray-400">
              <i class="fas fa-newspaper text-4xl mb-3 block opacity-30"></i>
              <p class="text-sm">No posts found.</p>
              @if ($category)
              <a href="{{ route('blogs') }}" class="text-gold text-xs mt-2 inline-block hover:underline">
                Clear filter
              </a>
              @endif
            </div>
            @endforelse
          </div>

          <!-- ═══ Pagination ═══ -->
          @if ($this->posts->hasPages())
          <div class="flex items-center justify-center gap-2 mt-4">

            {{-- Previous --}}
            @if ($this->posts->onFirstPage())
            <span
              class="w-9 h-9 rounded-xl border border-gray-100 text-gray-300 flex items-center justify-center cursor-not-allowed">
              <i class="fas fa-chevron-left text-xs"></i>
            </span>
            @else
            <button wire:click="previousPage"
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-400 hover:border-forest hover:text-forest flex items-center justify-center transition-all">
              <i class="fas fa-chevron-left text-xs"></i>
            </button>
            @endif

            {{-- Page numbers --}}
            @foreach ($this->posts->links()->elements as $element)

            {{-- Dots --}}
            @if (is_string($element))
            <span class="text-gray-300 text-sm px-1">...</span>
            @endif

            {{-- Page links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $this->posts->currentPage())
            <button
              class="w-9 h-9 rounded-xl bg-forest text-white text-sm font-semibold flex items-center justify-center">
              {{ $page }}
            </button>
            @else
            <button wire:click="gotoPage({{ $page }})"
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-500 hover:border-forest hover:text-forest text-sm font-semibold flex items-center justify-center transition-all">
              {{ $page }}
            </button>
            @endif
            @endforeach
            @endif

            @endforeach

            {{-- Next --}}
            @if ($this->posts->hasMorePages())
            <button wire:click="nextPage"
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-400 hover:border-forest hover:text-forest flex items-center justify-center transition-all">
              <i class="fas fa-chevron-right text-xs"></i>
            </button>
            @else
            <span
              class="w-9 h-9 rounded-xl border border-gray-100 text-gray-300 flex items-center justify-center cursor-not-allowed">
              <i class="fas fa-chevron-right text-xs"></i>
            </span>
            @endif

          </div>
          @endif

        </div>

        <!-- ═══ Sidebar ═══ -->
        <div class="lg:col-span-1 flex flex-col gap-6 lg:sticky lg:top-24">

          <!-- Categories -->
          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <p class="text-[10px] font-bold tracking-widests uppercase text-gold mb-4">Categories</p>
            <ul class="space-y-1">

              <li>
                <a href="{{ route('blogs') }}"
                  class="flex items-center justify-between text-sm py-1.5 transition-colors group {{ !$category ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }}">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> All Posts
                  </span>
                </a>
              </li>

              @foreach ($this->categories as $item)
              <li>
                <a href="{{ route('blogs', ['category' => $item->slug]) }}"
                  class="flex items-center justify-between text-sm py-1.5 transition-colors group {{ $category === $item->slug ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }}">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> {{ $item->name }}
                  </span>
                </a>
              </li>
              @endforeach

            </ul>
          </div>

        </div>

      </div>
    </div>
  </section>

</div>