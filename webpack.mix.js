const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'public/assets/vendor/bootstrap/css/bootstrap.min.css',
    // 'public/assets/vendor/font-awesome/css/font-awesome.min.css',
    'public/assets/css/fontastic.css',
    'public/assets/css/grasp_mobile_progress_circle-1.0.0.min.css',
    'public/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
    'public/assets/css/style.default.css',
    'public/assets/css/custom.css',
'public/assets/css/toastr.min.css',
'public/assets/css/dataTables.min.css'

], 'public/assets/css/admin.app.css');



mix.scripts([
    'public/assets/vendor/jquery/jquery.min.js',
    'public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'public/assets/js/grasp_mobile_progress_circle-1.0.0.min.js',
    'public/assets/vendor/jquery.cookie/jquery.cookie.js',
    'public/assets/vendor/chart.js/Chart.min.js',
    'public/assets/vendor/jquery-validation/jquery.validate.min.js',
    'public/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
    'public/assets/js/front.js',
    'public/assets/js/toastr.min.js',
    'public/assets/js/jquery.dataTables.js'
], 'public/assets/js/admin.app.js');








mix.styles([
        // 'public/assets/web/fonts/material-icons/iconfont/material-icons.css',
        'public/assets/web/plugins/swiper/swiper.min.css',
        'public/assets/web/plugins/fancybox/jquery.fancybox.min.css',
        'public/assets/web/plugins/bootstrap/bootstrap.min.css',
        'public/assets/web/plugins/wow/animate.min.css',
        'public/assets/web/css/style.css',

        // 'public/assets/web/tableDesign/vendor/animate/animate.css',
        'public/assets/web/tableDesign/vendor/select2/select2.min.css',
        'public/assets/web/tableDesign/vendor/perfect-scrollbar/perfect-scrollbar.css',
        // 'public/assets/web/tableDesign/css/util.css',
        // ''
], 'public/assets/web/css/web.app.css');




mix.scripts([

        'public/assets/web/plugins/jquery.js',
        'public/assets/web/plugins/popper.js',
        'public/assets/web/plugins/bootstrap/bootstrap.min.js',
        'public/assets/web/plugins/swiper/swiper.min.js',
        'public/assets/web/plugins/fancybox/jquery.fancybox.min.js',
        'public/assets/web/plugins/wow/wow.js',
        'public/assets/web/js/main.js',

        // 'public/assets/web/tableDesign/vendor/jquery/jquery-3.2.1.min.js',
        // 'public/assets/web/tableDesign/vendor/bootstrap/js/popper.js',
        'public/assets/web/tableDesign/vendor/select2/select2.min.js',
        'public/assets/web/tableDesign/vendor/perfect-scrollbar/perfect-scrollbar.min.js'


], 'public/assets/web/js/web.app.js');


