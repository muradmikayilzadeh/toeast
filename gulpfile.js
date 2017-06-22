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
    mix.sass('about.scss', 'public/assets/css/about.css');
    mix.sass('alumni.scss', 'public/assets/css/alumni.css');
    mix.sass('blog.scss', 'public/assets/css/blog.css');
    mix.sass('contacts.scss', 'public/assets/css/contacts.css');
    mix.sass('enroll.scss', 'public/assets/css/enroll.css');
    mix.sass('gallery.scss', 'public/assets/css/gallery.css');
    mix.sass('news.scss', 'public/assets/css/news.css');
    mix.sass('style.scss', 'public/assets/css/style.css');
});
