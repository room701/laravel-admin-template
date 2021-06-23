//
// Router
//
import Router from './router.js';

//
// Helpers
//
import './helpers.js';

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
    if (navVm.sidebar.isShow == true)
        window.helpers.toggleNavSidebar(false);
});
