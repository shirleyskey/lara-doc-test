
require('./bootstrap');
import VueRouter from 'vue-router';
import router from './routers';
import Index from './index'

window.Vue = require('vue');

Vue.config.devtools = true;

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router, 
    components: {
        index: Index
    }
});
