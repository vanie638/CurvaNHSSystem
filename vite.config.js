import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/css/style.css', 'resources/css/bootstrap.min.css'],
            refresh: true,
        }),
    ],
});
