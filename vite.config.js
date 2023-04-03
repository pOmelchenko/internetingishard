import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/advanced-positioning.css',
                'resources/css/app.css',
                'resources/css/box-styles.css',
                'resources/css/css-selectors.css',
                'resources/css/flexbox.css',
                'resources/css/floats.css',
                'resources/css/menu.css',
                'resources/css/responsive-design.css',
                'resources/css/styles.css',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
