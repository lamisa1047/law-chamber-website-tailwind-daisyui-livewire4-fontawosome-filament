<div>

  <!-- ══════════ HEADER ══════════ -->
  <section class="py-14 sm:py-20 bg-forest text-white text-center">
    <h1 class="text-3xl sm:text-5xl font-display font-bold">All Blogs</h1>
    <p class="text-sm sm:text-base text-gray-300 mt-3">
      Insights, updates & legal knowledge
    </p>
  </section>

  <!-- ══════════ CONTENT ══════════ -->
  <section class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

      <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 items-start">

        <!-- (Optional Sidebar Placeholder for Balance) -->
        <aside class="hidden lg:block lg:col-span-1">
          <div class="bg-white p-5 rounded-xl shadow-sm sticky top-24">
            <h3 class="font-bold text-forest mb-4">Filters</h3>
            <p class="text-sm text-gray-500">Add search, categories, or tags here</p>
          </div>
        </aside>

        <!-- ═══ Blog List ═══ -->
        <div class="lg:col-span-3">

          <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

            <!-- Blog Card -->
            <div class="card bg-white shadow-sm overflow-hidden hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
              <figure>
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80"
                  class="w-full h-48 object-cover"/>
              </figure>
              <div class="card-body p-4">
                <span class="badge bg-gold text-white">Technology</span>
                <h3 class="font-bold text-forest text-sm mt-2">
                  Technology is transforming legal services with AI
                </h3>
                <p class="text-xs text-gray-400 mt-1">March 10, 2026</p>
                <a href="#" class="text-gold text-sm mt-2 inline-flex items-center gap-2">
                  Read More <i class="fas fa-arrow-right text-xs"></i>
                </a>
              </div>
            </div>

            <!-- Blog Card -->
            <div class="card bg-white shadow-sm overflow-hidden hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
              <figure>
                <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?w=600&q=80"
                  class="w-full h-48 object-cover"/>
              </figure>
              <div class="card-body p-4">
                <span class="badge bg-forest text-white">Legal Tips</span>
                <h3 class="font-bold text-forest text-sm mt-2">
                  I mix legal expertise with project management skills
                </h3>
                <p class="text-xs text-gray-400 mt-1">March 5, 2026</p>
                <a href="#" class="text-gold text-sm mt-2 inline-flex items-center gap-2">
                  Read More <i class="fas fa-arrow-right text-xs"></i>
                </a>
              </div>
            </div>

            <!-- More cards (same style) -->
            <div class="card bg-white shadow-sm overflow-hidden hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
              <figure>
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600&q=80"
                  class="w-full h-48 object-cover"/>
              </figure>
              <div class="card-body p-4">
                <span class="badge bg-gold text-white">Business</span>
                <h3 class="font-bold text-forest text-sm mt-2">
                  Affordable legal representation with experience
                </h3>
                <p class="text-xs text-gray-400 mt-1">Feb 28, 2026</p>
                <a href="#" class="text-gold text-sm mt-2 inline-flex items-center gap-2">
                  Read More <i class="fas fa-arrow-right text-xs"></i>
                </a>
              </div>
            </div>

          </div>

          <!-- ═══ Pagination ═══ -->
          <div class="flex justify-center mt-12 gap-2">
            <button class="btn btn-sm btn-outline border-gold text-gold hover:bg-gold hover:text-white">1</button>
            <button class="btn btn-sm btn-outline">2</button>
            <button class="btn btn-sm btn-outline">3</button>
            <button class="btn btn-sm btn-outline">Next</button>
          </div>

        </div>
      </div>
    </div>
  </section>

</div>