require('./bootstrap');
window.Vue = require('vue');
Vue.component('my-form', {
    template:'#my-form'
});
const app = new Vue({
    el: '#app',
    data: {
        range: 0
    },
    methods: {
        addField: function()
        {
            this.range += 1;
        }
    }
});
