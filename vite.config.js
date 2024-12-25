import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: 'public/assets',
        rollupOptions: {
            input: {
                js: './src/Views/entrypoint.ts',
                css: './src/Views/entrypoint.scss',
                adminJs: './src/Views/entrypoint-admin.ts',
                adminCss: './src/Views/entrypoint-admin.scss',
            },
            output: {
                entryFileNames: 'js/entrypoint.js',
                assetFileNames: 'css/entrypoint.css',
            },
        },
    },
});
