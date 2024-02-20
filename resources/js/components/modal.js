(function() {
    window.admin.modal = {
        open: (id) => {
            let modal = getModal(id);
            modal.classList.remove('hidden');

            document.body.classList.add('overflow-hidden');
        },

        close: (id) => {
            let modal = getModal(id);
            modal.classList.add('hidden');

            document.body.classList.remove('overflow-hidden');
        },

        toggle: (id) => {
            let modal = getModal(id);
            modal.classList.toggle('hidden');

            document.body.classList.toggle('overflow-hidden');
        }
    };

    function getModal(id) {
        return document.getElementById(id);
    }
})();
