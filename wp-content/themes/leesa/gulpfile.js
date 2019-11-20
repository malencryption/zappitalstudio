// function defaultTask(cb) {
// 	cb();

var elixir = require('laravel-elixir');
elixir.config.assetsPath = './';

elixir(function(mix) {
    mix.sass("./css/base.scss", "public/css/");
});

// elixir(function(mix) {
//     mix.styles([
//         "normalize.css",
//         "main.css"
//     ], 'public/build/css/everything.css');
// });
// }

// exports.default = defaultTask