@extends('admin.layouts.app')

@section('title', 'Portfolio Management')
@section('topbar_title', 'Portfolio Management')

@section('content')
<!-- Success Flash -->
@if (session('success'))
<div class="bg-primary-container/20 text-on-primary-container px-6 py-4 rounded-xl font-medium mb-6 flex items-center gap-3 animate-fade-in-up">
    <span class="material-symbols-outlined">check_circle</span>
    {{ session('success') }}
</div>
@endif

<!-- Page Title Section -->
<section class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 animate-fade-in-up">
    <div class="space-y-2">
        <h2 class="text-3xl lg:text-4xl font-extrabold font-headline tracking-tight text-on-surface">Portfolio Management</h2>
        <p class="text-on-surface-variant text-base max-w-2xl font-body">Curate the visual excellence of Precision Tech repairs. Manage high-resolution documentation for client transparency and marketing.</p>
    </div>
    <div class="flex gap-3 flex-shrink-0">
        <div class="bg-surface-container-lowest border border-outline-variant/10 px-5 py-3 rounded-xl flex items-center gap-3 shadow-sm">
            <span class="text-primary font-extrabold font-headline text-xl">{{ $totalItems }}</span>
            <span class="text-on-surface-variant text-[10px] uppercase tracking-widest font-bold">Total Items</span>
        </div>
        <a href="/admin/portfolio/create" class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-xl font-semibold flex items-center gap-2 hover:opacity-90 transition-opacity shadow-sm">
            <span class="material-symbols-outlined text-[20px]">add</span>
            Upload New
        </a>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="space-y-8 animate-fade-in-up animate-delay-100">
    <div class="flex items-center justify-between border-b border-outline-variant/15 pb-4">
        <h3 class="font-headline font-bold text-2xl text-on-surface">All Portfolios</h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @forelse ($portfolios as $portfolio)
        <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow duration-300">
            <div class="relative h-56 overflow-hidden bg-surface-container-high">
                @if($portfolio->image_path)
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $portfolio->title }}" src="{{ asset('storage/' . $portfolio->image_path) }}"/>
                @else
                <div class="w-full h-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-6xl text-on-surface-variant/20">image</span>
                </div>
                @endif
                <div class="absolute top-4 left-4">
                    @if($portfolio->status === 'completed')
                    <span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Completed</span>
                    @else
                    <span class="bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">In Progress</span>
                    @endif
                </div>
            </div>
            <div class="p-6 space-y-3">
                <div>
                    <h4 class="font-bold font-headline text-lg text-on-surface">{{ $portfolio->title }}</h4>
                    @if($portfolio->caption)
                    <p class="text-sm text-on-surface-variant mt-1 italic leading-relaxed">"{{ $portfolio->caption }}"</p>
                    @endif
                </div>
                <div class="flex justify-between items-center pt-3 border-t border-outline-variant/10">
                    <div class="flex gap-1">
                        <a href="/admin/portfolio/{{ $portfolio->id }}/edit" class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/20 rounded-lg transition-all" title="Edit">
                            <span class="material-symbols-outlined text-xl">edit</span>
                        </a>

                        <form id="delete-form-{{ $portfolio->id }}" method="POST" action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>

                        <a href="#" onclick="event.preventDefault(); if(confirm('Yakin ingin menghapus portfolio ini?')) { document.getElementById('delete-form-{{ $portfolio->id }}').submit(); }" class="p-2 text-on-surface-variant hover:text-error hover:bg-error/10 rounded-lg transition-all" title="Delete">
                            <span class="material-symbols-outlined text-xl">delete</span>
                        </a>
                    </div>
                    <span class="text-xs font-semibold text-on-surface-variant">
                        {{ $portfolio->completion_date ? $portfolio->completion_date->format('M d, Y') : $portfolio->created_at->format('M d, Y') }}
                    </span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full py-16 text-center text-on-surface-variant">
            <span class="material-symbols-outlined text-5xl mb-3 block">photo_library</span>
            <p class="font-medium text-lg">Belum ada portfolio.</p>
            <a href="/admin/portfolio/create" class="text-primary hover:underline font-semibold mt-2 inline-block">Upload portfolio pertama Anda →</a>
        </div>
        @endforelse
    </div>
    
    <!-- Pagination -->
    @if($portfolios->hasPages())
    <div class="mt-8">
        {{ $portfolios->links() }}
    </div>
    @endif
</section>
@endsection
