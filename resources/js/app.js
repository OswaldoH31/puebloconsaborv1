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

Vue.use(VueAxios, axios)

Vue.component('Appi', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    //components: {App},
    //router
});

