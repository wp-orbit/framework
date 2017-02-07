const elixir = require('laravel-elixir');

elixir( function(mix) {
    mix
        // Build Sass assets.
        .sass('./src/scss/wp-orbit.scss', './assets/css/wp-orbit.css' )

        // Concatenate site scripts.
        .scripts(
            [
                './src/js/administration/utility.js',
                './src/js/administration/meta-boxes/posts-pivoter-view-model.js'
            ],

            // Output destination.
            './assets/js/wp-orbit.js'
        );
});