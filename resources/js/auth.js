//
// Import CSS
//
import '../css/app.css';

//
// Import JS Vendor
//
import './vendor.js';

//
// Import common JS
//
import './common/config.js';
import './common/init.js';
import './common/helpers.js';

//
// Init
//
document.addEventListener('DOMContentLoaded', () => {
    window.admin.init.csrfFieldAttribute();
    window.admin.init.initNotify();
});
