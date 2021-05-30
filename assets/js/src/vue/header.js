window.headerVm = new Vue({
    el: '#header',

    methods: {
        showSideBar: () => { navVm.sidebar.isShow = true; }
    },

    components: getComponents()
});

function getComponents() {
    return {
        'dropdown-set': {
            props: {
                open: {
                    type: Boolean,
                    default: false
                }
            },
            data: function () {
                return {
                    isOpen: this.open
                }
            },
            template: '#header-dropdown-set'
        },

        'dropdown-item': {
            props: ['name', 'href'],
            template: '#header-dropdown-item'
        }
    }
}
