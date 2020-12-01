require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import upperFirst from 'lodash/upperFirst'
import camelCase from 'lodash/camelCase'

import App from './layouts/App.vue';

const requireComponent = require.context(
    './components',
    false,
    /Base[A-Z]\w+\.(vue|js)$/
)

requireComponent.keys().forEach(fileName => {
    const componentConfig = requireComponent(fileName)
    const componentName = upperFirst(
        camelCase(
            fileName
                .split('/')
                .pop()
                .replace(/\.\w+$/, '')
        )
    )
    Vue.component(
        componentName,
        componentConfig.default || componentConfig
    )
})

let routes = [];

const requireRoute = require.context(
    '../../Modules/?/Resources/assets/vue/router',
    true,
    /routes.js/
)

requireRoute.keys().forEach(fileName => {
    const routeConfig = requireRoute(fileName)
    routes =  [...routes,...routeConfig.default];
})


Vue.use(VueRouter);

Vue.use(VueAxios, axios);

const router = new VueRouter({ mode: 'history', routes: routes});

$(function(){
    const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
})

