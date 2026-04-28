<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ServiceMSrepair Admin Dashboard')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL,GRAD,opsz@300,0,0,24&display=swap" rel="stylesheet" />

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Dark Mode Styles -->
    <style>
        /* ========================================
           DARK MODE — Admin Panel
           ======================================== */
        html.dark body {
            background-color: #0f1412 !important;
            color: #e1e3e0 !important;
        }

        /* Sidebar */
        html.dark aside {
            background-color: #161c1a !important;
            border-color: rgba(186, 202, 198, 0.08) !important;
        }
        html.dark aside h1 { color: #40e0d0 !important; }
        html.dark aside p { color: rgba(225, 227, 224, 0.5) !important; }
        html.dark aside nav a:not(.bg-primary-container) {
            color: #9ca8a5 !important;
        }
        html.dark aside nav a:not(.bg-primary-container):hover {
            background-color: rgba(64, 224, 208, 0.08) !important;
            color: #40e0d0 !important;
        }
        html.dark aside .mt-auto { border-color: rgba(186, 202, 198, 0.08) !important; }

        /* Topbar */
        html.dark header {
            background-color: rgba(15, 20, 18, 0.85) !important;
            border-color: rgba(186, 202, 198, 0.08) !important;
            backdrop-filter: blur(12px);
        }
        html.dark header h2 { color: #e1e3e0 !important; }
        html.dark header input {
            background-color: #1e2624 !important;
            color: #e1e3e0 !important;
        }
        html.dark header p { color: #9ca8a5 !important; }
        html.dark header .text-sm.font-semibold { color: #e1e3e0 !important; }

        /* Main Content Area */
        html.dark main {
            background-color: #0f1412 !important;
        }

        /* Cards & Sections */
        html.dark section,
        html.dark .bg-surface-container-lowest,
        html.dark .bg-surface-container-low\/50 {
            background-color: #1a201e !important;
            border-color: rgba(186, 202, 198, 0.08) !important;
        }
        html.dark .bg-surface-container-low {
            background-color: #151b19 !important;
        }

        /* Headings & Text */
        html.dark h1, html.dark h2, html.dark h3, html.dark h4 {
            color: #e1e3e0 !important;
        }
        html.dark p, html.dark span:not(.material-symbols-outlined):not([class*="text-white"]):not([class*="text-primary"]):not([class*="text-error"]) {
            color: #9ca8a5 !important;
        }
        html.dark label {
            color: #6b7a77 !important;
        }

        /* Form Inputs */
        html.dark input:not([type="checkbox"]):not([type="file"]),
        html.dark select,
        html.dark textarea {
            background-color: #232a28 !important;
            color: #e1e3e0 !important;
            border-color: rgba(186, 202, 198, 0.1) !important;
        }
        html.dark input::placeholder,
        html.dark textarea::placeholder {
            color: rgba(156, 168, 165, 0.4) !important;
        }
        html.dark input:focus,
        html.dark select:focus,
        html.dark textarea:focus {
            background-color: #1a201e !important;
            box-shadow: 0 0 0 2px rgba(0, 106, 98, 0.3) !important;
        }

        /* Tables */
        html.dark table thead tr {
            background-color: #1a201e !important;
        }
        html.dark table tbody tr {
            background-color: #151b19 !important;
        }
        html.dark table tbody tr:nth-child(even) {
            background-color: #1a201e !important;
        }
        html.dark table tbody tr:hover {
            background-color: rgba(64, 224, 208, 0.05) !important;
        }
        html.dark table th, html.dark table td {
            border-color: rgba(186, 202, 198, 0.06) !important;
            color: #9ca8a5 !important;
        }
        html.dark table td .font-semibold,
        html.dark table td .font-bold {
            color: #e1e3e0 !important;
        }

        /* Stat Cards / Bento */
        html.dark .grid > div[class*="bg-surface"] {
            background-color: #1a201e !important;
            border-color: rgba(186, 202, 198, 0.08) !important;
        }

        /* Portfolio Cards */
        html.dark .group.bg-surface-container-lowest {
            background-color: #1a201e !important;
        }
        html.dark .bg-surface-container-high {
            background-color: #232a28 !important;
        }

        /* Dropzone */
        html.dark .border-dashed {
            border-color: rgba(186, 202, 198, 0.15) !important;
            background-color: #151b19 !important;
        }

        /* Flash messages */
        html.dark .bg-primary-container\/20 {
            background-color: rgba(0, 106, 98, 0.15) !important;
        }

        /* Footer */
        html.dark footer {
            background-color: #0f1412 !important;
            border-color: rgba(186, 202, 198, 0.06) !important;
            color: #6b7a77 !important;
        }

        /* Scrollbar */
        html.dark ::-webkit-scrollbar { width: 8px; }
        html.dark ::-webkit-scrollbar-track { background: #0f1412; }
        html.dark ::-webkit-scrollbar-thumb { background: #2e3634; border-radius: 4px; }
        html.dark ::-webkit-scrollbar-thumb:hover { background: #3c4a47; }

        /* Dark mode smooth transition */
        body, main, aside, header, section, footer, input, select, textarea, div {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
    </style>

    <!-- Auto-load saved theme -->
    <script>
        (function() {
            var saved = localStorage.getItem('theme');
            if (saved === 'dark') {
                document.documentElement.classList.remove('light');
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
</head>
<body class="bg-background text-on-background flex h-screen overflow-hidden">

    {{-- Admin Sidebar Component --}}
    @include('admin.partials.sidebar')

    {{-- Main Content Area --}}
    <main class="flex-1 flex flex-col overflow-y-auto">
        
        {{-- Admin Topbar Component --}}
        @include('admin.partials.topbar')

        {{-- Canvas Content --}}
        <div class="p-6 lg:p-8 max-w-7xl mx-auto w-full space-y-8 flex-1">
            @yield('content')
        </div>
        
        {{-- Admin Footer Component --}}
        @include('admin.partials.footer')

    </main>

</body>
</html>
