require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {
      'calculator': () => import('./components/Calculator')
    },
    data: () => ({
      showNavigation: true,
      stock: 1
    }),
    methods: {
      toggleMenu() {
        this.showNavigation = !this.showNavigation;
      },

      logout() {
        document.getElementById('logout-form').submit();
        document.getElementById('logout-form-mobile').submit();
      }
    }
});
