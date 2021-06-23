window.helpers = {

    toggleNavSidebar: (open = true) => {
        Vue.set(window.navVm.sidebar, 'isShow', open);
    },

    goTop: (smooth = true) => {
        document.documentElement.scrollTo({
            top: 0,
            behavior: smooth ? 'smooth' : 'auto'
        });
    },

    initDatepicker: () => {
        $('.js-datepicker').datepicker();
    }

};
