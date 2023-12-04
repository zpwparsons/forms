import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const FormKitVariants = require('@formkit/themes/tailwindcss')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/Http/Controllers/**/*.php',
        './resources/js/**/*.vue',
        './resources/js/formkit/theme.js',
        './resources/css/formkit/multistep.css',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        FormKitVariants,
    ],
};
