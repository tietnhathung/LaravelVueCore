import Users from "../../Modules/Core/Resources/assets/js/components/users/index";

require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './components/App.vue';

import testComp from './components/test';
import UserRoute from '../../Modules/Core/Resources/assets/js/app';


Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const routes = [
    UserRoute,
    {
        path: '/testComp',
        component: testComp,
        // children: [
        //     {
        //         path: 'profile',
        //         component: UserProfile
        //     },
        //     {
        //         path: 'posts',
        //         component: UserPosts
        //     }
        // ]
    }
];
console.log(routes)

const router = new VueRouter({ mode: 'history', routes: routes});

$(function(){
    const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
})

