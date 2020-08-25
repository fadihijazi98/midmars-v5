import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent";
import TestComponent from "./components/TestComponent";
import Home from "./components/Home";


Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: '/',
            component: Home,
            meta: { title:"MidMars", }
        },
        {
            path: '/example',
            component: ExampleComponent,
            meta: { title:"Example - midmars", }
        },
        {
            path: '/test',
            component: TestComponent,
            meta: { title:"Test - midmars", }
        },
    ],
    mode: 'history'
});
