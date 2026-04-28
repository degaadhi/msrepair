@extends('admin.layouts.app')

@section('title', 'Edit Layanan')
@section('topbar_title', 'Price List / Edit Layanan')

@section('content')
<div class="max-w-4xl mx-auto animate-fade-in-up">
    <!-- Header Section -->
    <div class="flex items-end justify-between mb-10">
        <div class="space-y-1">
            <nav class="flex items-center gap-2 text-xs font-medium text-on-surface-variant uppercase tracking-widest mb-2">
                <a href="/admin/pricelist" class="hover:text-primary transition-colors">Price Lists</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-primary">Edit Service</span>
            </nav>
            <h1 class="text-3xl lg:text-4xl font-extrabold font-headline tracking-tight text-on-surface">Edit Data Layanan</h1>
            <p class="text-on-surface-variant font-body mt-2 max-w-lg">Perbarui spesifikasi teknis dan harga layanan untuk katalog Precision Tech.</p>
        </div>
        <div class="hidden md:block">
            <span class="material-symbols-outlined text-surface-container-highest text-7xl select-none" style="font-variation-settings: 'FILL' 1;">build_circle</span>
        </div>
    </div>

    <!-- Error Flash -->
    @if ($errors->any())
    <div class="bg-error-container text-on-error-container px-6 py-4 rounded-xl font-medium mb-6 animate-fade-in-up">
        <ul class="list-disc list-inside text-sm space-y-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Card -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="p-8 border-b border-surface-container-low bg-surface-container-low/30">
            <div class="flex items-center gap-3">
                <span class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary-container text-sm">edit_note</span>
                </span>
                <h3 class="text-lg font-bold font-headline text-on-surface">Informasi Layanan</h3>
            </div>
        </div>
        <form action="/admin/pricelist/{{ $service->id }}" method="POST" class="p-8 space-y-8">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Jenis Kerusakan</label>
                        <input type="text" name="service_name" class="w-full font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-on-surface-variant/40 text-on-surface" placeholder="Contoh: Penggantian LCD iPhone 13" value="{{ old('service_name', $service->service_name) }}" required />
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Model Device</label>
                        <input type="text" name="device_model" class="w-full font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-on-surface-variant/40 text-on-surface" placeholder="Contoh: iPhone 15 Pro Max" value="{{ old('device_model', $service->device_model) }}" />
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Kategori</label>
                        <div class="relative group">
                            <select name="category" class="w-full appearance-none font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface cursor-pointer" required>
                                <option disabled value="">Pilih Kategori</option>
                                <option value="Internal" {{ old('category', $service->category) == 'Internal' ? 'selected' : '' }}>Internal (Battery/Board)</option>
                                <option value="Display" {{ old('category', $service->category) == 'Display' ? 'selected' : '' }}>Display (LCD/Touchscreen)</option>
                                <option value="Housing" {{ old('category', $service->category) == 'Housing' ? 'selected' : '' }}>Housing (Body/Frame)</option>
                                <option value="Camera" {{ old('category', $service->category) == 'Camera' ? 'selected' : '' }}>Camera (Front/Rear)</option>
                                <option value="Audio" {{ old('category', $service->category) == 'Audio' ? 'selected' : '' }}>Audio (Speaker/Mic)</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Status Publikasi</label>
                        <div class="relative group">
                            <select name="status" class="w-full appearance-none font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface cursor-pointer" required>
                                <option value="active" {{ old('status', $service->status) == 'active' ? 'selected' : '' }}>Active (Tampil)</option>
                                <option value="inactive" {{ old('status', $service->status) == 'inactive' ? 'selected' : '' }}>Inactive (Sembunyikan)</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                        </div>
                    </div>
                    
                </div>

                <!-- Right Column (Bento Style Info) -->
                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Harga (Estimasi)</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-xs font-bold text-on-surface-variant">IDR</span>
                            <input type="number" name="price" class="w-full font-body font-bold bg-surface-container-high border-none rounded-md pl-14 pr-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-primary" placeholder="0" value="{{ old('price', $service->price) }}" required />
                        </div>
                    </div>

                    <div class="space-y-2 h-full flex flex-col">
                        <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1">Deskripsi Kerusakan</label>
                        <textarea name="description" class="w-full flex-1 font-body font-medium bg-surface-container-high border-none rounded-md px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-on-surface-variant/40 resize-none text-on-surface" placeholder="Berikan penjelasan detail mengenai pengerjaan, estimasi waktu, dan garansi..." rows="6">{{ old('description', $service->description) }}</textarea>
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
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
