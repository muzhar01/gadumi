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
                'resources/css/listing/custom.css',
                'resources/css/listing/bootstrap.js',
                'resources/css/listing/bootstrap.css'
            ],
            refresh: true,
        }),
        react()
    ],
});
