// webpack.config.js
const Encore = require('@symfony/webpack-encore');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');


let build_env = 'dev';
let is_production_patt = /production/;
let string_build = process.argv[2];
if (is_production_patt.test(string_build)) {
    build_env = 'production';
}

console.log('build ' + build_env);


Encore

// Env
    .configureRuntimeEnvironment(build_env)

    // the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if you JavaScript imports CSS.
     */
    .addEntry('app', './assets/js/app.js')
    .addEntry('homepage', './assets/js/components/forum/homepage.js')

    .enableBuildNotifications()
    // fixes modules that expect jQuery to be global
    .autoProvidejQuery()

    .addPlugin(
        new UglifyJsPlugin({
            include: /\.min\.js$/,
            minimize: true
        })
    )

    .enableSassLoader()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableVersioning()
    .enableReactPreset()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();