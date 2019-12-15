let mix = require('laravel-mix');

mix.js('src/assets/js/bundle.js', 'dist/assets/js')
    .sass('src/assets/scss/bundle.scss', 'dist/assets/css/style.css')
    .copy('src/index.php', 'dist/')
    .copy('src/php', 'dist/php')
    .options({
        postCss: [
            require('autoprefixer')({
                browsers: ['last 13 versions'],
            })
        ]
    });

/*
** File hierarchy
* |-assets
* |   |-sass (bundle.scss) -> css (style.css)
* |   |-js   -> js
* |   |-img  -> img
* |-php
* |-index.php
*/
