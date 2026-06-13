@extends('admin.layouts.app')

@section('title', 'Price List Management')
@section('topbar_title', 'Price List Management')

@section('content')
<!-- Success Flash -->
@if (session('success'))
<div class="bg-primary-container/20 text-on-primary-container px-6 py-4 rounded-xl font-medium mb-6 flex items-center gap-3 animate-fade-in-up">
    <span class="material-symbols-outlined">check_circle</span>
    {{ session('success') }}
</div>
@endif

<!-- Header Section -->
<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 animate-fade-in-up">
    <div>
        <h2 class="text-3xl lg:text-4xl font-extrabold font-headline tracking-tight text-on-surface mb-2">Price List Management</h2>
        <p class="text-on-surface-variant font-body text-sm lg:text-base">Define and manage repair service costs for all hardware models.</p>
    </div>
    <a href="/admin/pricelist/create" class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-md font-semibold flex items-center gap-2 hover:opacity-90 transition-opacity">
        <span class="material-symbols-outlined text-[20px]">add</span>
        Add New Service
    </a>
</div>

<!-- Dashboard Bento / Stats -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-10 animate-fade-in-up animate-delay-100">
    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/10 shadow-sm relative overflow-hidden group">
        <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/5 rounded-full blur-xl group-hover:bg-primary/10 transition-colors"></div>
        <p class="text-[10px] uppercase tracking-widest text-on-surface-variant font-medium mb-2 relative z-10">Total Services</p>
        <h3 class="text-2xl font-bold font-headline text-on-surface relative z-10">{{ $totalServices }}</h3>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/10 shadow-sm relative overflow-hidden group">
        <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/5 rounded-full blur-xl group-hover:bg-primary/10 transition-colors"></div>
        <p class="text-[10px] uppercase tracking-widest text-on-surface-variant font-medium mb-2 relative z-10">Average Price</p>
        <h3 class="text-2xl font-bold font-headline text-on-surface relative z-10">Rp {{ number_format($avgPrice / 1000000, 1) }}M</h3>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/10 shadow-sm relative overflow-hidden group">
        <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/5 rounded-full blur-xl group-hover:bg-primary/10 transition-colors"></div>
        <p class="text-[10px] uppercase tracking-widest text-on-surface-variant font-medium mb-2 relative z-10">Categories</p>
        <h3 class="text-2xl font-bold font-headline text-on-surface relative z-10">{{ $categories }}</h3>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/10 shadow-sm relative overflow-hidden group">
        <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/5 rounded-full blur-xl group-hover:bg-primary/10 transition-colors"></div>
        <p class="text-[10px] uppercase tracking-widest text-on-surface-variant font-medium mb-2 relative z-10">Last Updated</p>
        <h3 class="text-2xl font-bold font-headline text-on-surface relative z-10">{{ $services->count() > 0 ? $services->first()->updated_at->diffForHumans() : 'N/A' }}</h3>
    </div>
</div>

<!-- Main Data Table Container -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm animate-fade-in-up animate-delay-200 border border-outline-variant/10">
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-lowest border-b border-outline-variant/10">
                    <th class="px-4 md:px-8 py-4 md:py-5 text-[11px] uppercase tracking-widest font-bold text-on-surface-variant">Service Name</th>
                    <th class="px-4 md:px-8 py-4 md:py-5 text-[11px] uppercase tracking-widest font-bold text-on-surface-variant">Category</th>
                    <th class="px-4 md:px-8 py-4 md:py-5 text-[11px] uppercase tracking-widest font-bold text-on-surface-variant">Base Price</th>
                    <th class="px-4 md:px-8 py-4 md:py-5 text-[11px] uppercase tracking-widest font-bold text-on-surface-variant">Description</th>
                    <th class="px-4 md:px-8 py-4 md:py-5 text-[11px] uppercase tracking-widest font-bold text-on-surface-variant text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/10">
                @forelse ($services as $service)
                <tr class="{{ $loop->even ? 'bg-surface' : 'bg-surface-container-lowest' }} hover:bg-surface-container-low/50 transition-colors group">
                    <td class="px-4 md:px-8 py-4 md:py-6">
                        <p class="font-semibold text-on-surface">{{ $service->service_name }}</p>
                        @if($service->device_model)
                        <p class="text-xs text-on-surface-variant mt-1">{{ $service->device_model }}</p>
                        @endif
                    </td>
                    <td class="px-4 md:px-8 py-4 md:py-6">
                        <span class="bg-primary/10 text-primary text-[10px] font-bold px-3 py-1.5 rounded-md uppercase tracking-wider">{{ $service->category }}</span>
                    </td>
                    <td class="px-4 md:px-8 py-4 md:py-6 font-mono font-bold text-primary">Rp {{ number_format($service->price, 0, ',', '.') }}</td>
                    <td class="px-4 md:px-8 py-4 md:py-6 text-sm text-on-surface-variant max-w-[200px] truncate">
                        {{ $service->description ?? '-' }}
                    </td>
                    <td class="px-4 md:px-8 py-4 md:py-6 text-right">
                        <div class="flex justify-end gap-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity">
                            <a href="/admin/pricelist/{{ $service->id }}/edit" class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/20 rounded-lg transition-all" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </a>

                            <form id="delete-form-{{ $service->id }}" method="POST" action="{{ route('admin.pricelist.destroy', $service->id) }}" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>

                            <a href="#" onclick="event.preventDefault(); if(confirm('Yakin ingin menghapus layanan ini?')) { document.getElementById('delete-form-{{ $service->id }}').submit(); }" class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/20 rounded-lg transition-all" title="Delete">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-12 text-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-4xl mb-2 block">inventory_2</span>
                        <p class="font-medium">Belum ada layanan. <a href="/admin/pricelist/create" class="text-primary hover:underline">Tambah sekarang</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    @if($services->hasPages())
    <div class="px-8 py-4 bg-surface-container-lowest border-t border-outline-variant/10">
        {{ $services->links() }}
    </div>
    @endif
</div>
@endsection
