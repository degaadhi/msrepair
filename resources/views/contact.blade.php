@extends('layouts.app')

@section('title', 'Contact | MS Repair - Precision iPhone Engineering')

@section('content')
<main class="pt-28 pb-10">
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 mb-16 section-padding !pt-10 !pb-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-end">
            <div class="animate-fade-in-up">
                <span class="micro-label mb-4 block text-primary font-bold">GET IN TOUCH</span>
                <h1 class="text-4xl sm:text-5xl lg:text-display-lg lg:text-[4.5rem] font-display font-extrabold text-on-surface leading-[1.05] tracking-tighter">
                    Precision Care for Your <span class="bg-primary/10 text-primary px-3 rounded-md">iPhone.</span>
                </h1>
            </div>
            <div class="pb-4 animate-fade-in-up animate-delay-100">
                <p class="text-xl text-on-surface-variant leading-relaxed max-w-md">
                    Our workshop in Semarang provides editorial-grade technical support for the most demanding repairs. Reach out via WhatsApp for an immediate quote.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Bento Grid -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-12 gap-6 mb-20 section-padding !py-0">
        <!-- Contact Info Cards -->
        <div class="md:col-span-4 space-y-6">
            <!-- WhatsApp Primary CTA -->
            <a class="block p-8 bg-[#25D366] text-white rounded-xl group transition-all duration-300 hover:shadow-ambient hover:-translate-y-1 animate-fade-in-up animate-delay-200" href="https://wa.me/{{ preg_replace('/^0/', '62', \App\Models\Setting::get('whatsapp', '085728160180')) }}" target="_blank">
                <div class="flex justify-between items-start mb-12">
                    <div class="bg-white/20 p-3 rounded-lg">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </div>
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </div>
                <div>
                    <span class="text-sm font-medium opacity-90 block mb-1">Direct Assistance</span>
                    <h3 class="text-2xl font-display font-bold">WhatsApp Support</h3>
                    <p class="mt-2 text-white/80">{{ \App\Models\Setting::get('whatsapp', '085728160180') }}</p>
                </div>
            </a>

            <!-- Business Hours Card -->
            <div class="p-8 bg-surface-container-lowest rounded-xl ambient-shadow animate-fade-in-up animate-delay-300">
                <div class="flex items-center gap-3 mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h4 class="font-display font-bold text-lg text-on-surface">Workshop Hours</h4>
                </div>
                <div class="space-y-4">
                    <div class="flex justify-between items-center border-b border-outline-variant/30 pb-3">
                        <span class="text-on-surface-variant text-sm font-medium">Senin - Sabtu</span>
                        <span class="font-semibold text-primary text-sm">09:00 - 20:00</span>
                    </div>
                    <div class="flex justify-between items-center text-on-surface-variant/50">
                        <span class="text-sm font-medium">Minggu</span>
                        <span class="text-sm font-medium">Tutup</span>
                    </div>
                </div>
            </div>

            <!-- Technical Details -->
            <div class="p-8 bg-surface-container-low rounded-xl animate-fade-in-up animate-delay-400 ambient-shadow">
                <div class="space-y-6">
                    <div>
                        <span class="micro-label block mb-2 font-bold text-[10px]">TECHNICAL SUPPORT</span>
                        <p class="text-on-surface font-semibold text-sm">support@msrepair.com</p>
                    </div>
                    <div>
                        <span class="micro-label block mb-2 font-bold text-[10px]">EMERGENCY HOTLINE</span>
                        <p class="text-on-surface font-semibold text-sm">{{ \App\Models\Setting::get('whatsapp', '085728160180') }}</p>
                    </div>
                </div>
            </div>

            <!-- TikTok Social Card -->
            <a class="p-8 bg-surface-container-lowest rounded-xl ambient-shadow animate-fade-in-up animate-delay-500 hover:-translate-y-1 transition-transform group block relative overflow-hidden" href="https://www.tiktok.com/@msrepair.smg?_r=1&_t=ZS-94Ka7o1EFmC" target="_blank">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full blur-2xl group-hover:bg-primary/10 transition-colors"></div>
                <div class="flex items-center gap-5 relative z-10">
                    <div class="w-12 h-12 bg-on-surface text-surface rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 15.68a6.34 6.34 0 006.35 6.32 6.32 6.32 0 006.11-4.71 6.36 6.36 0 00.23-1.71V8.14a8.01 8.01 0 004.9 1.58V6.3a4.7 4.7 0 01-2.99-.96l-.01 1.35z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="micro-label block mb-1 text-primary">SOCIAL MEDIA</span>
                        <h4 class="font-display font-bold text-lg text-on-surface group-hover:text-primary transition-colors leading-tight">Ikuti TikTok Kami</h4>
                        <p class="text-sm text-on-surface-variant font-medium mt-0.5">@msrepair.smg</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Map & Address Container -->
        <div class="md:col-span-8 space-y-6 animate-fade-in-up animate-delay-200">
            <div class="bg-surface-container-lowest rounded-xl overflow-hidden ambient-shadow flex flex-col h-full">
                <div class="p-8 border-b border-outline-variant/30">
                    <div class="flex flex-col sm:flex-row justify-between items-start gap-4">
                        <div>
                            <h4 class="font-display font-bold text-2xl mb-2 text-on-surface">Our Headquarters</h4>
                            <p class="text-on-surface-variant text-sm max-w-sm leading-relaxed">
                                {{ \App\Models\Setting::get('address', 'VC3F+V48 Gedanganak, Semarang Regency, Central Java') }}
                            </p>
                        </div>
                        <a href="https://maps.app.goo.gl/xxx" target="_blank" class="flex items-center gap-2 text-primary font-semibold hover:underline text-sm mt-1">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                            Get Directions
                        </a>
                    </div>
                </div>
                <div class="flex-grow min-h-[400px] lg:min-h-0 relative">
                    <iframe allowfullscreen="" class="absolute inset-0 w-full h-full grayscale-[0.2] contrast-[1.1]" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.083756243884!2d110.4223213147741!3d-7.11624899486111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDYnNTguNSJTIDExMMKwMjUnMjguMiJF!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid" style="border:0;">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter / Quick Message Section -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 mb-10">
        <div class="bg-gradient-primary-subtle rounded-2xl p-10 md:p-12 relative overflow-hidden ambient-shadow">
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-display font-extrabold mb-4 tracking-tight text-white">Need a customized quote?</h2>
                    <p class="text-white/80 text-sm md:text-base leading-relaxed">Provide your iPhone model and specific issue, and our engineers will review it within 1 business hour.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input class="flex-grow bg-surface-container-lowest border-none rounded-lg px-6 py-4 focus:outline-none focus:ring-2 focus:ring-primary-container text-sm text-on-surface" placeholder="Explain your device issue..." type="text"/>
                    <button class="bg-primary text-white border-2 border-primary px-8 py-4 rounded-lg font-display font-bold hover:bg-primary/90 transition-all flex-shrink-0 shadow-lg shadow-primary/30">
                        Send Request
                    </button>
                </div>
            </div>
            <!-- Abstract Design Element -->
            <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
        </div>
    </section>
</main>
@endsection
