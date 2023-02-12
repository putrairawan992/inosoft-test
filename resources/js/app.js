require('./bootstrap');

window.Vue = require('vue').default;

var router = require('./routes').default

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

import App from './components/App'
Vue.component('app', App)

window.onload = function() {
    const app = new Vue({
        el: '#app',
        router,
        render: h => h(App)
    });
}

export default app;