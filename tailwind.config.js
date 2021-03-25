const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'gray-background': '#f7f8fc',
                'blue':'#328af1',
                'blue-hover':'#2879bd',
                'yellow': '#ffc73c',
                'red':'#ec454f',
                'green': '#1aab8b',
                'purple':'#8b60ed'
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem'
            },
            maxWidth: {
                custom:'62.5rem'
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
