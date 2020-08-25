import Vue from 'vue';
import router from './router';
import vuetify from './vuetify'
import App from "./components/App";
import 'material-design-icons-iconfont/dist/material-design-icons.css';

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        App,
    },
    vuetify,
    router,
});
