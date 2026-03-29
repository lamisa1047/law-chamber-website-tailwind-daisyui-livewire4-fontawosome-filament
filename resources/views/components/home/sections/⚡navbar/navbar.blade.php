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

      <!-- Desktop nav -->
      <div class="hidden xl:flex items-center gap-5 text-[13px] font-semibold text-gray-700 flex-1 justify-center">
        <a href="/" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">Home</a>
        <a href="#about" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">About Us</a>

        <div class="dropdown dropdown-hover">
          <div tabindex="0" class="flex items-center gap-1 cursor-pointer hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">
            Our Lawyers <i class="fas fa-chevron-down text-[10px] opacity-50"></i>
          </div>
          <ul class="dropdown-content menu bg-base-100 w-40 p-1 shadow-lg border-t-[3px] border-gold mt-2">
            <li><a href="#attorneys" class="text-sm hover:text-gold">All Attorneys</a></li>
          </ul>
        </div>

       <a href="" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">Expertise</a>


        <a href="/gallery" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">Gallery</a>
        <a href="/blogs" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">Blogs</a>
        <a href="/faqs" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">FAQs</a>
        <a href="/contact-us" class="hover:text-gold pb-1 border-b-2 border-transparent hover:border-gold">Contact Us</a>
      </div>

      <!-- Right side -->
      <div class="hidden xl:flex items-center gap-3 ml-4">
        <button class="text-gray-500 hover:text-gold"><i class="fas fa-search"></i></button>

        <div class="w-8 h-8 rounded-full border flex items-center justify-center text-gray-500 text-xs hover:text-gold">
          <i class="fab fa-facebook-f"></i>
        </div>

        <div class="w-8 h-8 rounded-full border flex items-center justify-center text-gray-500 text-xs hover:text-gold">
          <i class="fab fa-twitter"></i>
        </div>

        <div class="w-px h-5 bg-gray-200"></div>

        <a href="tel:+12345678901" class="text-gold text-sm font-semibold">
          <i class="fas fa-phone"></i> +1 (234) 567-890
        </a>
      </div>

      <!-- Mobile button -->
      <button id="menu-btn" class="lg:hidden text-2xl ml-auto text-forest">
        <i class="fas fa-bars"></i>
      </button>

    </div>
  </div>

  <!-- MOBILE MENU -->
  <div id="mobile-nav" class="lg:hidden hidden border-t-[3px] border-gold bg-white px-6 pb-6 pt-3 flex-col gap-1 transition-all duration-300">

    <a href="/" class="block py-3 border-b hover:text-gold">Home</a>
    <a href="#about" class="block py-3 border-b hover:text-gold">About Us</a>
    <a href="#attorneys" class="block py-3 border-b hover:text-gold">Our Lawyers</a>
    <a href="#services" class="block py-3 border-b hover:text-gold">Expertise</a>
    <a href="/gallery" class="block py-3 border-b hover:text-gold">Gallery</a>
    <a href="/blogs" class="block py-3 border-b hover:text-gold">Blogs</a>
    <a href="/faqs" class="block py-3 border-b hover:text-gold">FAQs</a>
    <a href="/contact-us" class="block py-3 border-b hover:text-gold">Contact Us</a>

    <div class="mt-4 flex flex-col gap-2">
      <a href="tel:+12345678901" class="text-gold font-semibold">
        <i class="fas fa-phone"></i> +1 (234) 567-890
      </a>
    </div>

    
</nav>

<!-- SCRIPT -->
<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-nav');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>