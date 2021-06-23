window.navVm = new Vue({
    el: '#nav',

    data: {
        currentUrl: window.location.origin + window.location.pathname,
        sidebar: {
            isShow: false,
            active: null
        }
    },

    watch: {
        'sidebar.isShow': () => { document.body.classList.toggle('overflow-hidden'); }
    },

    components: getComponents()
});

function getComponents() {
    return {
        'nav-item': {
            props: ['name', 'href'],

            data: function() {
                return {
                    isActive: this.$root.currentUrl == this.href
                              || this.$root.sidebar.active ==  this.href
                }
            },

            mounted: function() {
                if (this.isActive) {
                    if (this.$parent != this.$root)
                        this.$parent.isOpen = true;
                }
            },

            template: '#nav-item'
        },

        'nav-dropdown': {
            props: {
                name: {
                    type: String,
                    required: true
                },
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
            template: '#nav-dropdown'
        }
    }
}
