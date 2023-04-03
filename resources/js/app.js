import './bootstrap';
require('./bootstrap');
import '../sass/app.scss'
import App from './App.vue'
import { createApp } from 'vue'
import HelloWorld from '@/components/HelloWorld.vue'

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld
    },
}).mount('#app');


// createApp(App).mount("#app")





