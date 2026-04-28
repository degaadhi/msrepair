@extends('admin.layouts.guest')

@section('title', 'Sign In')

@section('content')
<!-- Header Suppression Rule applied: Shell is hidden for transactional/login screens per logic -->
<main class="flex-grow flex items-center justify-center w-full px-6 py-12">
    <div class="relative w-full max-w-md">
        <!-- Background Decorative Element (The Clinical Artisan asymmetry) -->
        <div class="absolute -top-12 -right-12 w-64 h-64 bg-primary-container/10 rounded-full blur-3xl -z-10 pointer-events-none"></div>
        <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-tertiary-container/10 rounded-full blur-3xl -z-10 pointer-events-none"></div>
        
        <!-- Login Card -->
        <div class="bg-surface-container-lowest rounded-xl p-8 md:p-10 shadow-[0_20px_40px_rgba(25,28,27,0.06)] ring-1 ring-outline-variant/15 animate-fade-in-up">
            
            <!-- Logo & Branding -->
            <div class="flex flex-col items-center mb-10">
                <div class="w-14 h-14 bg-surface-container-high rounded-lg flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">precision_manufacturing</span>
                </div>
                <h1 class="font-display text-2xl font-extrabold tracking-tighter text-primary">MS Repair</h1>
                <p class="font-bold text-[10px] uppercase tracking-[0.2em] text-on-surface-variant/60 mt-1">Precision Tech Editorial</p>
            </div>
            
            <!-- Form Section -->
            <form action="/admin/login" method="POST" class="space-y-6">
                @csrf

                @if ($errors->any())
                <div class="bg-error-container text-on-error-container px-4 py-3 rounded-lg text-sm font-medium">
                    {{ $errors->first() }}
                </div>
                @endif

                <!-- Email -->
                <div class="space-y-2">
                    <label class="font-bold text-[10px] uppercase tracking-wider text-on-surface-variant" for="email">Email</label>
                    <div class="relative group">
                        <input class="w-full h-12 bg-surface-container-high border-none rounded-lg px-4 text-sm text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" id="email" name="email" placeholder="admin@msrepair.com" type="email" value="{{ old('email') }}" required />
                    </div>
                </div>
                
                <!-- Password -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="font-bold text-[10px] uppercase tracking-wider text-on-surface-variant" for="password">Password</label>
                    </div>
                    <div class="relative group">
                        <input class="w-full h-12 bg-surface-container-high border-none rounded-lg px-4 pr-12 text-sm text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" id="password" name="password" placeholder="••••••••" type="password" required />
                        <span id="togglePassword" class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors cursor-pointer material-symbols-outlined text-[20px]">visibility</span>
                    </div>
                </div>
                
                <!-- Remember Me -->
                <div class="flex items-center space-x-3">
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 rounded border-outline-variant/30 text-primary focus:ring-primary focus:ring-offset-0 transition-all cursor-pointer bg-surface-container-high" id="remember" name="remember" type="checkbox"/>
                    </div>
                    <label class="text-sm font-medium text-on-surface-variant select-none cursor-pointer" for="remember">Remember Me</label>
                </div>
                
                <!-- Sign In Button -->
                <button class="w-full h-14 liquid-gradient text-white font-display font-bold rounded-lg shadow-lg hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center space-x-2 border border-primary/20" type="submit">
                    <span>Sign In</span>
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </button>
            </form>
            
            <!-- Help Link -->
            <div class="mt-8 pt-8 border-t border-outline-variant/10 text-center">
                <p class="text-[12px] text-on-surface-variant/70">
                    Need authorization? <a class="text-primary font-semibold hover:underline" href="#">Contact System Admin</a>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = this;
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            icon.textContent = 'visibility';
        }
    });
</script>

<!-- Footer Component -->
<footer class="flex flex-col md:flex-row justify-between items-center px-6 lg:px-12 py-8 w-full max-w-7xl mx-auto border-t border-outline-variant/10">
    <p class="font-bold text-[10px] uppercase tracking-widest text-on-surface-variant/60 mb-4 md:mb-0">
        © 2024 Precision Tech Editorial. All rights reserved.
    </p>
    <div class="flex gap-6 lg:gap-8">
        <a class="font-bold text-[10px] uppercase tracking-widest text-on-surface-variant/60 hover:text-primary transition-colors underline-offset-4 hover:underline" href="#">System Status</a>
        <a class="font-bold text-[10px] uppercase tracking-widest text-on-surface-variant/60 hover:text-primary transition-colors underline-offset-4 hover:underline" href="#">Security Policy</a>
        <a class="font-bold text-[10px] uppercase tracking-widest text-on-surface-variant/60 hover:text-primary transition-colors underline-offset-4 hover:underline" href="#">Support</a>
    </div>
</footer>
@endsection
