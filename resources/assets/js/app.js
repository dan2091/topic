
/**
 * Project's JavaScript dependencies



window.$ = window.jQuery = require('jquery');
window.Cookies = require('js-cookie');

require('jqueryui');
require('bootstrap');
require('jquery-slimscroll'); */
import Vue from 'vue'
import VueRouter from 'vue-router'

window.Vue = require('vue');

Vue.component('articulos', require('./components/Articulos.vue'));
/*Vue.component('button-counter', {
    data: function () {return {count: 0}},
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
  });*/

const app = new Vue({
    el: '#app'
});