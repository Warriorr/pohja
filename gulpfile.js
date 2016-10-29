const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('./node_modules/materialize-css/sass/materialize.scss', 'public/css/app.css')
        .scripts('./node_modules/materialize-css/dist/js/materialize.js')
        .copy('./node_modules/materialize-css/dist/fonts', 'public/fonts')
        .webpack('app.js');
});
