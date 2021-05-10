const mix = require('laravel-mix');

mix.js('resources/js/banner.js', 'public/js')
    .js('resources/js/scroll.js', 'public/js')
    .sass('resources/sass/main.sass', 'public/css', [])
    .sass('resources/sass/cards.sass', 'public/css', [])
    .sass('resources/sass/variables.sass', 'public/css', [])
    .sass('resources/sass/footer.sass', 'public/css', [])
    .sass('resources/sass/map.sass', 'public/css', [])
    .sass('resources/sass/navbar.sass', 'public/css', [])
    .sass('resources/sass/pricelist.sass', 'public/css', [])
