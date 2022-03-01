const mix = require('laravel-mix');
let productionSourceMaps = false;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    ]).sourceMaps(productionSourceMaps, 'source-map');

mix.sass('resources/sass/app.scss', 'public/css');
mix.copy('lang/datatables_pt_br.json', 'public/');

mix.autoload({
    jquery: ['$', 'window.jQuery']
});
mix.options({
    // Don't perform any css url rewriting by default
    processCssUrls: true,
})

//js for all app
mix.js('resources/js/script', 'public/js');
