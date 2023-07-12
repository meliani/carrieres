import M from '@materializecss/materialize'

window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');
    require('@materializecss/materialize');
    // require('materialize-css');
    // require('select2');
    // $('select').select2();
    M.AutoInit();
//  require('bootstrap-sass');
} catch (error) {
    console.log(error);
}
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

/* import "https://fonts.googleapis.com/css?family=Raleway:300,400,600";
import "variables";
import "materialize-css/dist/css/materialize.min.css";
import "materialize-css/dist/js/materialize.min.js";
import "material-icons/iconfont/material-icons.css";
import "animate.css/animate.min.css";
import "aos/dist/aos.css";
import "aos/dist/aos.js";
import "jquery/dist/jquery.min.js";
import "jquery.easing/jquery.easing.min.js";
import "jquery-validation/dist/jquery.validate.min.js";
import "jquery-validation/dist/additional-methods.min.js";
import "jquery-validation/dist/localization/messages_en.min.js";
import "jquery-validation/dist/localization/messages_fr.min.js";
import "node_modules/@materializecss/materialize/sass/materialize";
import "https://fonts.googleapis.com/icon?family=Material+Icons"; */
