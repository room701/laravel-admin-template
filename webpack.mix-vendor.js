let mix = require('laravel-mix');

mix.setPublicPath('./assets'); // for mix-manifest.json publish

// Copy vendor JS
// --------------------
let jsVendorDir = './assets/js/vendor';
mix.copy('node_modules/jquery/dist', `${jsVendorDir}/jquery`);
mix.copy('node_modules/htmx.org/dist', `${jsVendorDir}/htmx`);
mix.copy('node_modules/vue/dist', `${jsVendorDir}/vue`);
mix.copy('node_modules/vue-ctk-date-time-picker/dist', `${jsVendorDir}/vue-ctk-date-time-picker`);

// Combine vendor JS (暫無使用)
// --------------------
// mix.combine(
//     [
//         'node_modules/vue/dist/vue.js',
//         'node_modules/vue2-datepicker/index.min.js',
//     ],
//     `${jsVendorDir}/vendor.js`
// ).version();

// Copy vendor CSS
// --------------------
let cssVendorDir = './assets/css/vendor';

mix.copy('node_modules/eva-icons/style', `${cssVendorDir}/eva-icons`);

// Combine vendor CSS (暫無使用)
// --------------------
// mix.combine(
//     [
//         'node_modules/air-datepicker/dist/css/datepicker.min.css'
//     ],
//     `${cssVendorDir}/vendor.css`
// ).version();
