@extends('admin.layouts.app')

@section('title', 'Dashboard Overview')

@section('content')
<!-- Stats Cards: Bento Style -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 animate-fade-in-up">
    <!-- Card 1 -->
    <div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl flex items-center justify-between group hover:bg-primary/5 transition-colors duration-300 shadow-sm border border-outline-variant/10">
        <div>
            <p class="text-on-surface-variant text-sm font-medium uppercase tracking-widest mb-1">Total Item Harga</p>
            <h3 class="text-4xl font-extrabold text-on-surface tracking-tight font-headline">{{ number_format($totalPrices) }}</h3>
            <p class="text-primary text-xs font-semibold mt-2 flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">inventory_2</span>
                Layanan terdaftar
            </p>
        </div>
        <div class="w-16 h-16 rounded-full bg-primary-container/20 flex items-center justify-center group-hover:bg-primary-container transition-colors duration-300">
            <span class="material-symbols-outlined text-primary text-3xl">inventory_2</span>
        </div>
    </div>
    
    <!-- Card 2 -->
    <div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl flex items-center justify-between group hover:bg-primary/5 transition-colors duration-300 shadow-sm border border-outline-variant/10">
        <div>
            <p class="text-on-surface-variant text-sm font-medium uppercase tracking-widest mb-1">Total Portfolio</p>
            <h3 class="text-4xl font-extrabold text-on-surface tracking-tight font-headline">{{ number_format($totalPortfolios) }}</h3>
            <p class="text-primary text-xs font-semibold mt-2 flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">photo_library</span>
                Proyek dokumentasi
            </p>
        </div>
        <div class="w-16 h-16 rounded-full bg-primary-container/20 flex items-center justify-center group-hover:bg-primary-container transition-colors duration-300">
            <span class="material-symbols-outlined text-primary text-3xl">photo_library</span>
        </div>
    </div>
</div>

<!-- Summary Tables Section -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8 animate-fade-in-up animate-delay-100">
    <!-- Latest Price Items -->
    <div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm border border-outline-variant/10">
        <div class="px-6 py-5 flex justify-between items-center bg-surface-container-low/50">
            <h4 class="font-headline font-bold text-on-surface">Latest Price Items</h4>
            <a href="/admin/pricelist" class="text-primary text-sm font-semibold hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-lowest border-b border-outline-variant/10">
                        <th class="px-4 md:px-6 py-3 md:py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Device Model</th>
                        <th class="px-4 md:px-6 py-3 md:py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Service</th>
                        <th class="px-4 md:px-6 py-3 md:py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant text-right">Price</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse ($latestPrices as $price)
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-4 md:px-6 py-3 md:py-4 text-sm font-medium text-on-surface">{{ $price->device_model ?? '-' }}</td>
                        <td class="px-4 md:px-6 py-3 md:py-4 text-sm text-on-surface-variant">{{ $price->service_name }}</td>
                        <td class="px-4 md:px-6 py-3 md:py-4 text-sm font-bold text-primary text-right">Rp {{ number_format($price->price, 0, ',', '.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-8 text-center text-on-surface-variant">
                            <span class="material-symbols-outlined text-3xl mb-2 block">inventory_2</span>
                            <p class="text-sm">Belum ada data layanan. <a href="/admin/pricelist/create" class="text-primary hover:underline font-semibold">Tambah sekarang</a></p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Latest Portfolio Entries -->
    <div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm border border-outline-variant/10">
        <div class="px-6 py-5 flex justify-between items-center bg-surface-container-low/50">
            <h4 class="font-headline font-bold text-on-surface">Latest Portfolios</h4>
            <a href="/admin/portfolio" class="text-primary text-sm font-semibold hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-lowest border-b border-outline-variant/10">
                        <th class="px-4 md:px-6 py-3 md:py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Repair Case</th>
                        <th class="px-4 md:px-6 py-3 md:py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Technician</th>
                        <th class="px-4 md:px-6 py-3 md:py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant text-right">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse ($latestPortfolios as $portfolio)
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-4 md:px-6 py-3 md:py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded bg-surface-container-high overflow-hidden flex-shrink-0">
                                @if($portfolio->image_path)
                                <img src="{{ asset('storage/' . $portfolio->image_path) }}" class="w-full h-full object-cover" alt="{{ $portfolio->title }}">
                                @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-on-surface-variant/30 text-lg">image</span>
                                </div>
                                @endif
                            </div>
                            <div>
                                <p class="text-sm font-medium text-on-surface">{{ $portfolio->title }}</p>
                                <p class="text-xs text-on-surface-variant">{{ $portfolio->category }}</p>
                            </div>
                        </td>
                        <td class="px-4 md:px-6 py-3 md:py-4 text-sm text-on-surface-variant">{{ $portfolio->technician ?? '-' }}</td>
                        <td class="px-4 md:px-6 py-3 md:py-4 text-right">
                            @if($portfolio->status === 'completed')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary-container text-on-primary-container">COMPLETED</span>
                            @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-tertiary-container text-on-tertiary-container">IN PROGRESS</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-8 text-center text-on-surface-variant">
                            <span class="material-symbols-outlined text-3xl mb-2 block">photo_library</span>
                            <p class="text-sm">Belum ada portfolio. <a href="/admin/portfolio/create" class="text-primary hover:underline font-semibold">Upload sekarang</a></p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
