/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.echarts = require('echarts');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('sign-in-component', require('./components/auth/SignInComponent.vue'));
Vue.component('sign-up-component', require('./components/auth/SignUpComponent.vue'));
Vue.component('workbench', require('./components/workbench/Workbench.vue'));
Vue.component('user-profile', require('./components/users/Profile.vue'));
Vue.component('dashboard', require('./components/dashboard/Dashboard.vue'));

// widgets
Vue.component('checkbox-widget', require('./components/widgets/CheckboxWidget.vue'));
Vue.component('page-header-widget', require('./components/widgets/PageHeaderWidget.vue'));
Vue.component('v-maxchars', require('./components/widgets/ValidateMaxCharacters.vue'));

const app = new Vue({
    el: '#app'
});
