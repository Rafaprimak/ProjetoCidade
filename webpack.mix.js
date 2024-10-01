const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
   .vue() // Adicione esta linha para configurar o Vue loader
   .postCss('resources/css/app.css', 'public/css', [
       tailwindcss('./tailwind.config.js'),
   ]);

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.json', '.vue'], // Certifique-se de que as extensões estão corretas
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            }
        ]
    }
});