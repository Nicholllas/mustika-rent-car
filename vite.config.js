import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/front.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
    server: {
        strictPort: true,
        hmr: {
            host: process.env.APP_URL ? new URL(process.env.APP_URL).hostname : "localhost",
        },
    },
    build: {
        outDir: "public/build",
        manifest: true, // Agar Laravel bisa menemukan file yang dibuild
    },
});
