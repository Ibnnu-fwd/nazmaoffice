const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['rubik', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary  : "#2C2F75",
                secondary: "#ED2B2A",
                info     : "#F15A59",
                danger   : "#D21312",
                success  : "#5D9C59",
                warning  : "#FD8D14",
                light    : "#F2F2F2",
                dark     : "#070A52",
                black    : "#000000",
                white    : "#FFFFFF",
                gray: {
                    100: "#F2F2F2",
                    200: "#E0E0E0",
                    300: "#BDBDBD",
                    400: "#464646",
                    500: "#4F4F4F",
                    600: "#333333",
                    700: "#1A1A1A",
                    800: "#070A52",
                    900: "#000000",
                },
                orange: {
                    100: "#FFF3E0",
                    200: "#FFE0B2",
                    300: "#FFCC80",
                    400: "#FFB74D",
                    500: "#FFA726",
                    600: "#FB8C00",
                    700: "#F57C00",
                    800: "#EF6C00",
                    900: "#E65100",
                },
            },
        },
        fontSize: {
            sm: '0.8rem',
            base: '1rem',
            xl: '1.25rem',
            '2xl': '1.563rem',
            '3xl': '1.953rem',
            '4xl': '2.441rem',
            '5xl': '3.052rem',
          }
    },

    plugins: [require('@tailwindcss/forms'), require('flowbite/plugin'), require('@tailwindcss/line-clamp')],
};
