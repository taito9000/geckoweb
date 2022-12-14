import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [ 'resources/scss/app.scss', 'resources/js/app.js','resources/scss/topPageMenu.scss','resources/scss/pageTitle.scss'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: 'localhost'
        }
    }
})