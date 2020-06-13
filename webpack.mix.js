let mix = require('laravel-mix');

mix.js('src/assets/js/bundle.js', 'dist/assets/js')
    .sass('src/assets/scss/bundle.scss', 'dist/assets/css/style.css')
    .copy('src/index.php', 'dist/')
    .copy('src/mailController.php', 'dist/mailController.php')
    .copy('src/components', 'dist/components')
    // .copy('src/assets/img', 'dist/assets/img')
    .options({
        postCss: [
            require('autoprefixer')({
                browsers: ['last 13 versions'],
            }),
            require('css-mqpacker')
        ],
        processCssUrls: false,
    });

/*
** File hierarchy
* |-assets
* |   |-sass (bundle.scss) -> css (style.css)
* |   |-js   -> js
* |   |-img  -> img
* |-components
* |   |-icons (svg)
* |-php
* |-index.php
*/
