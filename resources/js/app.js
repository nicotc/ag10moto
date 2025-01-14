import './bootstrap';
import * as bootstrap from 'bootstrap';
import jQuery from 'jquery';
import select2 from "select2"
select2();
import toastr from 'toastr';
import Swal from 'sweetalert2/dist/sweetalert2.js';
window.toastr = toastr;
window.Swal = Swal;
import ApexCharts from 'apexcharts'
window.ApexCharts = ApexCharts;
import PerfectScrollbar from 'perfect-scrollbar';
window.PerfectScrollbar = PerfectScrollbar;
// quill
import Quill from 'quill';
window.Quill = Quill;
// shepherd
import Shepherd from 'shepherd.js';
window.Shepherd = Shepherd;
// Popper
import * as Popper from '@popperjs/core';
window.Popper = Popper;
// cleave
import Cleave from 'cleave.js';
window.Cleave = Cleave;



window.bootstrap = bootstrap;
window.$ = jQuery;

// typeahead-js
import Bloodhound from 'bloodhound-js';
import 'typeahead.js';
window.Bloodhound = Bloodhound;

// moment.js
import moment from 'moment';
window.moment = moment;

// hammer.js
import Hammer from 'hammerjs';
window.Hammer = Hammer;


// flatpickr .
import flatpickr from 'flatpickr';
window.flatpickr = flatpickr;

// // Inicializar librerías
import AOS from 'aos';
AOS.init();


