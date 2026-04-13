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
        <div class="lg:col-span-2 bg-white p-6 sm:p-8 rounded-2xl shadow-sm" x-data="{
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

          <h2 class="text-2xl font-bold text-forest mb-6">Send us a message</h2>

          <form class="space-y-5" @submit.prevent="sendMail">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <input type="text" x-model="name" placeholder="Your Name" class="input input-bordered w-full" />

              <input type="email" x-model="email" placeholder="Your Email" class="input input-bordered w-full" />
            </div>

            <input type="text" x-model="subject" placeholder="Subject" class="input input-bordered w-full" />

            <textarea x-model="message" placeholder="Your Message"
              class="textarea textarea-bordered w-full h-32"></textarea>

            <button type="submit"
              class="px-6 py-3 bg-gold text-white font-semibold rounded-lg hover:bg-gold-dark transition w-full sm:w-auto">
              Send Message
            </button>

          </form>
        </div>

        <!-- ═══ Contact Info ═══ -->
        <div class="space-y-5">

          @if ($contact->phone)
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gold text-white">
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
                <h4 class="font-bold text-forest">{{$contact->phone}}</h4>
                <p class="text-sm text-gray-500">{{$contact->email}}</p>
              </div>
            </div>
          </div>
          @endif

          @if ($contact->full_address)
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gold text-white">
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