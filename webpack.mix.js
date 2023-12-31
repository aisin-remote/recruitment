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
	'public/website/css/bootstrap-grid.css',
	'public/website/css/icons.css',
	'public/website/css/animate.min.css',
	'public/website/css/font.css',
	'public/website/css/font-awesome.css',
	'public/website/css/style.css',
	'public/website/css/responsive.css',
	'public/website/css/chosen.css',
    'public/website/css/colors/colors.css',
    'public/website/css/bootstrap.css',
    'public/website/css/bootstrap-datepicker.css',
    'public/website/css/slick.css',
    'public/website/css/custom.css'
], 'public/website/css/all.css');

mix.babel([
    'public/website/js/jquery.min.js',
    'public/website/js/modernizr.js',
    'public/website/js/cleave.min.js',
    'public/website/js/sweetalert.min.js',
    'public/website/js/script.js',
    'public/website/js/bootstrap.min.js',
    'public/website/js/slick.min.js',
    'public/website/js/select-chosen.js',
    'public/website/js/bootstrap-datepicker.js'
], 'public/website/js/all.js');

mix.babel([
    'public/website/js/dynamic_page/login-register.js',
], 'public/website/js/dynamic_page/login-register.min.js');

mix.babel([
    'public/website/js/dynamic_page/change-password.js',
], 'public/website/js/dynamic_page/change-password.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/personal-identity.js',
], 'public/website/js/dynamic_page/personal-identity.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/education.js',
], 'public/website/js/dynamic_page/education.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/family.js',
], 'public/website/js/dynamic_page/family.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/work-experience.js',
], 'public/website/js/dynamic_page/work-experience.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/interest-concept.js',
], 'public/website/js/dynamic_page/interest-concept.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/document.js',
], 'public/website/js/dynamic_page/document.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/social-activity.js',
], 'public/website/js/dynamic_page/social-activity.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/other.js',
], 'public/website/js/dynamic_page/other.min.js');

mix.babel([
    'public/website/js/dynamic_page/profile.js',
    'public/website/js/dynamic_page/applied-job.js',
], 'public/website/js/dynamic_page/applied-job.min.js');


