import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { promises as fs } from 'node:fs';
import path from 'node:path';

function copyResourcesCssJsToPublic() {
    const srcDir = path.resolve(__dirname, 'resources');
    const destDir = path.resolve(__dirname, 'public');
    const exts = new Set(['.css', '.js', '.woff', '.woff2', '.ttf', '.eot', '.otf', '.svg', '.jpg']);

    const walk = async (dir) => {
        const entries = await fs.readdir(dir, { withFileTypes: true });
        for (const entry of entries) {
            const srcPath = path.join(dir, entry.name);
            if (entry.isDirectory()) {
                await walk(srcPath);
                continue;
            }
            if (!exts.has(path.extname(entry.name))) continue;

            const relPath = path.relative(srcDir, srcPath);
            const destPath = path.join(destDir, relPath);
            await fs.mkdir(path.dirname(destPath), { recursive: true });
            await fs.copyFile(srcPath, destPath);
        }
    };

    return {
        name: 'copy-resources-assets',
        apply: 'build',
        closeBundle: async () => {
            await walk(srcDir);
        }
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        copyResourcesCssJsToPublic(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
