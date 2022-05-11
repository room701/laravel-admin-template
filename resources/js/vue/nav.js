import { createApp } from 'vue/dist/vue.esm-bundler.js';

window.admin.navVm = createApp({
    data() {
        return {
            currentUrl: window.location.origin + window.location.pathname,
            sidebar: {
                isShow: false,
                active: null
            }
        }
    },

    watch: {
        'sidebar.isShow': () => { document.body.classList.toggle('overflow-hidden'); }
    },

    components: getComponents()
}).mount('#nav');

function getComponents() {
    return {
        'nav-item': {
            props: ['name', 'href'],

            data() {
                return {
                    isActive: this.$root.currentUrl == this.href
                              || this.$root.sidebar.active ==  this.href
                }
            },

            mounted() {
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
            data () {
                return {
                    isOpen: this.open
                }
            },
            template: '#nav-dropdown'
        }
    }
}