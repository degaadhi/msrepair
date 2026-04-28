{{-- ═══════════════════════════════════════════
    WHY CHOOSE US — Asymmetric Layout
    ═══════════════════════════════════════════ --}}
<section id="why-us" class="bg-surface section-padding">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">
            {{-- Left Column — Heading & Stats (2 cols) --}}
            <div class="lg:col-span-2">
                <span class="micro-label mb-3 block">MENGAPA KAMI</span>
                <h2 class="font-display text-display-sm lg:text-display-md text-on-surface mb-6">
                    Mengapa Memilih MS Repair?
                </h2>
                <p class="text-on-surface-variant leading-relaxed mb-10">
                    Kami mengutamakan keahlian dan kualitas. Setiap perangkat ditangani dengan standar teknis tinggi.
                </p>

                {{-- Stats --}}
                <div class="flex gap-10">
                    <div>
                        <span class="font-display text-display-sm text-on-surface">5k+</span>
                        <p class="micro-label mt-1">DEVICES FIXED</p>
                    </div>
                    <div>
                        <span class="font-display text-display-sm text-on-surface">4.9</span>
                        <p class="micro-label mt-1">STAR RATING</p>
                    </div>
                </div>
            </div>

            {{-- Right Column — Feature Grid (3 cols) --}}
            <div class="lg:col-span-3 grid sm:grid-cols-2 gap-8">
                {{-- Feature 1: Teknisi Ahli --}}
                <div class="bg-surface-container-low rounded-lg p-6 transition-all duration-300 hover:bg-surface-container">
                    <div class="icon-glow mb-5">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                    </div>
                    <h3 class="text-title-md text-on-surface mb-2">Teknisi Ahli</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Berpengalaman bertahun-tahun khusus menangani ekosistem Apple / iPhone.
                    </p>
                </div>

                {{-- Feature 2: Garansi Resmi --}}
                <div class="bg-surface-container-low rounded-lg p-6 transition-all duration-300 hover:bg-surface-container">
                    <div class="icon-glow mb-5">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <h3 class="text-title-md text-on-surface mb-2">Garansi Resmi</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Jaminan garansi perbaikan atas suku cadang yang digunakan untuk ketenangan pikiran Anda.
                    </p>
                </div>

                {{-- Feature 3: Harga Transparan --}}
                <div class="bg-surface-container-low rounded-lg p-6 transition-all duration-300 hover:bg-surface-container">
                    <div class="icon-glow mb-5">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-title-md text-on-surface mb-2">Harga Transparan</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Tidak ada biaya sembunyikan. Semua harga sesuai di awal sebelum pengerjaan.
                    </p>
                </div>

                {{-- Feature 4: Pengerjaan Cepat --}}
                <div class="bg-surface-container-low rounded-lg p-6 transition-all duration-300 hover:bg-surface-container">
                    <div class="icon-glow mb-5">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <h3 class="text-title-md text-on-surface mb-2">Pengerjaan Cepat</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Mayoritas layanan dapat diselesaikan LCD bisa ditunggu, hanya dalam 30 menit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
