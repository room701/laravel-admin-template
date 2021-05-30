let mix = require('laravel-mix');

mix.setPublicPath('./assets'); // for mix-manifest.json publish

/*
|--------------------------------------------------------------------------
| BrowserSync
|--------------------------------------------------------------------------
*/
mix.browserSync({
    proxy: 'laravel-admin-templete',
    files: [
        'assets/**/dist',
        'src',
        'views'
    ],
    cors: true,
    open: true
});

/*
|--------------------------------------------------------------------------
| Javascropt
|--------------------------------------------------------------------------
*/
// Vendor JS
// --------------------
// mix.combine(
//     [
//         'node_modules/vue/dist/vue.js',
//         'node_modules/vue2-datepicker/index.min.js',
//     ],
//     'assets/js/dist/vendor.js'
// ).version();

let jsVendorDir = './assets/js/vendor';
mix.copy('node_modules/vue/dist', `${jsVendorDir}/vue`);
mix.copy('node_modules/jquery/dist', `${jsVendorDir}/jquery`);
mix.copy('node_modules/vue-ctk-date-time-picker/dist', `${jsVendorDir}/vue-ctk-date-time-picker`);

// APP JS
// --------------------
mix.js('assets/js/src/app.js', 'assets/js/dist')
   .sourceMaps()
   .version();

/*
|--------------------------------------------------------------------------
| CSS
|--------------------------------------------------------------------------
*/
// tailwind css
// --------------------
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

if (mix.inProduction()) {
    processProductionCSS();
} else {
    processDevCSS();
}

function processDevCSS() {
    // 未 purge
    mix.postCss('assets/css/src/app.css', 'assets/css/dist')
        .options({
            processCssUrls: false,
        })
        .tailwind()
        .version();
}

function processProductionCSS() {
    // purge
    mix.postCss('assets/css/src/app.css', 'assets/css/dist/app.min.css')
        .options({
            processCssUrls: false,
        })
        .tailwind()
        .purgeCss({
            enabled: true,
            extend: {
                content: [
                    '**/*.html',
                    '**/*.blade.php'
                ]
            }
        })
        .version();
}

// Vendor CSS
// --------------------
// let cssVendorDir = './assets/css/vendor';
// let cssVendorFile = `${cssVendorDir}/vendor.css`;
// mix.combine(
//     [
//         'node_modules/air-datepicker/dist/css/datepicker.min.css'
//     ],
//     cssVendorFile
// ).version();
