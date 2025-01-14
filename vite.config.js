import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                'resources/css/app.scss',
                'resources/core/rtl/core.css',
                'resources/core/rtl/theme-default.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true,
            },
        },
    },
    resolve: {
        alias: {
            '@': '/resources/js',
            '$': 'jQuery',
            'bootstrap': 'bootstrap',
        },
    },


});
