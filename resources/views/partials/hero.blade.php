{{-- ═══════════════════════════════════════════
    HERO SECTION — Editorial Impact
    ═══════════════════════════════════════════ --}}
<section id="home" class="relative overflow-hidden bg-surface pt-28 lg:pt-0 min-h-[90vh] flex items-center">
    {{-- Subtle gradient accent top-left --}}
    <div class="absolute top-0 left-0 w-[800px] h-[800px] rounded-full opacity-[0.08] blur-3xl -translate-x-1/2 -translate-y-1/2"
         style="background: radial-gradient(circle, #40E0D0, transparent 70%)"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-8 items-center min-h-[80vh] pb-16 lg:pb-0">
            {{-- Left: Copy --}}
            <div class="relative z-10 lg:pr-8 text-center lg:text-left mt-8 lg:mt-0">
                {{-- Micro-label chip --}}
                <div class="animate-fade-in-up mb-8 flex justify-center lg:justify-start">
                    <span class="chip-primary shadow-sm text-xs sm:text-sm px-4 py-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/>
                        </svg>
                        MITRA RESMI APPLE VIA SEMARANG
                    </span>
                </div>

                {{-- Headline --}}
                <h1 class="animate-fade-in-up animate-delay-100 font-display text-[2.5rem] sm:text-5xl lg:text-[4rem] leading-[1.1] text-on-surface mb-6 font-extrabold tracking-tight">
                    Spesialis Perbaikan
                    <span class="text-gradient block mt-1">iPhone di Semarang</span>
                </h1>

                {{-- Description --}}
                <p class="animate-fade-in-up animate-delay-200 text-on-surface-variant text-base sm:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0 mb-10">
                    Teknisi ahli, harga transparan, dan garansi pasti. Kami merawat perangkat Anda dengan presisi seorang <em class="font-medium text-primary">craftsman</em> layaknya sebuah mahakarya teknologi.
                </p>

                {{-- CTAs --}}
                <div class="animate-fade-in-up animate-delay-300 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="/pricelist" class="btn-primary w-full sm:w-auto text-base group shadow-lg shadow-primary/20">
                        Lihat Daftar Harga
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/contact" class="btn-ghost w-full sm:w-auto text-base hover:bg-surface-container hover:border-transparent">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>

            {{-- Right: Hero Image — Asymmetric bleed --}}
            <div class="relative animate-slide-in-right animate-delay-200 lg:mt-0">
                {{-- Image container with right bleed --}}
                <div class="relative lg:ml-8 lg:-mr-20 xl:-mr-32">
                    <div class="rounded-2xl lg:rounded-[2rem] overflow-hidden ambient-shadow ring-1 ring-black/5">
                        <img
                            src="{{ asset('images/hero-repair.png') }}"
                            alt="iPhone repair workspace"
                            class="w-full h-[320px] sm:h-[450px] lg:h-[580px] object-cover hover:scale-105 transition-transform duration-1000"
                        >
                    </div>

                    {{-- Floating badge — Garansi Resmi --}}
                    <div class="absolute -bottom-6 left-0 right-0 flex justify-center lg:-left-12 lg:right-auto lg:justify-start lg:-bottom-8 z-20">
                        <div class="bg-white/90 backdrop-blur-xl rounded-2xl p-4 sm:p-5 ambient-shadow flex items-center gap-4 animate-fade-in-up animate-delay-500 border border-white/40 whitespace-nowrap">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gradient-primary flex items-center justify-center flex-shrink-0 shadow-lg shadow-primary/30">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 1l2.928 5.856L19 7.82l-4.5 4.353L15.572 19 10 16.144 4.428 19l1.072-6.827L1 7.82l6.072-.964L10 1z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-extrabold text-on-surface text-base sm:text-lg">Bergaransi Resmi</p>
                                <p class="text-on-surface-variant text-sm font-medium">Hingga 90 Hari</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
