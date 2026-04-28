import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#006A62',
                    container: '#40E0D0',
                    'fixed-dim': '#3ADCCC',
                },
                'on-primary': '#FFFFFF',
                'on-primary-container': '#00201D',
                tertiary: {
                    container: '#FFBE59',
                },
                'on-tertiary-container': '#3B2F00',
                surface: {
                    DEFAULT: '#F8FAF7',
                    'container-lowest': '#FFFFFF',
                    'container-low': '#F2F4F1',
                    'container': '#ECEEEB',
                    'container-high': '#E7E9E6',
                    'container-highest': '#E1E3E0',
                },
                'on-surface': '#191C1B',
                'on-surface-variant': '#3F4946',
                'outline-variant': '#BACAC6',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Manrope', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'display-lg': ['3.5rem', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '800' }],
                'display-md': ['2.75rem', { lineHeight: '1.15', letterSpacing: '-0.02em', fontWeight: '700' }],
                'display-sm': ['2rem', { lineHeight: '1.2', letterSpacing: '-0.01em', fontWeight: '700' }],
                'title-lg': ['1.375rem', { lineHeight: '1.4', fontWeight: '600' }],
                'title-md': ['1rem', { lineHeight: '1.5', fontWeight: '600' }],
                'label-sm': ['0.6875rem', { lineHeight: '1.5', letterSpacing: '0.06em', fontWeight: '500' }],
                'label-md': ['0.75rem', { lineHeight: '1.5', letterSpacing: '0.04em', fontWeight: '500' }],
            },
            borderRadius: {
                'sm': '4px',
                'md': '12px',
                'lg': '16px',
                'xl': '24px',
            },
            boxShadow: {
                'ambient': '0 20px 40px rgba(25, 28, 27, 0.06)',
                'ambient-sm': '0 8px 24px rgba(25, 28, 27, 0.04)',
            },
            spacing: {
                '18': '4.5rem',
                '22': '5.5rem',
            },
        },
    },
    plugins: [],
};
