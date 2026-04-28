@extends('layouts.app')

@section('title', 'Portfolio Hasil Perbaikan — MS Repair')

@section('content')
    {{-- ═══════════════════════════════════════════
        HEADER SECTION
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface pt-28 pb-16 lg:pt-32 lg:pb-16 section-padding !py-0 relative overflow-hidden">
        {{-- Subtle gradient accent --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full opacity-[0.05]"
             style="background: radial-gradient(circle, #40E0D0, transparent 70%); transform: translate(40%, -30%)"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-28 pb-16 lg:pt-32 lg:pb-16 relative z-10 text-center md:text-left">
            <div class="animate-fade-in-up mb-4">
                <span class="chip-primary">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/>
                    </svg>
                    SHOWCASE
                </span>
            </div>
            
            <h1 class="animate-fade-in-up animate-delay-100 font-display text-display-lg lg:text-[4rem] leading-[1.05] text-on-surface mb-6">
                Portfolio Hasil <br class="hidden md:block"/> 
                <span class="text-gradient italic">Perbaikan</span>
            </h1>
            
            <p class="animate-fade-in-up animate-delay-200 text-on-surface-variant text-lg leading-relaxed max-w-2xl mx-auto md:mx-0">
                Kumpulan bukti dedikasi kami dalam mengembalikan performa iPhone Anda ke kondisi prima. Setiap detail dikerjakan dengan presisi tinggi menggunakan suku cadang berkualitas.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
        MASONRY GRID SECTION
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface section-padding !py-0 pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="masonry-grid animate-fade-in-up animate-delay-300">
                @forelse ($portfolios as $portfolio)
                <div class="masonry-item group relative overflow-hidden rounded-xl bg-surface-container-low ambient-shadow">
                    @if($portfolio->image_path)
                    <img alt="{{ $portfolio->title }}" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('storage/' . $portfolio->image_path) }}"/>
                    @else
                    <div class="w-full aspect-[4/3] bg-surface-variant flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-on-surface-variant/30">image</span>
                    </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <p class="text-primary-container font-display font-bold text-lg">{{ $portfolio->title }}</p>
                            <p class="text-white/80 text-sm font-medium">{{ Str::limit($portfolio->caption, 60) }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-16 text-center text-on-surface-variant">
                    <p class="font-medium text-lg">Belum ada portfolio yang ditampilkan saat ini.</p>
                </div>
                @endforelse
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
        CTA SECTION (Specific for Portfolio)
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface section-padding !py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-primary-subtle rounded-lg px-8 py-10 md:px-12 md:py-12 flex flex-col md:flex-row items-center justify-between gap-6 ambient-shadow relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
                <div class="z-10 text-center md:text-left">
                    <h3 class="font-display text-display-sm md:text-3xl text-white mb-2 tracking-tight">iPhone Anda bermasalah?</h3>
                    <p class="text-white/80 text-sm md:text-base font-medium">
                        Konsultasikan kerusakan perangkat Anda sekarang secara gratis.
                    </p>
                </div>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn-white z-10 flex-shrink-0 group">
                    Hubungi via WhatsApp
                    <svg class="w-4 h-4 text-primary transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
