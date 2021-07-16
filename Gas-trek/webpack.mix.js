const mix = require("laravel-mix");

mix.sass("resources/sass/main.sass", "public/css", [])
	.sass("resources/sass/cards.sass", "public/css", [])
	.sass("resources/sass/variables.sass", "public/css", [])
	.sass("resources/sass/footer.sass", "public/css", [])
	.sass("resources/sass/map.sass", "public/css", [])
	.sass("resources/sass/navbar.sass", "public/css", [])
    .sass("resources/sass/animations.sass", "public/css", [])
    .sass("resources/sass/whall.sass", "public/css", [])
    .sass("resources/sass/pricelist.sass", "public/css", []);
