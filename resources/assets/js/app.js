
/**
 * Project's JavaScript dependencies
 */

window.$ = window.jQuery = require('jquery');
window.Cookies = require('js-cookie');

require('jqueryui');
require('bootstrap');
require('jquery-slimscroll');

Vue.component(
    'articulos',
    require('./components/Articulos.vue')
);

const app = new Vue({
    el: '#app'
});