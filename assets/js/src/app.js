//
// Vendor
//
import 'alpine-magic-helpers';
import 'alpinejs';

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
            window.addEventListener('load', () => new Router() );
        }
    }
};
