<aside class="h-screen w-64 bg-surface-container-low flex flex-col py-6">
    <div class="px-6 mb-10">
        <h1 class="font-headline font-extrabold text-primary text-xl">MS Admin</h1>
        <p class="text-on-surface-variant text-xs font-medium">Precision Editorial</p>
    </div>
    
    <nav class="flex-1 space-y-1">
        <!-- Dashboard Tab -->
        <a class="mx-2 px-4 py-3 flex items-center gap-3 rounded-lg {{ isset($activeAdminPage) && $activeAdminPage === 'dashboard' ? 'bg-primary-container text-on-primary-container transition-transform duration-200 translate-x-1' : 'text-on-surface-variant hover:bg-surface-container-high transition-colors' }}" href="/admin/dashboard">
            <span class="material-symbols-outlined" data-icon="dashboard" {!! isset($activeAdminPage) && $activeAdminPage === 'dashboard' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>dashboard</span>
            <span class="font-body text-sm font-medium">Dashboard</span>
        </a>
        
        <!-- Price Lists Tab -->
        <a class="mx-2 px-4 py-3 flex items-center gap-3 rounded-lg {{ isset($activeAdminPage) && $activeAdminPage === 'pricelist' ? 'bg-primary-container text-on-primary-container transition-transform duration-200 translate-x-1' : 'text-on-surface-variant hover:bg-surface-container-high transition-colors' }}" href="/admin/pricelist">
            <span class="material-symbols-outlined" data-icon="payments" {!! isset($activeAdminPage) && $activeAdminPage === 'pricelist' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>sell</span>
            <span class="font-body text-sm font-medium">Price Lists</span>
        </a>
        
        <!-- Portfolios Tab -->
        <a class="mx-2 px-4 py-3 flex items-center gap-3 rounded-lg {{ isset($activeAdminPage) && $activeAdminPage === 'portfolio' ? 'bg-primary-container text-on-primary-container transition-transform duration-200 translate-x-1' : 'text-on-surface-variant hover:bg-surface-container-high transition-colors' }}" href="/admin/portfolio">
            <span class="material-symbols-outlined" data-icon="collections" {!! isset($activeAdminPage) && $activeAdminPage === 'portfolio' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>photo_library</span>
            <span class="font-body text-sm font-medium">Portfolios</span>
        </a>
    </nav>
    
    <div class="mt-auto pt-6 border-t border-outline-variant/10">
        <a class="mx-2 px-4 py-3 flex items-center gap-3 rounded-lg {{ isset($activeAdminPage) && $activeAdminPage === 'settings' ? 'bg-primary-container text-on-primary-container transition-transform duration-200 translate-x-1' : 'text-on-surface-variant hover:bg-surface-container-high transition-colors' }}" href="/admin/settings">
            <span class="material-symbols-outlined" data-icon="settings" {!! isset($activeAdminPage) && $activeAdminPage === 'settings' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>settings</span>
            <span class="font-body text-sm font-medium">Settings</span>
        </a>
        <a href="/admin/logout" class="w-full px-4 py-3 flex items-center gap-3 text-error font-medium rounded-lg hover:bg-error/5 transition-colors">
            <span class="material-symbols-outlined" data-icon="logout">logout</span>
            <span class="font-body text-sm font-medium">Logout</span>
        </a>
    </div>
</aside>
