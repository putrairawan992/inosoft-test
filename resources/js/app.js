require('./bootstrap');

window.Vue = require('vue').default;
var router = require('./routes').default
var bootstrapVue = require('bootstrap-vue').default

import "bootstrap-vue/dist/bootstrap-vue.css"

window.Vue.use(bootstrapVue)

const app = new Vue({
  router,
  el: '#app',
});