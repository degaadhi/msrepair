@extends('admin.layouts.app')

@section('title', 'Tambah Layanan Baru')
@section('topbar_title', 'Price List / Tambah Layanan')

@section('content')
<div class="max-w-4xl mx-auto animate-fade-in-up">
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-10">
        <div class="space-y-1">
            <nav class="flex items-center gap-2 text-xs font-medium text-on-surface-variant uppercase tracking-widest mb-2">
                <a href="/admin/pricelist" class="hover:text-primary transition-colors">Price Lists</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-primary">New Service</span>
            </nav>
            <h1 class="text-3xl lg:text-4xl font-extrabold font-headline tracking-tight text-on-surface">Tambah Layanan Baru</h1>
            <p class="text-on-surface-variant font-body mt-2 max-w-lg">Input spesifikasi layanan perbaikan baru ke dalam sistem katalog Precision Tech Editorial.</p>
        </div>
        <div class="hidden md:block">
            <span class="material-symbols-outlined text-surface-container-highest text-7xl select-none" style="font-variation-settings: 'FILL' 1;">build_circle</span>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="p-5 md:p-8 border-b border-surface-container-low bg-surface-container-low/30">
            <div class="flex items-center gap-3">
                <span class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary-container text-sm">edit_note</span>
                </span>
                <h3 class="text-lg font-bold font-headline text-on-surface">Informasi Layanan</h3>
            </div>
        </div>
        <form action="/admin/pricelist" method="POST" class="p-5 md:p-8 space-y-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Jenis Kerusakan</label>
                        <input type="text" name="service_name" class="w-full font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-on-surface-variant/40 text-on-surface" placeholder="Contoh: Penggantian LCD iPhone 13" value="{{ old('service_name') }}" required />
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Kategori</label>
                        <div class="relative group">
                            <select name="category" class="w-full appearance-none font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface cursor-pointer" required>
                                <option disabled selected value="">Pilih Kategori</option>
                                <option value="Internal">Internal (Battery/Board)</option>
                                <option value="Display">Display (LCD/Touchscreen)</option>
                                <option value="Housing">Housing (Body/Frame)</option>
                                <option value="Camera">Camera (Front/Rear)</option>
                                <option value="Audio">Audio (Speaker/Mic)</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Harga (Estimasi)</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-xs font-bold text-on-surface-variant">IDR</span>
                            <input type="number" name="price" class="w-full font-body font-bold bg-surface-container-high border-none rounded-md pl-14 pr-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-primary" placeholder="0" value="{{ old('price') }}" required />
                        </div>
                    </div>
                </div>

                <!-- Right Column (Bento Style Info) -->
                <div class="space-y-6">
                    <div class="space-y-2 h-full flex flex-col">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Deskripsi Kerusakan</label>
                        <textarea name="description" class="w-full flex-1 font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-on-surface-variant/40 resize-none text-on-surface" placeholder="Berikan penjelasan detail mengenai pengerjaan, estimasi waktu, dan garansi..." rows="8">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Visual Divider -->
            <div class="h-px bg-outline-variant/20"></div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 pt-2">
                <div class="flex items-center gap-2 text-on-surface-variant bg-surface-container-high/50 px-4 py-2 rounded-lg">
                    <span class="material-symbols-outlined text-[16px]">info</span>
                    <span class="text-[10px] uppercase font-bold tracking-wider">Perubahan langsung terlihat di Client Dashboard</span>
                </div>
                <div class="flex items-center gap-4 w-full sm:w-auto">
                    <a href="/admin/pricelist" class="px-6 py-2.5 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-high rounded-md transition-colors border border-outline-variant/30 text-center flex-1 sm:flex-none">
                        Batal
                    </a>
                    <button type="submit" class="px-8 py-2.5 text-sm font-bold text-white bg-gradient-to-br from-primary to-primary-container rounded-md shadow-sm hover:opacity-90 active:scale-95 transition-all text-center flex-1 sm:flex-none">
                        Simpan Layanan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Supplemental Info Cards (Asymmetric Layout) -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 animate-fade-in-up animate-delay-100">
        <div class="bg-surface-container-lowest border border-outline-variant/10 shadow-sm p-6 rounded-xl space-y-3">
            <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">shield</span>
            <h4 class="font-bold font-headline text-sm text-on-surface">Standar Kualitas</h4>
            <p class="text-xs text-on-surface-variant font-body leading-relaxed">Pastikan setiap deskripsi menyertakan informasi part Original atau Grade A untuk transparansi konsumen.</p>
        </div>
        
        <div class="bg-surface-container-lowest border border-outline-variant/10 shadow-sm p-6 rounded-xl space-y-3">
            <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">timer</span>
            <h4 class="font-bold font-headline text-sm text-on-surface">Estimasi Waktu</h4>
            <p class="text-xs text-on-surface-variant font-body leading-relaxed">Sistem akan secara otomatis menambahkan durasi 3-5 hari kerja jika tidak ditentukan secara eksplisit dalam kolom deskripsi.</p>
        </div>
        
        <div class="bg-primary-container/10 p-6 rounded-xl border border-primary-container/20 flex flex-col justify-center items-center text-center space-y-2 relative overflow-hidden group">
            <span class="material-symbols-outlined absolute -right-4 -top-4 text-[80px] text-primary/5 group-hover:scale-110 transition-transform duration-500">settings</span>
            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-primary relative z-10">Service Code</p>
            <p class="text-2xl font-headline font-extrabold text-on-surface relative z-10">PR-NEW</p>
        </div>
    </div>
</div>

<!-- Floating Action Visual Element -->
<div class="fixed bottom-8 -right-8 pointer-events-none opacity-5 hidden lg:block">
    <span class="material-symbols-outlined text-[200px] text-primary" style="font-variation-settings: 'FILL' 1;">manufacturing</span>
</div>
@endsection
