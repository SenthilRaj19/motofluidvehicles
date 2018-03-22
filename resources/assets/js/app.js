
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('add-vehicle', require('./components/AddVehicle.vue'));
Vue.component('edit-vehicle', require('./components/EditVehicle.vue'));
Vue.component('vehicles', require('./components/Vehicles.vue'));
Vue.component('service', require('./components/Service.vue'));
Vue.component('trip', require('./components/Trips.vue'));


const app = new Vue({
    el: '#app',
    data: {
    }
});
