import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/js/base.js', 
                'resources/js/main.js', 
                'resources/js/board.js',
                'resources/js/add-project.js',
                'resources/css/alert.css',
                'resources/css/main.css',
            ],
            refresh: true,
        }),
    ],
});
