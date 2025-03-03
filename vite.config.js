import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/front.css",
                "resources/js/app.js",
            ],
            refresh: [...refreshPaths, "app/Livewire/**"],
        }),
    ],
    server: {
        host: "0.0.0.0",
        hmr: {
            host: process.env.VITE_APP_URL?.replace("https://", ""),
        },
    },
});
