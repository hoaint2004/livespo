let mix = require('laravel-mix');
const path = require('path');

mix.setPublicPath('public')
    .options({
        postCss: [
            require('autoprefixer')({
                overrideBrowserslist: ['last 6 versions'],
                grid: true
            })
        ]
    });

let scss = [
    {
        from: "resources/scss/recognize.scss",
        to: "public/scss/recognize.css",
    },

    {
        from: "resources/scss/post-recognize.scss",
        to: "public/scss/post-recognize.css",
    }
];

// Vòng lặp để build từng file SCSS
scss.forEach(file => {
    mix.sass(file.from, file.to);
});
