import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Inter', {
                    weights: [400, 500, 600, 700, 800],
                }),
                bunny('Inter-Tight', {
                    weights: [300, 400, 500, 600],
                }),
                bunny('Playfair-Display', {
                    weights: [400, 500, 600],
                    italic: true,
                }),
                bunny('JetBrains Mono', {
                    weights: [400],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
