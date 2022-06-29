require('./bootstrap');
/*
window.Vue = require('vue').default;


Vue.component('Appi', require('./components/ExampleComponent.vue').default);
Vue.component('Appi', require('./components/Todo.vue').default);

const app = new Vue({
    el: '#app',
});
*/

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import router from './router'
import App from './layouts/App'

Vue.use(VueAxios, axios)
Vue.use(VueRouter)

//Vue.component('todo', require('./components/Todo.vue').default);

const app = new Vue({
    el: '#app',
    components: {App},
    router
});

