const mix = require('laravel-mix');

require('laravel-mix-versionhash');
require('laravel-mix-tailwind');

mix.setPublicPath('./build');

mix.tailwind();

mix.js('assets/app.js',           '');
mix.js('assets/blocks-banner.js', '');

mix.less('assets/app.less',           '');
mix.less('assets/blocks-banner.less', '');

if (mix.inProduction()) {
  mix.versionHash();
  mix.sourceMaps();
}