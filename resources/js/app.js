/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import router from './router';

import App from './components/App';
import LoginPanel from './components/LoginPanel';
import Home from './components/Home';
import Login from './components/Login';
import Admin from './components/admin/Admin';
import AdminLogin from './components/admin/AdminLogin';

Vue.component('LoginPanel',LoginPanel);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter);

const app = new Vue({
    render: h => h(App),
    router
}).$mount('#app');
