//
// Router
//
import Router from './router.js';

//
// Helpers
//
import './helpers.js';

//
// Header Vue instance
//
import './vue/header.js';

//
// Nav Vue instance
//
import './vue/nav.js';

//
// Other
//
document.body.addEventListener('click', (e) => {
    if (navVm.sidebar.isShow == true)
        navVm.sidebar.isShow = false;
});
