var Encore = require('@symfony/webpack-encore');

// Template front-end build configuration
Encore
    .setOutputPath('wp-content/plugins/bp_wpuc/themes/default/assets/build')
    .setPublicPath('/wp-content/plugins/bp_wpuc/themes/default/assets/build')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader()
    .disableSingleRuntimeChunk()
    .enableSourceMaps(!Encore.isProduction())
    .configureBabel(() => {
    }, {
        useBuiltIns: 'usage',
        corejs: 3
    })
    .addEntry('theme', [
        './.dev/scss/theme.scss',
        './.dev/js/theme.js'
    ]);

// Export configurations
module.exports = Encore.getWebpackConfig();