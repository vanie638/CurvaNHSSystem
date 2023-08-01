import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    css: {
        preprocessorOptions: {
          scss: {
            additionalData: `@import "resources/css/style.css";`,
            additionalData: `@import "resources/css/bootstrap.min.css";`,
        },
      },
});
