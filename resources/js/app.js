import { store } from "./store/store";

import router from "./router";
require("./bootstrap");

window.Vue = require("vue");
Vue.use(require('vue-chunk'));

import VueSweetalert2 from "vue-sweetalert2";

// If you don't need the styles, do not connect
import "sweetalert2/dist/sweetalert2.min.css";

Vue.use(VueSweetalert2);

import SimpleVueValidation from "simple-vue-validator";
Vue.use(SimpleVueValidation);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component(
    "Certificatons",
    require("./components/certifications/prinCertification").default
);

const app = new Vue({
    el: "#app",
    router,
    store
});
