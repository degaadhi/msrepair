{{-- ═══════════════════════════════════════════
    SERVICES SECTION — Featured Services
    Tonal Layering: container-low bg + container-lowest cards
    ═══════════════════════════════════════════ --}}
<section id="services" class="bg-surface-container-low section-padding">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-16">
            <div>
                <span class="micro-label mb-3 block">LAYANAN KAMI</span>
                <h2 class="font-display text-display-sm lg:text-display-md text-on-surface">
                    Layanan Unggulan Kami
                </h2>
                <p class="mt-4 text-on-surface-variant max-w-xl leading-relaxed">
                    Solusi perbaikan komprehensif untuk setiap masalah iPhone Anda dengan suku cadang kualitas terbaik.
                </p>
            </div>
            <a href="/pricelist" class="text-primary font-semibold text-sm flex items-center gap-1.5 hover:gap-3 transition-all group">
                Lihat Semua Layanan
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        {{-- Service Cards Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Card 1: Ganti LCD --}}
            <div class="card-tonal group">
                <div class="icon-glow mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                    </svg>
                </div>

                <h3 class="text-title-lg text-on-surface mb-3">Ganti LCD</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
                    Layar pecah atau tidak responsif? Kami menyediakan penggantian LCD dengan kualitas warna dan sentuhan original.
                </p>

                <div class="flex items-center justify-between">
                    <span class="text-on-surface-variant text-sm">Mulai dari <span class="font-semibold text-on-surface">Rp 450.000</span></span>
                    <span class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </div>

            {{-- Card 2: Ganti Baterai --}}
            <div class="card-tonal group">
                <div class="icon-glow mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 10.5h.375c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125H21M3.75 18h15A2.25 2.25 0 0021 15.75v-6a2.25 2.25 0 00-2.25-2.25h-15A2.25 2.25 0 001.5 9.75v6A2.25 2.25 0 003.75 18z"/>
                    </svg>
                </div>

                <h3 class="text-title-lg text-on-surface mb-3">Ganti Baterai</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
                    Baterai boros atau service recommended? Kembalikan performa iPhone Anda dengan baterai berkapasitas murni.
                </p>

                <div class="flex items-center justify-between">
                    <span class="text-on-surface-variant text-sm">Mulai dari <span class="font-semibold text-on-surface">Rp 250.000</span></span>
                    <span class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </div>

            {{-- Card 3: Servis Mesin --}}
            <div class="card-tonal group">
                <div class="icon-glow mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l-5.71 3.31a.488.488 0 01-.717-.548l1.38-6.42L.907 6.452a.488.488 0 01.27-.835l6.468-.94 2.888-5.852a.488.488 0 01.876 0l2.888 5.852 6.468.94a.488.488 0 01.27.835l-4.476 5.06 1.38 6.42a.488.488 0 01-.717.548l-5.71-3.31z"/>
                    </svg>
                </div>

                <h3 class="text-title-lg text-on-surface mb-3">Servis Mesin</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
                    Mati total atau sering restart sendiri? Teknisi micro‑soldering kami ahli dalam menangani kerusakan pada logic board.
                </p>

                <div class="flex items-center justify-between">
                    <span class="text-on-surface-variant text-sm">
                        <a href="https://wa.me/6281234567890" target="_blank" class="text-primary font-semibold hover:underline">Konsultasi Terlebih Dahulu</a>
                    </span>
                    <span class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
