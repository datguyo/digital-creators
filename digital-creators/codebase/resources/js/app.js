window.Vue = require('vue').default;

const app = new Vue({
  el: '#app',

  data() {
    return {
      userDropdown: false,
      mobileMenu: false,
    }
  },

  methods: {
    toggleUserDropdown() {
      this.userDropdown = !this.userDropdown
    },
    showMobileMenu() {
      this.mobileMenu = true
    },
    hideMobileMenu() {
      this.mobileMenu = false
    }
  },

});
