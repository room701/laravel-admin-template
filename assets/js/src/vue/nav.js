import Vue from '../../../../node_modules/vue/dist/vue.js';

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
        'dropdown-set': {
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
            template: '#nav-dropdown-set'
        },

        'dropdown-item': {
            props: ['name', 'href'],

            data: function () {
                return {
                    isActive: this.$root.currentUrl == this.href || this.$root.sidebar.active ==  this.href
                }
            },

            mounted: function() {
                if (this.isActive) {
                    this.$parent.isOpen = true;
                }
            },

            template: '#nav-dropdown-item'
        }
    }
}
