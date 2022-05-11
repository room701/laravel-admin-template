// jQuery
import jquery from 'jquery';
window.$ = jquery;
window.jQuery = jquery;

// htmx
window.htmx = htmx;
import 'htmx.org';

// Vue
import { createApp } from 'vue/dist/vue.esm-bundler.js';
window.Vue = { createApp: createApp };

// Noty
import Noty from 'noty';
window.Noty = Noty;

// vanillajs-datepicker
import { Datepicker } from 'vanillajs-datepicker';
import zhTW from 'vanillajs-datepicker/locales/zh-TW';
Object.assign(Datepicker.locales, zhTW);
window.Datepicker = Datepicker;
