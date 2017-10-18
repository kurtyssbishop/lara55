let mix = require('laravel-mix');
let ImageminPlugin = require('imagemin-webpack-plugin').default;

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

mix.js([
        'node_modules/gridforms/gridforms/gridforms.js',
        'resources/assets/js/app.js'
    ], 'public/js/app.js')
    .extract(["vue", "axios"])
    .version()
    .sass('resources/assets/sass/app.scss', 'public/css')
    .webpackConfig({
        module: {
            rules: [{
                test: /\.tsx?$/,
                loader: 'ts-loader',
                options: { appendTsSuffixTo: [/\.vue$/] },
                exclude: /node_modules/,
            }, ],
        },
        plugins: [
            new ImageminPlugin({
                //            disable: process.env.NODE_ENV !== 'production', // Disable during development
                pngquant: {
                    quality: '95-100',
                },
                test: /\.(jpe?g|png|gif|svg)$/i,
            }),
        ],
        resolve: {
            extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
        },
    })
    .copy('resources/assets/images', 'public/images', false)