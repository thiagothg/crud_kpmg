require('./bootstrap');

//datables
require('datatables.net-bs5');
window.$.extend(window.$.fn.dataTable.defaults, {
    language: { url: 'datatables_pt_br.json' }
});

//FontAwesome
require('@fortawesome/fontawesome-free/js/all.js');

//masks
require('inputmask');



