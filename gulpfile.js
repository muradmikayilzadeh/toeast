var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass([
        'about.scss',
        'alumni.scss',
        'blog.scss',
        'contacts.scss',
        'enroll.scss',
        'gallery.scss',
        'news.scss',
        'style.scss',
    ], 'public/assets/css');
});
