{{-- ═══════════════════════════════════════════
    CTA — Contact Section
    Full-width gradient background
    ═══════════════════════════════════════════ --}}
<section id="contact" class="bg-gradient-primary section-padding relative overflow-hidden">
    {{-- Decorative circles --}}
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-white/10 rounded-full blur-2xl translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10">
        <span class="micro-label mb-4 inline-block bg-white/20 text-white px-4 py-1.5 rounded-full font-bold backdrop-blur-sm border border-white/30">BUTUH BANTUAN?</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mb-6 font-extrabold leading-tight drop-shadow-sm">
            Hubungi Kami Sekarang
        </h2>
        <p class="text-white/90 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto mb-10 font-medium">
            Butuh konsultasi atau ingin tanya estimasi harga? Tim CS kami siap membantu Anda kapanpun dengan ramah dan cepat.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
            <a href="https://wa.me/{{ preg_replace('/^0/', '62', \App\Models\Setting::get('whatsapp', '085728160180')) }}" target="_blank" class="btn-white w-full sm:w-auto text-base shadow-xl hover:-translate-y-1 hover:shadow-2xl">
                <svg class="w-5 h-5 text-green-600" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                WhatsApp Admin
            </a>
            <a href="tel:{{ \App\Models\Setting::get('whatsapp', '085728160180') }}" class="btn-outline-white w-full sm:w-auto text-base hover:-translate-y-1 hover:bg-white/10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                </svg>
                Hubungi Telepon
            </a>
        </div>
    </div>
</section>
