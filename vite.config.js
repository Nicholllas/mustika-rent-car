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
    build: {
        manifest: true, // Tambahkan ini untuk produksi
        outDir: "public/build",
        rollupOptions: {
            input: {
                app: "resources/js/app.js",
                front: "resources/css/front.css",
            },
        },
    },
});
