window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//token
window.token = document.head.querySelector('meta[name="csrf-token"]')

//jquery
const $ = require('jquery')
window.$ = $
window.jQuery = $

//popper
window.popperjs = require('@popperjs/core')

//bootstrap
const bootstrap = require('bootstrap')
window.bootstrap = bootstrap
require('../../node_modules/bootstrap/dist/js/bootstrap.min')


//bootbox
window.bootbox = require('bootbox')

