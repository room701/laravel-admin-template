let mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Javascropt
|--------------------------------------------------------------------------
*/

// --------------------
// Vendor JS
// --------------------
// mix.combine(
//     [
//         'node_modules/kutty/dist/kutty.min.js'
//     ],
//     'assets/js/dist/vendor.js'
// );

// --------------------
// APP JS
// --------------------
mix.js('assets/js/src/app.js', 'assets/js/dist').sourceMaps();


/*
|--------------------------------------------------------------------------
| CSS
|--------------------------------------------------------------------------
*/

// --------------------
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
        .tailwind();
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
        });
}

// --------------------
// Vendor CSS
// --------------------
// mix.combine(
//     [
//         'node_modules/material-design-icons/iconfont/material-icons.css'
//     ],
//     'assets/css/dist/vendor.css'
// );
