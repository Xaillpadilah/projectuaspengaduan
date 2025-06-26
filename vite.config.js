import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
              'resources/css/home1.css',
              'resources/css/home2.css',
              'resources/css/home3.css',
               'resources/css/pengaduan1.css',
               'resources/css/pengaduan2.css',
            'resources/js/app.js',
        ]),
    ],
});
