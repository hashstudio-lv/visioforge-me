import fs from 'fs';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
import { homedir } from 'os';
import { resolve } from 'path';

let host = 'assistantedit.test';

export default defineConfig({
    server: detectServerConfig(host),
    plugins: [
        laravel({
            input: [
                'resources/themes/theme-2/css/app.css',
                'resources/themes/theme-2/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            less: {
                javascriptEnabled: true,
            },
        },
    },
});

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`);
    let certificatePath = resolve(homedir(), `.config/valet/Certificates/${host}.crt`);

    if (!fs.existsSync(keyPath) || !fs.existsSync(certificatePath)) {
        return {};
    }

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}
