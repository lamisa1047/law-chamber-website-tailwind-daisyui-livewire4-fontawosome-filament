<nav x-data="{
  open: false,
  path: window.location.pathname,
  hash: window.location.hash,
  isActive(href) {
    if (href.startsWith('/#') || href.startsWith('#')) {
      return this.hash === (href.startsWith('/') ? href.slice(1) : href);
    }
    return this.path === href || this.path.startsWith(href + '/');
  },
  scrollToSection(e, href) {
    if (!href.includes('#')) return;

    e.preventDefault();

    let id = '';

    if (href.startsWith('/#')) {
      id = href.split('/#')[1];

      if (window.location.pathname !== '/') {
        window.location.href = '/#' + id;
        return;
      }
    } else {
      id = href.split('#')[1];
    }

    const el = document.getElementById(id);
    if (!el) return;

    this.open = false;
    this.hash = '#' + id;

    window.history.pushState(null, '', '/#' + id);

    setTimeout(() => {
      const nav = document.querySelector('nav');
      const navHeight = nav ? nav.offsetHeight : 0;

      const top = el.getBoundingClientRect().top + window.scrollY - navHeight;

      window.scrollTo({ top, behavior: 'smooth' });
  }, 10);
}
}" x-init="
  window.addEventListener('hashchange', () => hash = window.location.hash);
  window.addEventListener('popstate', () => { path = window.location.pathname; hash = window.location.hash; });
" class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex items-center h-16 gap-4">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-2.5 shrink-0 mr-4 no-underline">
        <div class="w-12 h-12 rounded-full border-2 border-gold flex items-center justify-center bg-forest">
          @if ($logo)
          <img src="/storage/{{$logo}}" />
          @else
          <i class="fas fa-balance-scale text-gold text-sm"></i>
          @endif
        </div>
        <div>
          <div class="font-display font-bold text-forest text-base leading-none">{{$companyName ?? 'Unknown'}}</div>
        </div>
      </a>

      <!-- Desktop nav -->
      <div class="hidden xl:flex items-center gap-5 text-[13px] font-semibold flex-1 justify-center">

        <a href="/"
          :class="isActive('/') && !hash ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">Home</a>

        <a href="/#about-us" @click="scrollToSection($event, '/#about-us')"
          :class="isActive('/#about-us') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">About Us</a>

        <a href="/#practice-areas" @click="scrollToSection($event, '/#practice-areas')"
          :class="isActive('/#practice-areas') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">Practice Areas</a>

        <a href="/#attorneys" @click="scrollToSection($event, '/#attorneys')"
          :class="isActive('/#attorneys') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">Our Lawyers</a>

        <a href="/gallery"
          :class="isActive('/gallery') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">Gallery</a>

        <a href="/blogs"
          :class="isActive('/blogs') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">Blogs</a>

        <a href="/faqs"
          :class="isActive('/faqs') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">FAQs</a>

        <a href="/contact-us"
          :class="isActive('/contact-us') ? 'text-gold border-gold' : 'text-gray-700 border-transparent hover:text-gold hover:border-gold'"
          class="pb-1 border-b-2 transition-colors">Contact Us</a>

      </div>

      <!-- Right side -->
      <div class="hidden xl:flex items-center gap-3 ml-4">

        @if($contact?->facebook)
        <a href="{{ $contact->facebook }}" target="_blank"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-facebook-f"></i>
        </a>
        @endif

        @if($contact?->instagram)
        <a href="{{ $contact->instagram }}" target="_blank"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-instagram"></i>
        </a>
        @endif

        @if($contact?->twitter)
        <a href="{{ $contact->twitter }}" target="_blank"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-twitter"></i>
        </a>
        @endif

        @if($contact?->linkedin)
        <a href="{{ $contact->linkedin }}" target="_blank"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-linkedin"></i>
        </a>
        @endif

        @if(
        $contact?->facebook ||
        $contact?->instagram ||
        $contact?->twitter ||
        $contact?->linkedin
        )
        <div class="w-px h-5 bg-gray-200"></div>
        @endif

        @if($contact?->phone)
        <a href="tel:{{ $contact->phone }}" class="text-gold text-sm font-semibold flex items-center gap-1.5">
          <i class="fas fa-phone text-xs"></i> {{ $contact->phone }}
        </a>
        @endif

      </div>

      <!-- Mobile button -->
      <button @click="open = !open"
        class="xl:hidden text-forest ml-auto w-9 h-9 flex items-center justify-center rounded-lg hover:bg-gray-50 transition-colors">
        <i class="fas text-lg" :class="open ? 'fa-times' : 'fa-bars'"></i>
      </button>

    </div>
  </div>

  <!-- MOBILE MENU -->
  <div x-show="open" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-2"
    class="xl:hidden border-t-[3px] border-gold bg-white px-6 pb-6 pt-2" style="display: none;">

    <div class="flex flex-col">

      <a href="/" @click="open = false" :class="isActive('/') && !hash ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        Home
        <i x-show="isActive('/') && !hash" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/#about-us" @click="scrollToSection($event, '/#about-us')"
        :class="isActive('/#about-us') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        About Us
        <i x-show="isActive('/#about-us')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/#practice-areas" @click="scrollToSection($event, '/#practice-areas')"
        :class="isActive('/#practice-areas') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        Practice Areas
        <i x-show="isActive('/#practice-areas')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/#attorneys" @click="scrollToSection($event, '/#attorneys')"
        :class="isActive('/#attorneys') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        Our Lawyers
        <i x-show="isActive('/#attorneys')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/gallery" @click="open = false"
        :class="isActive('/gallery') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        Gallery
        <i x-show="isActive('/gallery')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/blogs" @click="open = false" :class="isActive('/blogs') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        Blogs
        <i x-show="isActive('/blogs')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/faqs" @click="open = false" :class="isActive('/faqs') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        FAQs
        <i x-show="isActive('/faqs')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

      <a href="/contact-us" @click="open = false"
        :class="isActive('/contact-us') ? 'text-gold font-semibold' : 'text-gray-700'"
        class="flex items-center justify-between py-3 border-b border-gray-100 text-sm hover:text-gold transition-colors">
        Contact Us
        <i x-show="isActive('/contact-us')" class="fas fa-chevron-right text-gold text-xs"></i>
      </a>

    </div>

    <!-- Bottom: phone + socials -->
    <div class="mt-5 flex items-center justify-between">

      @if ($contact->phone)
      <a href="tel:{{ $contact->phone }}" class="text-gold text-sm font-semibold flex items-center gap-1.5">
        <i class="fas fa-phone text-xs"></i> {{ $contact->phone }}
      </a>
      @endif

      <div class="flex items-center gap-2">
        @if ($contact->facebook)
        <a href="{{ $contact->facebook }}"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-facebook-f"></i>
        </a>
        @endif

        @if ($contact->instagram)
        <a href="{{ $contact->instagram }}"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-instagram"></i>
        </a>
        @endif

        @if ($contact->twitter)
        <a href="{{ $contact->twitter }}"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-twitter"></i>
        </a>
        @endif

        @if ($contact->linkedin)
        <a href="{{ $contact->linkedin }}"
          class="w-7 h-7 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 text-xs hover:text-gold hover:border-gold transition-all">
          <i class="fab fa-linkedin-in"></i>
        </a>
        @endif
      </div>

    </div>
</nav>