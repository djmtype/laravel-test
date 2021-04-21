const mix = require("laravel-mix")

require("laravel-mix-serve")

require("laravel-mix-blade-reload")

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//  mix.serve({
//     cmd: 'php',
//     args: ['artisan', 'serve'],
//     verbose: true,
//     watch: true,
//     dev: true,
//     prod: false,
//     // hook: 'beforeCompile'
// });



mix
.browserSync({
    proxy: 'http://localhost:8000/'
 })
// .options({
//     postCss: [
//         require('autoprefixer'),
//     ],
//     processCssUrls: true,
// })

// .postCss('resources/css/app.css', 'public/css')


// .options({
//     postCss: [
//         require('postcss-custom-properties')
//     ]
// })

.sass('resources/css/app.scss', 'public/css')

// .options({
//     sourceMap: true,
//     autoprefixer: true,
//     processCssUrls: true
// })

.js("resources/js/app.js", "public/js")

// .options({ processCssUrls: true })

.sourceMaps(true, 'source-map')

.copyDirectory('resources/fonts', 'public/fonts');
  

   

    // .serve({
    //         cmd: 'php',
    //         args: ['artisan', 'serve'],
    //         verbose: true,
    //         watch: true,
    //         dev: true,
    //         prod: false,
    //         // hook: 'beforeCompile'
    //     })

       

       

    // .bladeReload({
    //     //     path: 'resources/views/**/*.blade.php',
    //        debug: true,
    //      });
// .bladeReload({
//     path: 'resources/views/**/*.blade.php',
//     debug: true,
// })
// .sourceMaps();
//     .postCss('resources/css/app.css', 'public/css', [
//     //
// ]);

// mix.serve('php artisan serve', {
//     verbose: true,
//     watch: true,
//     dev: true,
//     prod: false
// });


if (mix.inProduction()) {
    mix
    .sourceMaps(false)
    .disableNotifications();
}