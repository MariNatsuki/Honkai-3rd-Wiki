/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import "./bootstrap"
import Vue from "vue"
import App from './App.vue'
import router from "./router"

new Vue({
    el: '#app',
    router,
    components: {
        App
    },
})
