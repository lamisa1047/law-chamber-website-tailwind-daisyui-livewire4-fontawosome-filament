<div class="bg-gray-100">


  <!-- ══════════ CONTACT SECTION ══════════ -->
  <section class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

      <div class="mb-5mb-8 sm:mb-12">
        <div class="text-[0.75rem] tracking-[0.2em] uppercase font-bold text-gold mb-2">You can call us, send message,
          or visit office</div>
        <h2 class="text-3xl sm:text-4xl font-display font-bold text-forest">Contact Us</h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- ═══ Contact Form ═══ -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm overflow-hidden" x-data="{
            name: '',
            email: '',
            subject: '',
            message: '',
            mailTo: '{{ $contact->email }}',
            sendMail() {
                const body = `Name: ${this.name}
        Email: ${this.email}
        
        Message:
        ${this.message}`;
                const url = `mailto:${this.mailTo}?subject=${encodeURIComponent(this.subject)}&body=${encodeURIComponent(body)}`;
                window.location.href = url;
            }
        }">

          <!-- Card header -->
          <div class="bg-forest px-8 py-6">
            <h2 class="text-xl font-bold text-white">Send us a Message</h2>
            <p class="text-white/50 text-sm mt-1">We'll get back to you as soon as possible.</p>
          </div>

          <!-- Form body -->
          <form class="px-8 py-8 space-y-5" @submit.prevent="sendMail">

            <!-- Name + Email -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

              <div class="flex flex-col gap-1.5">
                <label class="text-[11px] font-bold tracking-widest uppercase text-gray-400">Your Name</label>
                <div
                  class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-2.5 focus-within:border-forest transition-all">
                  <i class="fas fa-user text-gray-300 text-sm shrink-0"></i>
                  <input type="text" x-model="name" placeholder="John Doe"
                    class="flex-1 text-sm text-gray-700 outline-none bg-transparent placeholder-gray-300" />
                </div>
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="text-[11px] font-bold tracking-widest uppercase text-gray-400">Your Email</label>
                <div
                  class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-2.5 focus-within:border-forest transition-all">
                  <i class="fas fa-envelope text-gray-300 text-sm shrink-0"></i>
                  <input type="email" x-model="email" placeholder="you@email.com"
                    class="flex-1 text-sm text-gray-700 outline-none bg-transparent placeholder-gray-300" />
                </div>
              </div>

            </div>

            <!-- Subject -->
            <div class="flex flex-col gap-1.5">
              <label class="text-[11px] font-bold tracking-widests uppercase text-gray-400">Subject</label>
              <div
                class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-2.5 focus-within:border-forest transition-all">
                <i class="fas fa-pen text-gray-300 text-sm shrink-0"></i>
                <input type="text" x-model="subject" placeholder="How can we help?"
                  class="flex-1 text-sm text-gray-700 outline-none bg-transparent placeholder-gray-300" />
              </div>
            </div>

            <!-- Message -->
            <div class="flex flex-col gap-1.5">
              <label class="text-[11px] font-bold tracking-widests uppercase text-gray-400">Message</label>
              <div
                class="flex items-start gap-2 border border-gray-200 rounded-xl px-3 py-2.5 focus-within:border-forest transition-all">
                <i class="fas fa-comment-alt text-gray-300 text-sm shrink-0 mt-0.5"></i>
                <textarea x-model="message" placeholder="Write your message here..." rows="5"
                  class="flex-1 text-sm text-gray-700 outline-none bg-transparent placeholder-gray-300 resize-none"></textarea>
              </div>
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-between pt-1">
              <p class="text-xs text-gray-400">
                <i class="fas fa-lock text-gray-300 mr-1"></i>
                Your information is safe with us.
              </p>
              <button type="submit"
                class="inline-flex items-center gap-2 bg-forest hover:bg-forest/90 text-white text-sm font-semibold px-6 py-3 rounded-xl transition-all">
                Send Message
                <i class="fas fa-paper-plane text-xs"></i>
              </button>
            </div>

          </form>
        </div>

        <!-- ═══ Contact Info ═══ -->
        <div class="space-y-5">

          @if ($contact->phone)
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 flex items-center justify-center rounded-full bg-forest text-white">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <h4 class="font-bold text-forest">Phone</h4>
                <p class="text-sm text-gray-500">{{$contact->phone}}</p>
              </div>
            </div>
          </div>
          @endif

          @if ($contact->email)
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 flex items-center justify-center rounded-full bg-forest text-white">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="font-bold text-forest">Email</h4>
                <p class="text-sm text-gray-500">{{$contact->email}}</p>
              </div>
            </div>
          </div>
          @endif

          @if ($contact->full_address)
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 flex items-center justify-center rounded-full bg-forest text-white">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="font-bold text-forest">{{$contact->full_address}}</h4>
                <p class="text-sm text-gray-500">
                  Bangladesh
                </p>
              </div>
            </div>
          </div>
          @endif

        </div>

      </div>

      <!-- ═══ MAP ═══ -->
      <div class="mt-12 rounded-2xl overflow-hidden shadow-sm">
        @if($contact->getEmbedMapUrl())
        <iframe src="{{ $contact->getEmbedMapUrl() }}" width="100%" height="350" style="border:0;" loading="lazy">
        </iframe>
        @endif
      </div>

    </div>
  </section>

</div>