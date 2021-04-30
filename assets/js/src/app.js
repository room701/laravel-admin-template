//
// Vendor
//
import 'alpine-magic-helpers';
import 'alpinejs';
import '@github/include-fragment-element';

//
// Router
//
import Router from './router.js';

//
// Helpers
//
import './helpers.js';

//
// Root Alpine Instance
//
window.rootAlpineInstance = () => {
    return {
        sidebar: {
            active: null,
            isShow: false
        },

        init() {
            new Router();
        }
    }
};
