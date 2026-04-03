<!-- ══════════ PRACTICE AREAS ══════════ -->
<section id="practice-areas" class="py-12 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <!-- Section Header -->
    <div class="text-center mb-10 sm:mb-14">
      <h2 class="text-3xl sm:text-4xl font-display font-bold text-forest">Practice Areas & Expertise</h2>
      <div class="w-15 h-0.75 bg-linear-to-r from-gold to-gold-light rounded-sm mt-3 mx-auto"></div>
    </div>

    <!-- Toggle All Button -->
    <div class="flex justify-end mb-4">
      <button onclick="toggleAllDescriptions(this)"
        class="flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-forest border border-forest/30 rounded-lg px-4 py-2 hover:bg-forest/10 transition-all duration-200">
        <span>Show Descriptions</span>
        <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
      </button>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">

      <!-- Card: Criminal Litigation -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-gavel text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Criminal
            Litigation</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Representation in all types of criminal cases
            including bail, trial, appeals, revisions, and 561A. Expertise in offences under the Penal Code and special
            laws before Dhaka Judge Court and the Hon'ble Supreme Court of Bangladesh.</p>
        </div>
      </div>

      <!-- Card: Civil Litigation -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-file-alt text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Civil
            Litigation</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Handling civil disputes such as property,
            contracts, injunctions, recovery suits, and declaratory suits before civil courts.</p>
        </div>
      </div>

      <!-- Card: Labour & Employment Law -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-user-tie text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Labour &
            Employment Law</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Advising employers and employees on service
            matters, wrongful termination, labour disputes, and compliance with labour laws.</p>
        </div>
      </div>

      <!-- Card: Banking & Finance Law -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-university text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Banking &
            Finance Law</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Legal support in loan recovery, banking
            disputes, cheque dishonour cases, and financial regulatory compliance.</p>
        </div>
      </div>

      <!-- Card: Family Law -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-home text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Family Law
          </h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Handling divorce (talaq), child custody,
            maintenance, dower (denmohor), and other family-related disputes.</p>
        </div>
      </div>

      <!-- Card: Land & Property Law -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i
              class="fas fa-map-marked-alt text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Land &
            Property Law</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Legal services related to land disputes,
            ownership verification, mutation, partition, and land recovery matters.</p>
        </div>
      </div>

      <!-- Card: Company & Corporate Law -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-briefcase text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Company &
            Corporate Law</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Advising businesses on company formation,
            compliance, contracts, and corporate disputes.</p>
        </div>
      </div>

      <!-- Card: Cyber Crime & ICT Law -->
      <div
        class="group flex flex-col p-5 sm:p-7 border border-gray-100 rounded-xl bg-white hover:bg-forest/10 hover:border-gold/30 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(184,147,90,0.15)] transition-all duration-300">
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 shrink-0 rounded-xl bg-forest/10 group-hover:bg-gold/20 flex items-center justify-center transition-all duration-300">
            <i class="fas fa-shield-alt text-forest group-hover:text-gold text-lg transition-colors duration-300"></i>
          </div>
          <h3 class="font-bold text-xs sm:text-sm tracking-widest uppercase text-forest leading-snug flex-1">Cyber Crime
            & ICT Law</h3>
          <button onclick="toggleDescription(this)"
            class="w-7 h-7 shrink-0 flex items-center justify-center rounded-lg hover:bg-forest/10 transition-all duration-200 cursor-pointer">
            <i class="fas fa-chevron-down text-forest/50 text-xs transition-transform duration-300"></i>
          </button>
        </div>
        <div class="pa-desc overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
          <p class="text-xs sm:text-sm text-gray-500 leading-relaxed pt-3">Handling cases related to online fraud,
            defamation, digital security issues, and cyber offences.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  function toggleDescription(btn) {
    const desc = btn.closest('.group').querySelector('.pa-desc');
    const icon = btn.querySelector('i');
    const isOpen = desc.style.maxHeight && desc.style.maxHeight !== '0px';

    if (isOpen) {
      desc.style.maxHeight = '0px';
      icon.style.transform = 'rotate(0deg)';
    } else {
      desc.style.maxHeight = desc.scrollHeight + 'px';
      icon.style.transform = 'rotate(180deg)';
    }
  }

  function toggleAllDescriptions(btn) {
    const allDescs = document.querySelectorAll('#practice-areas .pa-desc');
    const allIcons = document.querySelectorAll('#practice-areas .pa-desc ~ * i, #practice-areas .group button i.fa-chevron-down');
    const label = btn.querySelector('span');
    const masterIcon = btn.querySelector('i');

    const anyOpen = [...allDescs].some(d => d.style.maxHeight && d.style.maxHeight !== '0px');

    allDescs.forEach(desc => {
      const cardIcon = desc.closest('.group').querySelector('button i');
      if (anyOpen) {
        desc.style.maxHeight = '0px';
        if (cardIcon) cardIcon.style.transform = 'rotate(0deg)';
      } else {
        desc.style.maxHeight = desc.scrollHeight + 'px';
        if (cardIcon) cardIcon.style.transform = 'rotate(180deg)';
      }
    });

    if (anyOpen) {
      label.textContent = 'Show Descriptions';
      masterIcon.style.transform = 'rotate(0deg)';
    } else {
      label.textContent = 'Hide Descriptions';
      masterIcon.style.transform = 'rotate(180deg)';
    }
  }
</script>