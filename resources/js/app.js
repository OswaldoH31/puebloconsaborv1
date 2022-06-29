require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('Appi', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
