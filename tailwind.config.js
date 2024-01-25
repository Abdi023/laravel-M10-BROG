import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            primary: "Playfair Display",
            body: "Work Sans",
        },
        container: {
            padding: {
                default: "1rem",
                lg: "3rem",
            },
        },
        extend: {
            colors: {
                "light-primary": "#EEF5FF",
                "light-secondary": "#B4D4FF",
                "light-tail-100": "#86B6F6",
                "light-tail-500": "#176B87",
                "dark-primary": "#0F0F0F",
                "dark-secondary": "#232D3F",
                "dark-green-500": "#005B41",
                "dark-green-100": "#008170",
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red,
                paragraph: "#332941",
                accent: {
                    default: "#614BC3",
                    hover: "#A2FF86",
                }
            }
        }
    },

    plugins: [forms],
};
