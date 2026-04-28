{{-- ═══════════════════════════════════════════
    FOOTER — Surface Container Highest
    Updated: social icons, structured columns, legal links
    ═══════════════════════════════════════════ --}}
<footer class="bg-surface-container-highest section-padding !pt-16 !pb-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
            {{-- Column 1: About + Social --}}
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="MS Repair" class="h-7 w-auto">
                    <span class="font-display font-bold text-lg text-on-surface">MS Repair</span>
                </div>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-5">
                    Solusi perbaikan iPhone terpercaya dengan teknisi berpengalaman dan garansi hingga 1 tahun untuk setiap penggantian suku cadang.
                </p>
                {{-- Social Icons --}}
                <div class="flex items-center gap-3">
                    <a href="#" class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all" aria-label="Share">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all" aria-label="Location">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Column 2: Layanan Kami --}}
            <div>
                <h4 class="font-semibold text-on-surface mb-4">Layanan Kami</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-on-surface-variant text-sm hover:text-primary transition-colors">Home</a></li>
                    <li><a href="/pricelist" class="text-on-surface-variant text-sm hover:text-primary transition-colors font-medium">Price List</a></li>
                    <li><a href="/portfolio" class="text-on-surface-variant text-sm hover:text-primary transition-colors font-medium">Portfolio</a></li>
                    <li><a href="/contact" class="text-on-surface-variant text-sm hover:text-primary transition-colors font-medium">Contact</a></li>
                    <li><a href="https://wa.me/6281234567890" target="_blank" class="text-on-surface-variant text-sm hover:text-primary transition-colors">WhatsApp</a></li>
                </ul>
            </div>

            {{-- Column 3: Lokasi Workshop --}}
            <div>
                <h4 class="font-semibold text-on-surface mb-4">Lokasi Workshop</h4>
                <ul class="space-y-3 text-on-surface-variant text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                        <div>
                            VC3F+V48 Gedanganak,<br>
                            Semarang Regency,<br>
                            Central Java
                        </div>
                    </li>
                    <li class="flex items-start gap-2 mt-4">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <span class="font-semibold text-on-surface">Jam Operasional:</span><br>
                            Senin – Sabtu: 09.00 – 20.00 WIB
                        </div>
                    </li>
                </ul>
            </div>

            {{-- Column 4: Berlangganan (Newsletter) --}}
            <div>
                <h4 class="font-semibold text-on-surface mb-4">Berlangganan</h4>
                <p class="text-on-surface-variant text-sm mb-4">
                    Dapatkan info diskon perbaikan dan tips merawat iPhone langsung ke email Anda.
                </p>
                @if(session('subscribe_success'))
                <div class="bg-primary-container/20 text-on-primary-container px-4 py-3 rounded-lg text-sm font-medium mb-3 flex items-center gap-2">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    {{ session('subscribe_success') }}
                </div>
                @elseif(session('subscribe_info'))
                <div class="bg-tertiary-container/20 text-on-tertiary-container px-4 py-3 rounded-lg text-sm font-medium mb-3">
                    {{ session('subscribe_info') }}
                </div>
                @endif
                <form action="{{ route('subscribe') }}" method="POST" class="flex flex-col gap-3">
                    @csrf
                    <div class="relative">
                        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-on-surface-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                        <input type="email" name="email" placeholder="Alamat email Anda" required class="w-full pl-10 pr-4 py-2.5 bg-surface-container rounded-sm border border-outline-variant/30 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-sm text-on-surface placeholder-on-surface-variant/60 transition-all">
                    </div>
                    <button type="submit" class="btn-primary !px-4 !py-2.5 !text-sm w-full">
                        Berlangganan Sekarang
                    </button>
                </form>
            </div>
        </div>

        {{-- Copyright + Legal --}}
        <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4" style="border-top: 1px solid rgba(186, 202, 198, 0.15);">
            <p class="text-on-surface-variant text-xs">
                &copy; {{ date('Y') }} MS Repair. Precision Engineering for iPhone.
            </p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-on-surface-variant text-xs hover:text-primary transition-colors">Privacy Policy</a>
                <a href="#" class="text-on-surface-variant text-xs hover:text-primary transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
