import _ from 'lodash';
import axios from 'axios';
import * as bootstrap from 'bootstrap'
import swal from 'sweetalert2'

window._ = _
window.swal = swal;
window.axios = axios;
window.bootstrap = bootstrap;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

