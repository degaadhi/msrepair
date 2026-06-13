<header class="sticky top-0 z-40 w-full bg-surface flex justify-between items-center px-4 md:px-8 py-3 border-b border-outline-variant/15 flex-shrink-0 shadow-sm">
    <div class="flex items-center gap-3">
        <!-- Sidebar Toggle Button (Mobile Only) -->
        <button id="sidebar-toggle" class="lg:hidden text-on-surface hover:text-primary focus:outline-none flex items-center justify-center p-1.5 rounded-md hover:bg-surface-container-high transition-colors" title="Open Sidebar">
            <span class="material-symbols-outlined text-[24px]">menu</span>
        </button>
        <h2 class="text-lg text-on-surface font-headline font-bold">@yield('topbar_title', 'Dashboard Overview')</h2>
    </div>
    
    <div class="flex items-center gap-6">
        <!-- Search Bar -->
        <div class="relative hidden lg:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
            <input class="bg-surface-container-high border-none rounded-md pl-10 pr-4 py-1.5 text-sm focus:ring-2 focus:ring-primary/20 w-64 placeholder:text-on-surface-variant/70 text-on-surface" placeholder="Search data..." type="text"/>
        </div>
        
        <!-- User Context Area -->
        <div class="flex items-center gap-3">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-semibold text-on-surface leading-none">{{ Auth::user()->name ?? 'Admin' }}</p>
                <p class="text-xs text-on-surface-variant">{{ Auth::user()->email ?? '' }}</p>
            </div>
            <img alt="Current User Profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary-container" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAthSsoH6LH8AYV6eQmIFJwZ3P0SMilhjF3NMCQRIBSwVnjJCf2Vrm3qT0B8KbG7qVtHo6DuaNNvHBFOohfeZ5VICEwzdiJsgG2OeuiJ5z1CRYaq5qF97kIjmPNf2OoLOKl1E-sip9xdhAShVhtohk-Hrc_vvFot_xGW7gQ6Gibh8lRMvS_WTXua1s_78q6q4fuQMEVpmgjWo8NEYj4SwxSMn1gYaVR-jHjr1WWtbAL10Xf04SqzVUg8bvUcRgVZ8fLkIDldzpMgbz2"/>
        </div>
    </div>
</header>
