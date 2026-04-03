<!-- ══════════ ATTORNEYS ══════════ -->
<section id="attorneys" class="py-12 sm:py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-8 sm:mb-12">
      <div>
        <div class="text-[0.75rem] tracking-[0.2em] uppercase font-bold text-gold mb-2">Our Attorney</div>
        <h2 class="text-3xl sm:text-4xl font-display font-bold text-forest">Meet Our Experienced Attorneys</h2>
        <div class="w-[60px] h-[3px] bg-gradient-to-r from-gold to-gold-light rounded-sm mt-3"></div>
      </div>
      <div class="flex gap-3">
        <button
          class="w-10 h-10 rounded-full border-2 border-gold text-gold hover:bg-gold hover:text-white transition-all flex items-center justify-center">
          <i class="fas fa-chevron-left text-sm"></i>
        </button>
        <button
          class="w-10 h-10 rounded-full bg-gold text-white hover:bg-gold-dark transition-all flex items-center justify-center">
          <i class="fas fa-chevron-right text-sm"></i>
        </button>
      </div>
    </div>

    <div x-data="{
        attorneys: [
          {
            name: 'Michel Phelpas',
            role: 'Lawyer',
            img: 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80',
            bio: 'Michel specialises in civil and commercial litigation with over 10 years of courtroom experience across multiple jurisdictions. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, inventore soluta repellendus consequatur dicta commodi natus. Dolor dicta architecto modi necessitatibus, eveniet, ducimus corrupti neque doloremque sapiente provident aperiam? Illum nobis voluptatum aut inventore veritatis autem nostrum maxime necessitatibus culpa, praesentium similique asperiores harum vel. Dolorem officia praesentium nemo hic totam molestias natus reiciendis aliquid ullam impedit necessitatibus voluptas, ipsa illo, nobis omnis voluptate quibusdam beatae. Cupiditate, inventore, doloribus, laborum totam est qui debitis nihil eaque voluptatibus vel ut reprehenderit a praesentium. Alias iste, quasi amet omnis fuga dicta quo deleniti culpa, id accusantium saepe, repellat deserunt dolore doloribus ut?',
            edu: 'LL.B, University of Dhaka',
            exp: '10+ years of experience',
            area: 'Civil Law, Commercial Disputes',
            email: 'michel@lawfirm.com',
            linkedin: '#',
            twitter: '#'
          },
          {
            name: 'Smith Miller',
            role: 'Lawyer',
            img: 'https://images.unsplash.com/photo-1556157382-97eda2f9e946?w=600&q=80',
            bio: 'Smith is a seasoned corporate attorney advising businesses on mergers, acquisitions, and regulatory compliance.',
            edu: 'LL.M, BRAC University',
            exp: '8 years of experience',
            area: 'Corporate Law, Banking',
            email: 'smith@lawfirm.com',
            linkedin: '#',
            twitter: '#'
          },
          {
            name: 'Sarah Johnson',
            role: 'Senior Lawyer',
            img: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80',
            bio: 'Sarah leads the family law division, handling complex custody, divorce, and property settlement matters with sensitivity and precision.',
            edu: 'LL.B, University of Chittagong',
            exp: '14 years of experience',
            area: 'Family Law, Property',
            email: 'sarah@lawfirm.com',
            linkedin: '#',
            twitter: '#'
          },
          {
            name: 'Samira Donna',
            role: 'Lawyer',
            img: 'https://images.unsplash.com/photo-1580894732444-8ecded7900cd?w=600&q=80',
            bio: 'Samira focuses on labour and employment law, representing both employers and employees in disputes and compliance matters.',
            edu: 'LL.B, North South University',
            exp: '6 years of experience',
            area: 'Labour Law, Employment',
            email: 'samira@lawfirm.com',
            linkedin: '#',
            twitter: '#'
          },
          {
            name: 'Peggy Linda',
            role: 'Paralegal',
            img: 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&q=80',
            bio: 'Peggy supports the litigation team with legal research, document preparation, and case management across all practice areas.',
            edu: 'Diploma in Legal Studies',
            exp: '5 years of experience',
            area: 'Litigation Support, Research',
            email: 'peggy@lawfirm.com',
            linkedin: '#',
            twitter: '#'
          },
          {
            name: 'Oscar Myo',
            role: 'Lawyer',
            img: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&q=80',
            bio: 'Oscar specialises in criminal defence, representing clients at all court levels including the Supreme Court of Bangladesh.',
            edu: 'LL.B, Dhaka University',
            exp: '9 years of experience',
            area: 'Criminal Law, Appeals',
            email: 'oscar@lawfirm.com',
            linkedin: '#',
            twitter: '#'
          }
        ],
      }">

      <!-- Attorney Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
        <template x-for="attorney in attorneys" :key="attorney.name">
          <div class="relative overflow-hidden rounded-2xl shadow-md group flex flex-col">
            <div class="relative">
              <img :src="attorney.img" :alt="attorney.name" class="w-full h-36 sm:h-44 object-cover" />
              <div
                class="absolute inset-0 bg-forest/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                <a :href="attorney.linkedin" class="text-gold hover:text-white transition-colors"><i
                    class="fab fa-linkedin text-xl"></i></a>
                <a :href="attorney.twitter" class="text-gold hover:text-white transition-colors"><i
                    class="fab fa-twitter text-xl"></i></a>
              </div>
            </div>
            <div class="p-2.5 sm:p-3 bg-white flex flex-col gap-2 flex-1">
              <div>
                <div class="font-bold text-forest text-xs sm:text-sm leading-tight" x-text="attorney.name"></div>
                <div class="text-xs text-gray-400 mt-0.5" x-text="attorney.role"></div>
              </div>
              <a href="/attorney"
                class="mt-auto w-full text-[10px] px-3 sm:text-xs font-semibold tracking-wide uppercase border border-forest/20 text-forest hover:bg-forest hover:text-white rounded-lg py-2 transition-all duration-200">
                View Details
              </a>
            </div>
          </div>
        </template>
      </div>

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