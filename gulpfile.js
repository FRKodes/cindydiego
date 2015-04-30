var elixir = require('laravel-elixir');
// require('laravel-elixir-stylus');
require('laravel-elixir-stylus');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.less('app.less');
// });

elixir(function(mix) {
   mix.stylus(['icons-font.styl', 'main.styl'])
      .styles([
      	'public/css/bootstrap.min.css',
      	'public/css/buki-font.css',
      	'public/css/slick.css',
            'public/css/audio.css',
      	'public/css/main.css'
      	],'public/css/all.min.css', 'public/css')
      .scripts([
      	'public/js/jquery-2.1.3.min.js',
      	'public/js/bootstrap.min.js',
      	'public/js/slick.min.js',
      	'public/js/custom.js'
      	],'public/js/custom-scripts.min.js', 'public/js')
      .version(['public/css/all.min.css', 'public/js/custom-scripts.min.js', 'public/favicon.png']);
});