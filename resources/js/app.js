require('./bootstrap');

import Vue from 'vue';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-layout', require('./layouts/ChatLayout.vue').default);



const app = new Vue({
    el: '#app',
    data: {
        currentUserLogin: {}
    },
    created() {
        this.getCurrentUserLogin()
    },
    methods: {
        async getCurrentUserLogin() {
            try {
                const response = await axios.get('/getUser')
                this.currentUserLogin = response.data
            } catch(error) {
                console.log(error)
            }
        }
    }
})

