{{-- ═══════════════════════════════════════════
    HERO SECTION — Editorial Impact
    ═══════════════════════════════════════════ --}}
<section id="home" class="relative overflow-hidden bg-surface pt-24 lg:pt-0 min-h-[90vh] flex items-center">
    {{-- Subtle gradient accent top-left --}}
    <div class="absolute top-0 left-0 w-[600px] h-[600px] rounded-full opacity-[0.07] -translate-x-1/2 -translate-y-1/2"
         style="background: radial-gradient(circle, #40E0D0, transparent 70%)"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center min-h-[80vh]">
            {{-- Left: Copy --}}
            <div class="relative z-10 lg:pr-8">
                {{-- Micro-label chip --}}
                <div class="animate-fade-in-up mb-6">
                    <span class="chip-primary">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/>
                        </svg>
                        MITRA RESMI APPLE VIA SEMARANG
                    </span>
                </div>

                {{-- Headline --}}
                <h1 class="animate-fade-in-up animate-delay-100 font-display text-display-lg lg:text-[4rem] leading-[1.05] text-on-surface mb-6">
                    Spesialis Perbaikan
                    <span class="text-gradient italic">iPhone</span> di Semarang
                </h1>

                {{-- Description --}}
                <p class="animate-fade-in-up animate-delay-200 text-on-surface-variant text-lg leading-relaxed max-w-lg mb-10">
                    Teknisi ahli, harga transparan, dan garansi pasti. Kami merawat perangkat Anda dengan presisi seorang <em>craftsman</em> layaknya sebuah mahakarya teknologi.
                </p>

                {{-- CTAs --}}
                <div class="animate-fade-in-up animate-delay-300 flex flex-wrap gap-4">
                    <a href="/pricelist" class="btn-primary">
                        Lihat Daftar Harga
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/contact" class="btn-ghost">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>

            {{-- Right: Hero Image — Asymmetric bleed --}}
            <div class="relative animate-slide-in-right animate-delay-200">
                {{-- Image container with right bleed --}}
                <div class="relative lg:ml-8 lg:-mr-20 xl:-mr-32">
                    <div class="rounded-lg lg:rounded-xl overflow-hidden ambient-shadow">
                        <img
                            src="{{ asset('images/hero-repair.png') }}"
                            alt="iPhone repair workspace"
                            class="w-full h-[400px] lg:h-[520px] object-cover"
                        >
                    </div>

                    {{-- Floating badge — Garansi Resmi --}}
                    <div class="absolute -bottom-4 left-6 lg:left-0 bg-surface-container-lowest rounded-md px-5 py-3.5 ambient-shadow flex items-center gap-3 animate-fade-in-up animate-delay-500">
                        <div class="w-10 h-10 rounded-full bg-gradient-primary flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 1l2.928 5.856L19 7.82l-4.5 4.353L15.572 19 10 16.144 4.428 19l1.072-6.827L1 7.82l6.072-.964L10 1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-on-surface text-sm">Bergaransi Resmi</p>
                            <p class="text-on-surface-variant text-xs">Garansi 90 Hari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
