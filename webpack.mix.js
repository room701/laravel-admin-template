let mix = require('laravel-mix');

//
// tailwind css
//
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

if (mix.inProduction()) {
    processProductionCSS();
} else {
    processDevCSS();
}

function processDevCSS() {
    mix.postCss('assets/css/src/app.css', 'assets/css/dist').tailwind(); // 未 purge
}

function processProductionCSS() {
    mix.postCss('assets/css/src/app.css', 'assets/css/dist/app.min.css').tailwind().purgeCss({ // purge
        enabled: true,
        extend: {
            content: [
                '**/*.html',
                '**/*.blade.php'
            ]
        }
    });
}

//
// Vendor CSS
//
// mix.combine(
//     [
//         'node_modules/material-design-icons/iconfont/material-icons.css'
//     ],
//     'assets/css/dist/vendor.css'
// );


//
// Vendor JS
//
// mix.js('assets/js/src/app.js', 'assets/js/dist');

mix.combine(
    [
        'node_modules/kutty/dist/kutty.min.js'
    ],
    'assets/js/dist/vendor.js'
);
