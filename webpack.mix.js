let mix = require("laravel-mix")
require("laravel-mix-webp")
require("laravel-mix-brotli");

// TODO: add brotli in production add CSS with minify from src to style.css
mix.js(`src/scripts/app.js`, "dist/")
    .options({
        processCssUrls: false,
        autoprefixer: false,
        postCss: false
    })
    .ImageWebp({
        from: 'src/images',
        to: 'dist/images'
	})
    .setPublicPath('dist');
    