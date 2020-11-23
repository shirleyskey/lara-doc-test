
require('./bootstrap');
import VueRouter from 'vue-router';
import router from './routers';
import Index from './index';
import moment from "moment";
import Vue from 'vue';

window.Vue = require('vue');

Vue.config.devtools = true;

Vue.use(VueRouter);
Vue.filter("fromNow", (value) => moment(value).fromNow());

const app = new Vue({
    el: '#app',
    router, 
    components: {
        index: Index
    }
});
