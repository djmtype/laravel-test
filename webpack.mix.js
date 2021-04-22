const mix = require("laravel-mix");

const ImageminPlugin = require("imagemin-webpack-plugin").default;
const CopyWebpackPlugin = require("copy-webpack-plugin");
const imageminMozjpeg = require("imagemin-mozjpeg");

// const ResponsiveImagesLoader = require('responsive-loader')

require("laravel-mix-serve");

require("laravel-mix-blade-reload");

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
        proxy: "http://localhost:8000/",
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

    .sass("resources/css/app.scss", "public/css", {
        // includePaths: ['node_modules']
        //  sassOptions: {
        //   includePaths: ['node_modules']
        // }
    })

    // import KeenSlider from 'keen-slider'

    // const slider = new KeenSlider('#my-keen-slider')

    // .options({
    //     sourceMap: true,
    //     autoprefixer: true,
    //     processCssUrls: true
    // })

    .js("resources/js/app.js", "public/js")

    // .js('node_modules/keen-slider/keen-slider.js', 'public/js/keen-slider.js')

    // .options({ processCssUrls: true })

    .sourceMaps(true, "source-map");

// .setResourceRoot('/public')

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
    mix.sourceMaps(false)
        .copyDirectory("resources/fonts", "public/fonts")
        .copy(
            "node_modules/flickity/dist/flickity.pkgd.js",
            "public/js/flickity.js"
        )

        .copy(
            "node_modules/flickity-fade/flickity-fade.js",
            "public/js/flickity-fade.js"
        )
        .webpackConfig({
          plugins: [
              new CopyWebpackPlugin({
                  patterns: [
                      {
                          from: "resources/images", // -> the source location (relative to where your webpack.mix.js is located)
                          to: "img", // Laravel mix will place this in 'public/assets/images'
                      },
                  ],
              }),
      
              // new ResponsiveImagesLoader ({
      
              //   rules: [
              //     {
              //       test: /\.(jpe?g|png)$/i,
              //       loader: 'responsive-loader',
              //       options: {
              //         sizes: [600, 1200, 1600],
              //         // adapter: require('responsive-loader/sharp')
              //       }
              //     }
              //   ]
              // }),
              new ImageminPlugin({
                  test: /\.(jpe?g|png|gif|svg)$/i,
                  plugins: [
                      imageminMozjpeg({
                          quality: 80,
                      }),
                  ],
              }),
          ],
      })
        .disableNotifications();
}
