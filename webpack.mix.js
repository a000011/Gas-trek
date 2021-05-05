const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/autosize.js', 'public/js')
    .js('resources/js/banner.js', 'public/js')
    .js('resources/js/scroll.js', 'public/js')
    .js('resources/js/service.js', 'public/js')
    .js('resources/js/examples.js', 'public/js')
    .postCss('resources/css/main.css', 'public/css', [

    ])
    .postCss('resources/css/cards.css', 'public/css', [

    ])
    .sass('resources/css/footer.sass', 'public/css', [

    ])
    .postCss('resources/css/map.css', 'public/css', [

    ])
    .postCss('resources/css/navbar.css', 'public/css', [

    ])
    .postCss('resources/css/pricelist.css', 'public/css', [

    ]);
//mix.sass('resources/sass/app.scss', 'public/css');
