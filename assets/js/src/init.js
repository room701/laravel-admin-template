window.admin.init = {

    initDatepicker: () => {
        $('.js-datepicker').datepicker();
    },

    csrfFieldAttribute: () => {
        let fields = document.querySelectorAll('input[type="hidden"]');
        fields.forEach(function(field) {
            field.setAttribute('hidden', true);
        });
    },

    initNotify: () => {
        // 套件通用設定
        Noty.overrideDefaults({
            layout: 'topRight',
            theme: 'sunset'
        });
    }

};
