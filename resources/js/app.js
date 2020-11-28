require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './components/App.vue';


Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const routes = [
    // {
    //     name: 'home',
    //     path: '/',
    //     component: HomeComponent
    // },
    // {
    //     name: 'create',
    //     path: '/create',
    //     component: CreateComponent
    // },
    // {
    //     name: 'posts',
    //     path: '/posts',
    //     component: IndexComponent
    // },
    // {
    //     name: 'edit',
    //     path: '/edit/:id',
    //     component: EditComponent
    // }
];

const router = new VueRouter({ mode: 'history', routes: routes});

$(function(){
    const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
})

