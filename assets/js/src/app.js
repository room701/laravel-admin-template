//
// Helpers
//
import './helpers.js';

//
// Router
//
import Router from './router.js';

//
// Nav Vue instance
//
import './vue/nav.js';

//
// Vue Components
//
import './vue/components-register.js';

//
// Other
//
// TODO: 改成 div 控制會比較好
document.body.addEventListener('click', (e) => {
    if (window.admin.navVm.sidebar.isShow == true)
        window.admin.helpers.toggleNavSidebar(false);
});

//
// Init
//
document.addEventListener('DOMContentLoaded', () => {
    window.admin.helpers.csrfFieldAttribute();
});
