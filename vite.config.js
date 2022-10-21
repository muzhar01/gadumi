import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/login-page/css/bootstrap.css',
                'resources/css/login-page/css/stylee.css',
                'resources/css/login-page/js/jquery-3.js',
                'resources/css/login-page/js/main.js',
                'resources/css/login-page/js/imagesloaded.js',
                'resources/css/login-page/js/validator.js',
            ],
            refresh: true,
        }),
        react()
    ],
});
