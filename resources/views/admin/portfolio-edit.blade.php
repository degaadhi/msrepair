@extends('admin.layouts.app')

@section('title', 'Edit Portfolio')
@section('topbar_title', 'Portfolio / Edit Portfolio')

@section('content')
<div class="max-w-4xl mx-auto animate-fade-in-up">
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-10">
        <div>
            <nav class="flex items-center gap-2 text-xs font-medium text-on-surface-variant uppercase tracking-widest mb-2">
                <a href="/admin/portfolio" class="hover:text-primary transition-colors">Portfolios</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-primary">Edit Portfolio</span>
            </nav>
            <h1 class="text-3xl lg:text-4xl font-extrabold font-headline tracking-tight text-on-surface">Edit Portfolio</h1>
            <p class="text-on-surface-variant font-body mt-2 max-w-lg">Perbarui informasi dan dokumentasi portofolio perbaikan.</p>
        </div>
    </div>

    <!-- Validation Errors -->
    @if ($errors->any())
    <div class="bg-error-container text-on-error-container px-6 py-4 rounded-xl font-medium mb-6">
        <ul class="list-disc list-inside text-sm space-y-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Card -->
    <div class="bg-surface-container-lowest rounded-xl p-5 md:p-8 lg:p-10 border border-outline-variant/10 shadow-sm">
        <form action="/admin/portfolio/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf
            @method('PUT')
            
            <!-- Image Upload Dropzone -->
            <div class="space-y-3">
                <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant">Repair Documentation (Kosongkan jika tidak ingin mengubah gambar)</label>
                
                @if($portfolio->image_path)
                <div class="mb-4">
                    <p class="text-sm font-medium mb-2 text-on-surface-variant">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="Current Image" class="w-48 h-auto rounded-lg shadow-sm border border-outline-variant/20">
                </div>
                @endif
 
                <div class="relative group">
                    <div class="w-full aspect-[16/9] md:aspect-[21/9] rounded-xl border-2 border-dashed border-outline-variant/30 bg-surface-container-low flex flex-col items-center justify-center gap-4 transition-all group-hover:border-primary/50 group-hover:bg-surface-container-high cursor-pointer" id="dropzone">
                        <div class="w-16 h-16 rounded-full bg-primary-container/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-primary text-3xl">cloud_upload</span>
                        </div>
                        <div class="text-center">
                            <p class="font-headline font-bold text-on-surface" id="dropzone-text">Click or drag new repair image</p>
                            <p class="text-sm text-on-surface-variant mt-1">High-resolution JPG or PNG (Max 10MB)</p>
                        </div>
                    </div>
                    <input class="absolute inset-0 opacity-0 cursor-pointer" type="file" name="image" accept="image/*" onchange="document.getElementById('dropzone-text').textContent = this.files[0]?.name || 'Click or drag new repair image'" />
                </div>
            </div>

            <!-- Form Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8">
                <!-- Repair Caption (Full Width) -->
                <div class="col-span-1 md:col-span-2 space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant" for="title">Repair Caption</label>
                    <input class="w-full bg-surface-container-high border-none rounded-md px-4 py-3 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface font-medium placeholder:text-on-surface-variant/40" id="title" name="title" placeholder="e.g. iPhone 15 Pro Max Screen Replacement" type="text" value="{{ old('title', $portfolio->title) }}" required />
                </div>

                <!-- Service Category -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant" for="category">Service Category</label>
                    <div class="relative">
                        <select class="w-full appearance-none bg-surface-container-high border-none rounded-md px-4 py-3 pr-10 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface font-medium cursor-pointer" id="category" name="category" required>
                            <option value="Display Repair" {{ old('category', $portfolio->category) === 'Display Repair' ? 'selected' : '' }}>Display Repair</option>
                            <option value="Internal / Logic Board" {{ old('category', $portfolio->category) === 'Internal / Logic Board' ? 'selected' : '' }}>Internal / Logic Board</option>
                            <option value="Housing / Glass Back" {{ old('category', $portfolio->category) === 'Housing / Glass Back' ? 'selected' : '' }}>Housing / Glass Back</option>
                            <option value="Battery Service" {{ old('category', $portfolio->category) === 'Battery Service' ? 'selected' : '' }}>Battery Service</option>
                            <option value="Camera Optimization" {{ old('category', $portfolio->category) === 'Camera Optimization' ? 'selected' : '' }}>Camera Optimization</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                    </div>
                </div>

                <!-- Completion Date -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant" for="completion_date">Completion Date</label>
                    <input class="w-full bg-surface-container-high border-none rounded-md px-4 py-3 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface font-medium" id="completion_date" name="completion_date" type="date" value="{{ old('completion_date', $portfolio->completion_date ? $portfolio->completion_date->format('Y-m-d') : '') }}" />
                </div>

                <!-- Technician Name -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant" for="technician">Repair Technician</label>
                    <input class="w-full bg-surface-container-high border-none rounded-md px-4 py-3 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface font-medium placeholder:text-on-surface-variant/40" id="technician" name="technician" placeholder="Assigned Expert" type="text" value="{{ old('technician', $portfolio->technician) }}" />
                </div>

                <!-- Status -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant">Status</label>
                    <div class="relative">
                        <select class="w-full appearance-none bg-surface-container-high border-none rounded-md px-4 py-3 pr-10 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface font-medium cursor-pointer" name="status" required>
                            <option value="completed" {{ old('status', $portfolio->status) === 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="in_progress" {{ old('status', $portfolio->status) === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                    </div>
                </div>

                <!-- Visibility Toggle -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant">Visibility Status</label>
                    <div class="flex items-center gap-4 py-2">
                        <span class="text-sm font-medium text-on-surface-variant">Private</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input class="sr-only peer" type="checkbox" name="visibility" value="public" {{ old('visibility', $portfolio->visibility) === 'public' ? 'checked' : '' }} />
                            <div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        </label>
                        <span class="text-sm font-bold text-primary">Public</span>
                    </div>
                </div>
            </div>

            <!-- Caption/Description -->
            <div class="space-y-2">
                <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant" for="caption">Detail Description</label>
                <textarea class="w-full bg-surface-container-high border-none rounded-md px-4 py-3 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all text-on-surface font-medium placeholder:text-on-surface-variant/40 resize-none" id="caption" name="caption" rows="4" placeholder="Describe the repair work performed...">{{ old('caption', $portfolio->caption) }}</textarea>
            </div>

            <!-- Footer Actions -->
            <div class="pt-6 border-t border-outline-variant/10 flex flex-col sm:flex-row items-center justify-end gap-4">
                <a href="/admin/portfolio" class="text-on-surface-variant font-headline font-bold hover:text-on-surface transition-colors px-6 py-3">
                    Cancel
                </a>
                <button type="submit" class="bg-gradient-to-br from-primary to-primary-container text-white px-10 py-3.5 rounded-lg font-headline font-extrabold tracking-tight shadow-sm hover:opacity-90 active:scale-95 transition-all">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
