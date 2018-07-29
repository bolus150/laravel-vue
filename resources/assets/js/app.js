'use strict'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

const axios = require('axios');

const edit_profile = Vue.component('edit_profile', require('./components/Edit-profile.vue'));
const calendar = Vue.component('calendar_picker', require('./components/Calendar.vue'));

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    'X-Requested-With': 'XMLHttpRequest'
};

Vue.config.productionTip = true;
// Vue.config.productionTip = false;

const app = new Vue({
    el: '#app',
    components: {
        edit_profile: edit_profile,
        calendar: calendar
    },
});
