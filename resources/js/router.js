import VueRouter from 'vue-router';
import Home from './components/Home';
import AdminLogin from './components/admin/AdminLogin';
import Admin from './components/admin/Admin';
import Login from './components/Login';
import Register from './components/Register';

let routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    {
        path: '/admin/login',
        name: 'adminlogin',
        component: AdminLogin
    },
    {
        path: '/admin', 
        name: 'admin',
        component: Admin
    }
];

export default new VueRouter({
    routes,
    mode : 'history'
});