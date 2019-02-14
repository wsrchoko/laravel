let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.tsx?$/,
                    loader: 'ts-loader',
                    exclude: /node_modules/,
                },
            ],
        },
        resolve: {
            extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
        }
    });

mix.styles([
    'resources/assets/css/icomoon.css',
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/core.css',
    'resources/assets/css/components.css',
    'resources/assets/css/colors.css',
    'resources/assets/css/custom.css',
    'resources/assets/css/icons-auditii.css',
    'resources/assets/css/progress-tracker.css',
    'resources/assets/css/wickedpicker.css'
], 'public/css/vendor.css');

mix.scripts([
    'resources/assets/js/vendor/jquery.js',
    'resources/assets/js/vendor/bootstrap.js',
    'resources/assets/js/vendor/nicescroll.min.js',
    'resources/assets/js/vendor/uniform.js',
    'resources/assets/js/vendor/anytime.min.js',
    'resources/assets/js/vendor/picker.js',
    'resources/assets/js/vendor/picker.date.js',
    'resources/assets/js/vendor/fileinput.min.js',
    'resources/assets/js/vendor/widgets.min.js',
    'resources/assets/js/vendor/slider_pips.min.js',
    'resources/assets/js/vendor/switchery.min.js',
    'resources/assets/js/vendor/sweet_alert.min.js',
    'resources/assets/js/vendor/progressbar.min.js',
    'resources/assets/js/vendor/steps.min.js',
    'resources/assets/js/vendor/jSignature.min.js',
    'resources/assets/js/vendor/blockui.min.js',
    'resources/assets/js/vendor/moment.min.js',
    'resources/assets/js/vendor/fullcalendar.min.js',
    'resources/assets/js/vendor/spin.min.js',
    'resources/assets/js/vendor/ladda.min.js',
    'resources/assets/js/vendor/wickedpicker.js'
], 'public/js/vendor.js')

mix.copy('resources/assets/fonts', 'public/fonts');
mix.copy('resources/assets/images', 'public/images');