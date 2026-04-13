<footer id="footer" class="bg-forest text-white pt-12 pb-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-10">

      <!-- Brand -->
      <div>
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-full border border-gold/50 flex items-center justify-center shrink-0">
            @if ($logo)
            <img src="/storage/{{$logo}}" />
            @else
            <i class="fas fa-balance-scale text-gold text-sm"></i>
            @endif
          </div>
          <div>
            <div class="font-display font-bold text-base leading-none">{{$companyName ?? 'unknown'}}</div>
          </div>
        </div>
        <p class="text-white/40 text-xs leading-relaxed max-w-55">
          Committed to excellence in legal representation with integrity and dedication.
        </p>
      </div>

      <!-- Contact -->
      <div>
        <p class="text-[10px] font-bold tracking-widests uppercase text-gold mb-4">Contact</p>
        <div class="space-y-2.5 text-xs text-white/50">

          @if ($contact->full_address)
          <div class="flex items-start gap-2.5">
            <i class="fas fa-map-marker-alt text-gold w-3.5 mt-0.5 shrink-0"></i>
            <span>{{$contact->full_address}}</span>
          </div>
          @endif

          @if ($contact->phone)
          <div class="flex items-center gap-2.5">
            <i class="fas fa-phone text-gold w-3.5 shrink-0"></i>
            <span>{{$contact->phone}}</span>
          </div>
          @endif

          @if ($contact->email)
          <div class="flex items-center gap-2.5">
            <i class="fas fa-envelope text-gold w-3.5 shrink-0"></i>
            <span>{{$contact->email}}</span>
          </div>
          @endif

        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <p class="text-[10px] font-bold tracking-widests uppercase text-gold mb-4">Quick Links</p>
        <ul class="space-y-2 text-xs text-white/50">
          <li><a href="/#about-us" class="hover:text-gold transition-colors">About the Firm</a></li>
          <li><a href="/#practice-areas" class="hover:text-gold transition-colors">Practice Areas</a></li>
          <li><a href="/#attorney" class="hover:text-gold transition-colors">Our Attorneys</a></li>
          <li><a href="/gallery" class="hover:text-gold transition-colors">Gallery</a></li>
          <li><a href="/faqs" class="hover:text-gold transition-colors">FAQs</a></li>
          <li><a href="/blog" class="hover:text-gold transition-colors">Blog</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="border-t border-white/10 pt-5 flex flex-col sm:flex-row items-center justify-between gap-3">

      <div class="text-xs text-white/30">
        © {{ now()->year }} {{ $companyName ?? 'Company' }}. All rights reserved.
      </div>

      <div class="flex items-center gap-2">

        @if($contact?->facebook)
        <a href="{{ $contact->facebook }}" target="_blank"
          class="w-7 h-7 rounded-lg bg-white/5 hover:bg-gold flex items-center justify-center transition-colors">
          <i class="fab fa-facebook-f text-[11px]"></i>
        </a>
        @endif

        @if($contact?->twitter)
        <a href="{{ $contact->twitter }}" target="_blank"
          class="w-7 h-7 rounded-lg bg-white/5 hover:bg-gold flex items-center justify-center transition-colors">
          <i class="fab fa-twitter text-[11px]"></i>
        </a>
        @endif

        @if($contact?->linkedin)
        <a href="{{ $contact->linkedin }}" target="_blank"
          class="w-7 h-7 rounded-lg bg-white/5 hover:bg-gold flex items-center justify-center transition-colors">
          <i class="fab fa-linkedin-in text-[11px]"></i>
        </a>
        @endif

        @if($contact?->instagram)
        <a href="{{ $contact->instagram }}" target="_blank"
          class="w-7 h-7 rounded-lg bg-white/5 hover:bg-gold flex items-center justify-center transition-colors">
          <i class="fab fa-instagram text-[11px]"></i>
        </a>
        @endif

      </div>
    </div>

  </div>
</footer>