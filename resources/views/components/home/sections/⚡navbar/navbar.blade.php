<nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
  <div class="max-w-[1400px] mx-auto px-4 sm:px-6">
    <div class="flex items-center h-16 gap-4">

      <!-- Logo -->
      <a href="#" class="flex items-center gap-2.5 flex-shrink-0 mr-4 no-underline">
        <div class="w-10 h-10 rounded-full border-2 border-gold flex items-center justify-center bg-forest">
          <i class="fas fa-balance-scale text-gold text-sm"></i>
        </div>
        <div>
          <div class="font-display font-bold text-forest text-base leading-none">ENSAF</div>
          <div class="text-[10px] text-gold tracking-[0.2em] uppercase">Justice Law</div>
        </div>
      </a>

      <!-- Desktop nav links -->
      <div class="hidden xl:flex items-center gap-5 text-[13px] font-semibold text-gray-700 flex-1 justify-center">

        <!-- Home dropdown -->
        <div class="dropdown dropdown-hover">
          <div tabindex="0" role="button" class="flex items-center gap-1 cursor-pointer whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">
            Home <i class="fas fa-chevron-down text-[10px] opacity-50"></i>
          </div>
          <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-b-lg rounded-tl-none rounded-tr-none w-40 p-1 shadow-lg border-t-[3px] border-gold z-[200] mt-2">
            <li><a href="#" class="text-sm hover:text-gold hover:bg-amber-50 rounded-none">Home Style 1</a></li>
            <li><a href="#" class="text-sm hover:text-gold hover:bg-amber-50 rounded-none">Home Style 2</a></li>
          </ul>
        </div>

        <!-- About dropdown -->
        <div class="dropdown dropdown-hover">
          <div tabindex="0" role="button" class="flex items-center gap-1 cursor-pointer whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">
            About Us <i class="fas fa-chevron-down text-[10px] opacity-50"></i>
          </div>
          <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-b-lg rounded-tl-none rounded-tr-none w-40 p-1 shadow-lg border-t-[3px] border-gold z-[200] mt-2">
            <li><a href="#about" class="text-sm hover:text-gold hover:bg-amber-50 rounded-none">About Style 1</a></li>
          </ul>
        </div>

        <!-- Lawyers dropdown -->
        <div class="dropdown dropdown-hover">
          <div tabindex="0" role="button" class="flex items-center gap-1 cursor-pointer whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">
            Our Lawyers <i class="fas fa-chevron-down text-[10px] opacity-50"></i>
          </div>
          <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-b-lg rounded-tl-none rounded-tr-none w-40 p-1 shadow-lg border-t-[3px] border-gold z-[200] mt-2">
            <li><a href="#attorneys" class="text-sm hover:text-gold hover:bg-amber-50 rounded-none">All Attorneys</a></li>
          </ul>
        </div>

        <!-- Expertise dropdown -->
        <div class="dropdown dropdown-hover">
          <div tabindex="0" role="button" class="flex items-center gap-1 cursor-pointer whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">
            Expertise <i class="fas fa-chevron-down text-[10px] opacity-50"></i>
          </div>
          <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-b-lg rounded-tl-none rounded-tr-none w-40 p-1 shadow-lg border-t-[3px] border-gold z-[200] mt-2">
            <li><a href="#services" class="text-sm hover:text-gold hover:bg-amber-50 rounded-none">All Services</a></li>
          </ul>
        </div>

        <a href="#" class="whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">Gallery</a>
        <a href="#blog" class="whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">Blogs</a>
        <a href="#" class="whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">FAQs</a>
        <a href="#footer" class="whitespace-nowrap hover:text-gold transition-colors pb-1 border-b-2 border-transparent hover:border-gold">Contact Us</a>
      </div>

      <!-- Right side: search + socials + contacts -->
      <div class="hidden xl:flex items-center gap-3 flex-shrink-0 ml-4">
        <button class="text-gray-500 hover:text-gold transition-colors text-[15px]"><i class="fas fa-search"></i></button>

        <div class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-500 text-xs cursor-pointer hover:border-gold hover:text-gold transition-all">
          <i class="fab fa-facebook-f"></i>
        </div>
        <div class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-500 text-xs cursor-pointer hover:border-gold hover:text-gold transition-all">
          <i class="fab fa-twitter"></i>
        </div>

        <div class="w-px h-5 bg-gray-200 flex-shrink-0"></div>

        <a href="tel:+12345678901" class="flex items-center gap-1.5 text-gold text-[13px] font-semibold whitespace-nowrap hover:text-gold-dark transition-colors">
          <i class="fas fa-phone text-xs"></i> +1 (234) 567-890
        </a>

        <div class="w-px h-5 bg-gray-200 flex-shrink-0"></div>

        <a href="/cdn-cgi/l/email-protection#2d44434b426d48435e4c4b03414c5a" class="flex items-center gap-1.5 text-gold text-[13px] font-semibold whitespace-nowrap hover:text-gold-dark transition-colors">
          <i class="fas fa-envelope text-xs"></i> <span class="__cf_email__" data-cfemail="cea7a0a8a18eaba0bdafa8e0a2afb9">[email&#160;protected]</span>
        </a>
      </div>

      <!-- lg but not xl: compact CTA -->
      <div class="hidden lg:flex xl:hidden items-center gap-3 ml-auto">
        <button class="text-gray-500 hover:text-gold transition-colors"><i class="fas fa-search"></i></button>
        <a href="#consultation" class="flex items-center gap-2 bg-gold text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-gold-dark transition-all shadow-md whitespace-nowrap">
          Free Consultation <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>

      <!-- Mobile hamburger -->
      <label for="mobile-drawer" class="lg:hidden text-forest text-2xl p-1 ml-auto cursor-pointer">
        <i class="fas fa-bars"></i>
      </label>
    </div>
  </div>

  <!-- Mobile menu via DaisyUI collapse -->
  <div id="mobile-nav" class="lg:hidden hidden border-t-[3px] border-gold bg-white px-6 pb-6 pt-2 flex-col gap-1">
    <div class="collapse collapse-arrow rounded-none border-b border-gray-100">
      <input type="checkbox" class="min-h-0"/>
      <div class="collapse-title font-semibold text-sm text-gray-700 min-h-0 py-3 px-0">Home</div>
      <div class="collapse-content px-0 pb-2">
        <a href="#" class="block text-sm text-gray-500 py-1.5 hover:text-gold transition-colors">Home Style 1</a>
        <a href="#" class="block text-sm text-gray-500 py-1.5 hover:text-gold transition-colors">Home Style 2</a>
      </div>
    </div>
    <div class="collapse collapse-arrow rounded-none border-b border-gray-100">
      <input type="checkbox" class="min-h-0"/>
      <div class="collapse-title font-semibold text-sm text-gray-700 min-h-0 py-3 px-0">About Us</div>
      <div class="collapse-content px-0 pb-2">
        <a href="#about" class="block text-sm text-gray-500 py-1.5 hover:text-gold transition-colors">About Style 1</a>
      </div>
    </div>
    <div class="collapse collapse-arrow rounded-none border-b border-gray-100">
      <input type="checkbox" class="min-h-0"/>
      <div class="collapse-title font-semibold text-sm text-gray-700 min-h-0 py-3 px-0">Our Lawyers</div>
      <div class="collapse-content px-0 pb-2">
        <a href="#attorneys" class="block text-sm text-gray-500 py-1.5 hover:text-gold transition-colors">All Attorneys</a>
      </div>
    </div>
    <div class="collapse collapse-arrow rounded-none border-b border-gray-100">
      <input type="checkbox" class="min-h-0"/>
      <div class="collapse-title font-semibold text-sm text-gray-700 min-h-0 py-3 px-0">Expertise</div>
      <div class="collapse-content px-0 pb-2">
        <a href="#services" class="block text-sm text-gray-500 py-1.5 hover:text-gold transition-colors">All Services</a>
      </div>
    </div>
    <a href="#" class="block font-semibold text-sm text-gray-700 py-3 border-b border-gray-100 hover:text-gold transition-colors">Gallery</a>
    <a href="#blog" class="block font-semibold text-sm text-gray-700 py-3 border-b border-gray-100 hover:text-gold transition-colors">Blogs</a>
    <a href="#" class="block font-semibold text-sm text-gray-700 py-3 border-b border-gray-100 hover:text-gold transition-colors">FAQs</a>
    <a href="#footer" class="block font-semibold text-sm text-gray-700 py-3 border-b border-gray-100 hover:text-gold transition-colors">Contact Us</a>
    <div class="mt-3 pt-3 border-t border-gray-100 flex flex-col gap-2">
      <a href="tel:+12345678901" class="flex items-center gap-2 text-gold font-semibold text-sm"><i class="fas fa-phone text-xs"></i> +1 (234) 567-890</a>
      <a href="/cdn-cgi/l/email-protection#b1d8dfd7def1d4dfc2d0d79fddd0c6" class="flex items-center gap-2 text-gold font-semibold text-sm"><i class="fas fa-envelope text-xs"></i> <span class="__cf_email__" data-cfemail="8ae3e4ece5caefe4f9ebeca4e6ebfd">[email&#160;protected]</span></a>
    </div>
    <a href="#consultation" class="mt-3 bg-gold text-white text-center py-3 rounded-full font-bold text-sm hover:bg-gold-dark transition-colors block">Free Consultation →</a>
  </div>
</nav>
