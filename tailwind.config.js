const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                bebas: ["'bebas Neue', cursiv"],
            },

            colors: {
                'primary': '#3490dc',
                'secondary': '#ffed4a',
                'danger': '#e3342f',
                'default': '#161b32',
                'contrast': '#ACC8E5',
            },
            
            backgroundColor: ['active'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
