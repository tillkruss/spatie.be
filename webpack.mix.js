const { mix } = require('laravel-mix');

require('laravel-mix-purgecss');

mix.version()

    .js('resources/assets/js/front/app.js', 'public/js')
    .postCss('resources/assets/css/front/front.css', 'public/css')

    .version()

    .options({
        // Our own set of PostCSS plugins.
        postCss: [
            require('postcss-easy-import')(),
            require('tailwindcss')('./tailwind.js'),
            require('postcss-cssnext')({
                features: {
                    rem: false,
                    customProperties: {
                        preserve: true,
                        warnings: false,
                    },
                },
            }),
        ],

        // CSSNext already processes our css with Autoprefixer, so we don't
        // need mix to do it twice.
        autoprefixer: false,

        // Since we don't do any image preprocessing and write url's that are
        // relative to the site root, we don't want the css loader to try to
        // follow paths in `url()` functions.
        processCssUrls: false,
    })

    .babelConfig({
        plugins: ['syntax-dynamic-import'],
    })

    .webpackConfig({
        output: {
            // The public path needs to be set to the root of the site so
            // Webpack can locate chunks at runtime.
            publicPath: '/',

            // We'll place all chunks in the `js` folder by default so we don't
            // need to worry about ignoring them in our version control system.
            chunkFilename: 'js/[name].js',
        },

        resolve: {
            alias: {
                vue$: 'vue',
            },
        },
    })

    .purgeCss({
        only: ['css/front.css'],
        whitelistPatterns: [/active/, /grid-span/, /fancybox/, /char-/, /fill-/],
    });
