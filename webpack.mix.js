// const mix = require('laravel-mix');
let mix = require('laravel-mix');

mix.css('resources/css/app.css', 'public/css', [require('tailwindcss'),]);
mix.js('resources/js/app.js', 'public/js');