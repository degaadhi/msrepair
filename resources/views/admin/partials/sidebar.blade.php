<aside id="admin-sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-surface-container-low flex flex-col py-6 transform -translate-x-full transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0 lg:z-auto border-r border-outline-variant/10">
    <div class="px-6 mb-10 flex justify-between items-center">
        <div>
            <h1 class="font-headline font-extrabold text-primary text-xl">MS Admin</h1>
            <p class="text-on-surface-variant text-xs font-medium">Precision Editorial</p>
        </div>
        <!-- Close Button (Mobile Only) -->
        <button id="sidebar-close" class="lg:hidden text-on-surface-variant hover:text-primary focus:outline-none flex items-center justify-center p-1.5 rounded-md hover:bg-surface-container-high transition-colors">
            <span class="material-symbols-outlined text-[24px]">close</span>
        </button>
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
