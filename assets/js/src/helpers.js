window.admin.helpers = {

    toggleNavSidebar: (open = true) => {
        Vue.set(window.admin.navVm.sidebar, 'isShow', open);
    },

    goTop: (smooth = true) => {
        document.documentElement.scrollTo({
            top: 0,
            behavior: smooth ? 'smooth' : 'auto'
        });
    },

    notify: (message, type = 'success') => {
        new Noty({
            text: message
        }).show();
    }

};
