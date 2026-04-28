@extends('admin.layouts.app')

@section('title', 'Settings')
@section('topbar_title', 'System Preferences')

@section('content')
<!-- Success Flash -->
@if (session('success'))
<div class="bg-primary-container/20 text-on-primary-container px-6 py-4 rounded-xl font-medium mb-6 flex items-center gap-3 animate-fade-in-up">
    <span class="material-symbols-outlined">check_circle</span>
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="bg-error-container text-on-error-container px-6 py-4 rounded-xl font-medium mb-6 animate-fade-in-up">
    <ul class="list-disc list-inside text-sm space-y-1">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Editorial Header -->
<div class="mb-12 animate-fade-in-up">
    <h2 class="font-headline text-3xl lg:text-4xl font-extrabold text-on-surface tracking-tight mb-2">System Preferences</h2>
    <p class="text-on-surface-variant max-w-2xl font-body">Configure your clinical workspace. These settings define the visual identity and security protocols for the MS Repair Semarang branch.</p>
</div>

<!-- Bento Grid Layout -->
<div class="grid grid-cols-12 gap-8">

    <!-- Profile Settings Card -->
    <section class="col-span-12 lg:col-span-5 bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/10 shadow-sm animate-fade-in-up">
        <div class="flex items-center justify-between mb-8">
            <h3 class="font-headline text-xl font-bold text-on-surface">Profile Identity</h3>
            <span class="material-symbols-outlined text-primary">person</span>
        </div>
        <div class="flex flex-col items-center mb-8">
            <div class="relative group">
                <div class="w-28 h-28 rounded-2xl bg-primary-container/20 flex items-center justify-center shadow-lg mb-4 overflow-hidden">
                    <span class="material-symbols-outlined text-5xl text-primary/40" style="font-variation-settings: 'FILL' 1;">account_circle</span>
                </div>
            </div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Admin Identity</p>
        </div>
        <form action="/admin/settings/profile" method="POST" class="space-y-6">
            @csrf
            <div class="space-y-1.5">
                <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Administrator Name</label>
                <input name="name" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-sm font-medium text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" type="text" value="{{ Auth::user()->name }}" required />
            </div>
            <div class="space-y-1.5">
                <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Contact Email</label>
                <input name="email" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-sm font-medium text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" type="email" value="{{ Auth::user()->email }}" required />
            </div>
            <button type="submit" class="w-full py-3 bg-gradient-to-br from-primary to-primary-container text-white rounded-lg font-bold text-sm hover:opacity-90 active:scale-[0.98] transition-all shadow-sm mt-4">
                Update Profile
            </button>
        </form>
    </section>

    <!-- Store Configuration -->
    <section class="col-span-12 lg:col-span-7 bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/10 shadow-sm space-y-8 animate-fade-in-up animate-delay-100">
        <div class="flex items-center justify-between">
            <h3 class="font-headline text-xl font-bold text-on-surface">Store Artifacts</h3>
            <span class="material-symbols-outlined text-primary">storefront</span>
        </div>
        <form action="/admin/settings/store" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Shop Name</label>
                    <input name="shop_name" class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 text-sm font-semibold text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" type="text" value="{{ old('shop_name', $shopName) }}" required />
                </div>
                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">WhatsApp Terminal</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-primary font-bold text-xs">+62</span>
                        <input name="whatsapp" class="w-full bg-surface-container-high border-none rounded-lg pl-12 pr-4 py-3 text-sm font-semibold text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" type="text" value="{{ old('whatsapp', $whatsapp) }}" required />
                    </div>
                </div>
                <div class="col-span-full space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Operational Tagline</label>
                    <input name="tagline" class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 text-sm font-medium italic text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" type="text" value="{{ old('tagline', $tagline) }}" />
                </div>
                <div class="col-span-full space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Physical Coordinates</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/30">location_on</span>
                        <textarea name="address" class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 text-sm font-medium text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all resize-none" rows="2">{{ old('address', $address) }}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full py-3 bg-gradient-to-br from-primary to-primary-container text-white rounded-lg font-bold text-sm hover:opacity-90 active:scale-[0.98] transition-all shadow-sm">
                Save Store Settings
            </button>
        </form>
    </section>

    <!-- Interface Style -->
    <section class="col-span-12 lg:col-span-4 bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/10 shadow-sm animate-fade-in-up animate-delay-200">
        <h3 class="font-headline text-xl font-bold text-on-surface mb-6">Interface Style</h3>
        <div class="space-y-4" id="theme-toggles">
            <!-- Dark Mode Option -->
            <button type="button" id="btn-dark" onclick="setTheme('dark')" class="w-full flex items-center justify-between p-4 rounded-xl transition-all duration-300 cursor-pointer hover:scale-[1.01]">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center shadow-sm" id="icon-dark-wrap">
                        <span class="material-symbols-outlined">dark_mode</span>
                    </div>
                    <div class="text-left">
                        <p class="text-sm font-bold" id="label-dark">Night Vision</p>
                        <p class="text-[10px]" id="sublabel-dark">Enable Dark Mode UI</p>
                    </div>
                </div>
                <div id="check-dark" class="w-5 h-5 rounded-full flex items-center justify-center hidden">
                    <span class="material-symbols-outlined text-white text-[14px]" style="font-variation-settings: 'FILL' 1;">check</span>
                </div>
                <div id="toggle-dark" class="w-12 h-6 bg-surface-container-highest rounded-full relative p-1 transition-colors">
                    <div class="w-4 h-4 bg-white rounded-full shadow-md"></div>
                </div>
            </button>

            <!-- Light Mode Option -->
            <button type="button" id="btn-light" onclick="setTheme('light')" class="w-full flex items-center justify-between p-4 rounded-xl transition-all duration-300 cursor-pointer hover:scale-[1.01]">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center shadow-sm" id="icon-light-wrap">
                        <span class="material-symbols-outlined">light_mode</span>
                    </div>
                    <div class="text-left">
                        <p class="text-sm font-bold" id="label-light">Daylight Precision</p>
                        <p class="text-[10px]" id="sublabel-light">Active: Light Mode</p>
                    </div>
                </div>
                <div id="check-light" class="w-5 h-5 rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-[14px]" style="font-variation-settings: 'FILL' 1;">check</span>
                </div>
                <div id="toggle-light" class="hidden w-12 h-6 bg-surface-container-highest rounded-full relative p-1 transition-colors">
                    <div class="w-4 h-4 bg-white rounded-full shadow-md"></div>
                </div>
            </button>
        </div>

        <!-- Theme Transition Feedback -->
        <div id="theme-feedback" class="mt-4 p-3 rounded-lg text-center text-xs font-bold uppercase tracking-widest opacity-0 transition-opacity duration-500"></div>
    </section>

    <script>
        function setTheme(mode) {
            const html = document.documentElement;
            const feedback = document.getElementById('theme-feedback');
            
            if (mode === 'dark') {
                html.classList.remove('light');
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                html.classList.remove('dark');
                html.classList.add('light');
                localStorage.setItem('theme', 'light');
            }
            updateThemeUI(mode);

            // Show feedback
            feedback.textContent = mode === 'dark' ? '🌙 Dark Mode Activated' : '☀️ Light Mode Activated';
            feedback.classList.remove('opacity-0');
            feedback.classList.add('opacity-100', mode === 'dark' ? 'bg-gray-800' : 'bg-primary-container/20', mode === 'dark' ? 'text-white' : 'text-primary');
            setTimeout(() => {
                feedback.classList.add('opacity-0');
                feedback.classList.remove('opacity-100', 'bg-gray-800', 'bg-primary-container/20', 'text-white', 'text-primary');
            }, 2000);
        }

        function updateThemeUI(mode) {
            const btnDark = document.getElementById('btn-dark');
            const btnLight = document.getElementById('btn-light');
            const checkDark = document.getElementById('check-dark');
            const checkLight = document.getElementById('check-light');
            const toggleDark = document.getElementById('toggle-dark');
            const toggleLight = document.getElementById('toggle-light');
            const iconDarkWrap = document.getElementById('icon-dark-wrap');
            const iconLightWrap = document.getElementById('icon-light-wrap');
            const sublabelDark = document.getElementById('sublabel-dark');
            const sublabelLight = document.getElementById('sublabel-light');

            if (mode === 'dark') {
                // Dark active
                btnDark.className = 'w-full flex items-center justify-between p-4 bg-gray-800 rounded-xl border border-gray-600 transition-all duration-300 cursor-pointer hover:scale-[1.01]';
                iconDarkWrap.className = 'w-10 h-10 rounded-lg flex items-center justify-center shadow-sm bg-gray-700 text-primary-container';
                document.getElementById('label-dark').className = 'text-sm font-bold text-white';
                sublabelDark.className = 'text-[10px] text-primary-container/70';
                sublabelDark.textContent = 'Active: Dark Mode';
                checkDark.className = 'w-5 h-5 bg-primary rounded-full flex items-center justify-center';
                toggleDark.className = 'hidden';

                // Light inactive
                btnLight.className = 'w-full flex items-center justify-between p-4 bg-surface-container-low rounded-xl transition-all duration-300 cursor-pointer hover:scale-[1.01]';
                iconLightWrap.className = 'w-10 h-10 rounded-lg flex items-center justify-center shadow-sm bg-surface-container-lowest text-primary';
                document.getElementById('label-light').className = 'text-sm font-bold text-on-surface';
                sublabelLight.className = 'text-[10px] text-on-surface-variant';
                sublabelLight.textContent = 'Enable Light Mode';
                checkLight.className = 'w-5 h-5 rounded-full flex items-center justify-center hidden';
                toggleLight.className = 'w-12 h-6 bg-surface-container-highest rounded-full relative p-1 transition-colors';
            } else {
                // Light active
                btnLight.className = 'w-full flex items-center justify-between p-4 bg-primary-container/15 rounded-xl border border-primary/10 transition-all duration-300 cursor-pointer hover:scale-[1.01]';
                iconLightWrap.className = 'w-10 h-10 rounded-lg flex items-center justify-center shadow-sm bg-primary text-white';
                document.getElementById('label-light').className = 'text-sm font-bold text-on-primary-container';
                sublabelLight.className = 'text-[10px] text-primary/60';
                sublabelLight.textContent = 'Active: Light Mode';
                checkLight.className = 'w-5 h-5 bg-primary rounded-full flex items-center justify-center';
                toggleLight.className = 'hidden';

                // Dark inactive
                btnDark.className = 'w-full flex items-center justify-between p-4 bg-surface-container-low rounded-xl transition-all duration-300 cursor-pointer hover:scale-[1.01]';
                iconDarkWrap.className = 'w-10 h-10 rounded-lg flex items-center justify-center shadow-sm bg-surface-container-lowest text-primary';
                document.getElementById('label-dark').className = 'text-sm font-bold text-on-surface';
                sublabelDark.className = 'text-[10px] text-on-surface-variant';
                sublabelDark.textContent = 'Enable Dark Mode';
                checkDark.className = 'w-5 h-5 rounded-full flex items-center justify-center hidden';
                toggleDark.className = 'w-12 h-6 bg-surface-container-highest rounded-full relative p-1 transition-colors';
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            const saved = localStorage.getItem('theme') || 'light';
            updateThemeUI(saved);
        });
    </script>

    <!-- Security Protocol Section -->
    <section class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/10 shadow-sm animate-fade-in-up animate-delay-200">
        <div class="flex items-center gap-4 mb-8">
            <div class="p-3 bg-error-container rounded-lg text-error">
                <span class="material-symbols-outlined">lock_reset</span>
            </div>
            <div>
                <h3 class="font-headline text-xl font-bold text-on-surface">Security Protocols</h3>
                <p class="text-xs text-on-surface-variant font-medium">Update authentication credentials</p>
            </div>
        </div>
        <form action="/admin/settings/password" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Current Password</label>
                    <input name="current_password" class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 text-sm font-medium text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" placeholder="••••••••" type="password" required />
                </div>
                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">New Secure Code</label>
                    <input name="password" class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 text-sm font-medium text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" placeholder="••••••••" type="password" required />
                </div>
                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Verify Code</label>
                    <input name="password_confirmation" class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 text-sm font-medium text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" placeholder="••••••••" type="password" required />
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-outline-variant/15 flex flex-col sm:flex-row justify-end gap-4">
                <a href="/admin/dashboard" class="px-6 py-2.5 rounded-lg text-sm font-bold text-on-surface-variant hover:bg-surface-container-high transition-colors text-center">Discard Changes</a>
                <button type="submit" class="px-8 py-2.5 rounded-lg text-sm font-bold bg-primary text-white shadow-sm hover:opacity-90 active:scale-95 transition-all">Save Password</button>
            </div>
        </form>
    </section>

</div>

<!-- Branding Footer Anchor -->
<div class="mt-16 flex flex-col items-center opacity-20 select-none">
    <span class="material-symbols-outlined text-4xl text-on-surface-variant mb-2" style="font-variation-settings: 'FILL' 1;">precision_manufacturing</span>
    <p class="font-headline text-lg font-extrabold tracking-tighter text-on-surface-variant">MS REPAIR PRECISION</p>
    <p class="text-[10px] font-bold tracking-[0.3em] uppercase text-on-surface-variant">Semarang Division • v2.4.0</p>
</div>
@endsection
