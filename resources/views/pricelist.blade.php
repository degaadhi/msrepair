@extends('layouts.app')

@section('title', 'Daftar Harga Perbaikan — MS Repair')

@section('content')
    {{-- ═══════════════════════════════════════════
        HERO — Price List Header
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface pt-28 pb-16 lg:pt-32 lg:pb-20 section-padding !py-0 relative overflow-hidden">
        {{-- Subtle gradient accent --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full opacity-[0.05]"
             style="background: radial-gradient(circle, #40E0D0, transparent 70%); transform: translate(40%, -30%)"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-28 pb-16 lg:pt-32 lg:pb-20 relative z-10">
            <div class="max-w-2xl">
                <h1 class="animate-fade-in-up font-display text-display-lg lg:text-[4rem] leading-[1.05] text-on-surface mb-6">
                    Daftar Harga
                    <span class="text-gradient italic block">Perbaikan</span>
                </h1>
                <p class="animate-fade-in-up animate-delay-100 text-on-surface-variant text-lg leading-relaxed">
                    Transparansi adalah prioritas kami. Temukan estimasi biaya perbaikan iPhone Anda dengan komponen kualitas premium dan teknisi bersertifikasi.
                </p>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
        SEARCH & FILTER BAR
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface section-padding !py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                {{-- Search Input --}}
                <div class="relative flex-shrink-0 w-full md:w-72">
                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-on-surface-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                    </svg>
                    <input
                        type="text"
                        id="search-input"
                        placeholder="Cari model iPhone atau jenis kerusakan..."
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-high rounded-sm text-sm text-on-surface placeholder:text-on-surface-variant/60 focus:bg-surface-container-lowest focus:outline-none transition-all duration-200"
                        style="box-shadow: none;"
                        onfocus="this.style.boxShadow='inset 0 0 0 2px #006A62'"
                        onblur="this.style.boxShadow='none'"
                    >
                </div>

                {{-- Filter Chips --}}
                <div class="flex flex-wrap gap-2" id="filter-chips">
                    <button data-filter="all" class="filter-chip active chip-primary text-sm cursor-pointer transition-all">
                        Semua Model
                    </button>
                    <button data-filter="iphone-17" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 17
                    </button>
                    <button data-filter="iphone-16" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 16
                    </button>
                    <button data-filter="iphone-15" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 15
                    </button>
                    <button data-filter="iphone-14" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 14
                    </button>
                    <button data-filter="iphone-13" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 13
                    </button>
                    <button data-filter="iphone-12" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 12
                    </button>
                    <button data-filter="iphone-11" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone 11
                    </button>
                    <button data-filter="iphone-x" class="filter-chip chip text-sm cursor-pointer bg-surface-container-low text-on-surface-variant hover:bg-surface-container transition-all">
                        iPhone X/XR/XS
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
        PRICING TABLE
        Tonal Layering: alternating surface / surface-container-low
        No divider lines — only background shifts
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface section-padding !pt-0 !pb-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-surface-container-lowest rounded-lg overflow-hidden ambient-shadow">
                {{-- Table Header --}}
                <div class="hidden md:grid md:grid-cols-12 gap-4 px-8 py-4 bg-surface-container-lowest">
                    <div class="col-span-3">
                        <span class="micro-label">JENIS KERUSAKAN</span>
                    </div>
                    <div class="col-span-6">
                        <span class="micro-label">DESKRIPSI</span>
                    </div>
                    <div class="col-span-3 text-right">
                        <span class="micro-label">HARGA MULAI</span>
                    </div>
                </div>

                @forelse ($services as $service)
                <div class="price-row grid md:grid-cols-12 gap-4 md:gap-4 px-8 py-6 {{ $loop->even ? 'bg-surface-container-low hover:bg-surface-container' : 'bg-surface hover:bg-surface-container-low' }} transition-all duration-200 group" data-category="{{ \Illuminate\Support\Str::slug($service->device_model) }}">
                    <div class="col-span-3 flex items-center gap-4">
                        <div class="icon-glow flex-shrink-0">
                            @if($service->category == 'Display')
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                            </svg>
                            @elseif($service->category == 'Internal')
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 10.5h.375c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125H21M3.75 18h15A2.25 2.25 0 0021 15.75v-6a2.25 2.25 0 00-2.25-2.25h-15A2.25 2.25 0 001.5 9.75v6A2.25 2.25 0 003.75 18z"/>
                            </svg>
                            @elseif($service->category == 'Camera')
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"/>
                            </svg>
                            @else
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                            </svg>
                            @endif
                        </div>
                        <span class="text-title-md text-on-surface">{{ $service->service_name }}</span>
                    </div>
                    <div class="col-span-6">
                        <p class="text-on-surface-variant text-sm leading-relaxed">
                            {{ $service->description ?? 'Layanan perbaikan profesional untuk ' . $service->service_name }}
                        </p>
                        @if($service->device_model)
                        <span class="inline-block mt-2 text-xs font-semibold px-2 py-0.5 rounded-sm bg-surface-container-highest text-on-surface-variant">
                            {{ $service->device_model }}
                        </span>
                        @endif
                    </div>
                    <div class="col-span-3 flex items-center md:justify-end">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-sm bg-primary-container/20 text-primary font-semibold text-sm">
                            Rp {{ number_format($service->price, 0, ',', '.') }}
                        </span>
                    </div>
                </div>
                @empty
                <div class="px-8 py-10 text-center text-on-surface-variant">
                    <p>Belum ada daftar layanan saat ini.</p>
                </div>
                @endforelse
            </div>

            {{-- Disclaimer --}}
            <div class="flex items-center justify-center gap-2 mt-8 text-center">
                <svg class="w-4 h-4 text-tertiary-container flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd"/>
                </svg>
                <p class="text-on-surface-variant text-xs italic">
                    *Harga dapat berubah sewaktu-waktu tergantung pada tingkat kesulitan dan ketersediaan suku cadang.
                </p>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
        CTA — Konsultasi Gratis
        Compact gradient bar matching screenshot
        ═══════════════════════════════════════════ --}}
    <section class="bg-surface section-padding !py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-primary-subtle rounded-lg px-8 py-10 md:px-12 md:py-12 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h2 class="font-display text-display-sm text-white mb-2">Butuh Konsultasi Gratis?</h2>
                    <p class="text-white/80 text-sm">
                        Hubungi teknisi kami sekarang untuk diagnosa awal kerusakan iPhone Anda.
                    </p>
                </div>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn-white flex-shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" class="text-primary">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </section>

    {{-- Filter & Search Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter chips
            const chips = document.querySelectorAll('.filter-chip');
            const rows = document.querySelectorAll('.price-row');

            chips.forEach(chip => {
                chip.addEventListener('click', function() {
                    // Update active chip style
                    chips.forEach(c => {
                        c.classList.remove('active');
                        c.className = c.className.replace(/chip-primary/g, '');
                        c.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                    });
                    this.classList.add('active');
                    this.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
                    this.classList.add('chip-primary');

                    // Filter rows
                    const filter = this.dataset.filter;
                    rows.forEach(row => {
                        const categories = row.dataset.category || '';
                        if (filter === 'all' || categories.includes(filter) || categories.includes('semua-iphone')) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                });
            });

            // Search input
            const searchInput = document.getElementById('search-input');
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const query = this.value.toLowerCase();
                    rows.forEach(row => {
                        const text = row.textContent.toLowerCase();
                        row.style.display = text.includes(query) ? '' : 'none';
                    });
                });
            }
        });
    </script>
@endsection
