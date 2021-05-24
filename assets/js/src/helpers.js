window.helpers = {};

window.helpers.goTop = (smooth = true) => {
    document.documentElement.scrollTo({
        top: 0,
        behavior: smooth ? 'smooth' : 'auto'
    });
};

window.helpers.initDatepicker = () => {
    $('.js-datepicker').datepicker();
};
