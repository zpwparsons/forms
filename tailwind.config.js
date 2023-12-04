import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import FormKitVariants from '@formkit/themes/tailwindcss';
import VueForm from '@vueform/vueform/tailwind';

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
        './vueform.config.js',
        './node_modules/@vueform/vueform/themes/tailwind/**/*.vue',
        './node_modules/@vueform/vueform/themes/tailwind/**/*.js',
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
        VueForm,
    ],
};
