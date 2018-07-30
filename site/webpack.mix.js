let mix = require('laravel-mix');
let webpack = require('webpack');

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

mix.react('resources/assets/js/index.jsx', 'public/js/app.js')
   .sass('resources/assets/sass/app.scss', 'public/css');
/*
mix.webpackConfig({
    plugins: [
        new webpack.optimize.CommonsChunkPlugin({
            names: ["commons", "vendor"],
            filename: 'js/[name].js',
            minChunks: 2
        })
    ]
});*/