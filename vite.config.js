import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/style.css',
                'resources/css/variable.css',
                'resources/remixicon/remixicon.css',
                'resources/swiper/swiper-bundle.min.css',
                'resources/swiper/swiper-bundle.min.js'
            ],
            refresh: true,
        }),
    ],
});
