<div>

  <!-- ══════════ HEADER ══════════ -->
  <section class="py-14 sm:py-20 bg-forest text-white text-center">
    <div class="max-w-3xl mx-auto px-4">
      <span
        class="inline-block bg-gold/20 border border-gold/40 text-gold text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">
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

            <!-- Card -->
            @foreach ($this->posts as $post)

            <a href="{{route('post', ['slug'=> $post->slug])}}"
              class="group bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col">

              @if ($post?->image)
              <div class="relative overflow-hidden">
                <img src="/storage/{{$post?->image}}"
                  class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500" alt="Blog" />
              </div>
              @endif

              <div class="p-5 flex flex-col flex-1">
                <h3
                  class="font-bold text-forest text-sm leading-snug mb-2 group-hover:text-gold transition-colors line-clamp-2">
                  {{$post?->title}}
                </h3>
                <p class="text-xs text-gray-400 leading-relaxed mb-4 line-clamp-2 flex-1">
                  Combining structured project management with legal expertise creates a powerful framework for handling
                  complex multi-party disputes.
                </p>
                <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                  <span class="text-[11px] text-gray-400 flex items-center gap-1">
                    <i class="fas fa-calendar text-gold text-[10px]"></i> {{$post->created_at->format('d F, Y')}}
                  </span>
                  <span class="text-[11px] text-gray-400 flex items-center gap-1">
                    <i class="fas fa-clock text-gold text-[10px]"></i> {{$post->created_at->since()}}
                  </span>
                </div>
              </div>
            </a>
            @endforeach


          </div>

          <!-- Pagination -->
          <div class="flex items-center justify-center gap-2 mt-4">
            <button
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-400 hover:border-forest hover:text-forest flex items-center justify-center transition-all">
              <i class="fas fa-chevron-left text-xs"></i>
            </button>
            <button
              class="w-9 h-9 rounded-xl bg-forest text-white text-sm font-semibold flex items-center justify-center">1</button>
            <button
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-500 hover:border-forest hover:text-forest text-sm font-semibold flex items-center justify-center transition-all">2</button>
            <button
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-500 hover:border-forest hover:text-forest text-sm font-semibold flex items-center justify-center transition-all">3</button>
            <span class="text-gray-300 text-sm px-1">...</span>
            <button
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-500 hover:border-forest hover:text-forest text-sm font-semibold flex items-center justify-center transition-all">8</button>
            <button
              class="w-9 h-9 rounded-xl border border-gray-200 text-gray-400 hover:border-forest hover:text-forest flex items-center justify-center transition-all">
              <i class="fas fa-chevron-right text-xs"></i>
            </button>
          </div>

        </div>

        <!-- ═══ Sidebar ═══ -->
        <div class="lg:col-span-1 flex flex-col gap-6 lg:sticky lg:top-24">

          <!-- Categories -->
          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <p class="text-[10px] font-bold tracking-widest uppercase text-gold mb-4">Categories</p>
            <ul class="space-y-1">
              <li>
                <a href="#"
                  class="flex items-center justify-between text-sm text-gray-600 hover:text-forest transition-colors py-1.5 group">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> Criminal Law
                  </span>
                  <span class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">12</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between text-sm text-gray-600 hover:text-forest transition-colors py-1.5 group">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> Civil Litigation
                  </span>
                  <span class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">8</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between text-sm text-gray-600 hover:text-forest transition-colors py-1.5 group">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> Corporate Law
                  </span>
                  <span class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">6</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between text-sm text-gray-600 hover:text-forest transition-colors py-1.5 group">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> Legal Technology
                  </span>
                  <span class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">4</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between text-sm text-gray-600 hover:text-forest transition-colors py-1.5 group">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> Family Law
                  </span>
                  <span class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">9</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between text-sm text-gray-600 hover:text-forest transition-colors py-1.5 group">
                  <span class="flex items-center gap-2">
                    <i class="fas fa-chevron-right text-[9px] text-gold"></i> Banking Law
                  </span>
                  <span class="text-[11px] bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">5</span>
                </a>
              </li>
            </ul>
          </div>

        </div>

      </div>
    </div>
  </section>

</div>