const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.styles([
        'vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'vendor/bower_components/bootstrap/dist/css/bootstrap-theme.min.css',
        'vendor/bower_components/select2/dist/css/select2.min.css',
        'vendor/bower_components/font-awesome/css/font-awesome.min.css',
    ], 'public/css/all.css', './');

    mix.sass([
        'resources/assets/sass/app.scss',
    ], 'public/css/app.css', './');

    mix.scripts([
        'vendor/bower_components/jquery/dist/jquery.min.js',
        'vendor/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'vendor/bower_components/select2/dist/js/select2.min.js',
        'vendor/bower_components/moment/min/moment-with-locales.min.js',
    ], 'public/js/all.js', './');

    mix.scripts([
        'resources/assets/js/app.js',
    ], 'public/js/app.js', './');

    mix.version([
        'public/css/all.css',
        'public/css/app.css',
        'public/js/all.js',
        'public/js/app.js',
    ]);

    mix.copy('vendor/bower_components/bootstrap/dist/fonts', 'public/build/fonts');
    mix.copy('vendor/bower_components/font-awesome/fonts', 'public/build/fonts');
});
